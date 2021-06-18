<?php 
    class dbFun{
        private static $connection;
        public function connect(){
            if(!isset(self::$connection)){
                $config = parse_ini_file('config.ini');
                self::$connection = new mysqli($config['servername'],$config['username'],$config['password'],$config['database']);
            }
            if(self::$connection == false){
                echo "No connection" . self::$connection->connect_error;
                return false;
            }
            return self::$connection;
        }
        // login function 
        public function login($username,$password){ 
            $conn = $this->connect();
            $safeusername = $conn->real_escape_string($username);
            $safepassword = $conn->real_escape_string($password);
            $encryptedPW = md5($safepassword); // password encryption 
            
            $sql = "SELECT * FROM users WHERE username='$safeusername' and password='$encryptedPW'";
            $result	 =$conn->query($sql);
            $rows=array();
            while($row=$result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

      //add a new user to the database.
	public function addUser($username, $password, $email,$job, $teleNo, $address, $user_type) {
        $conn = $this->connect();
        $safe_username = $conn->real_escape_string($username);
        $safe_username=htmlspecialchars($safe_username);
        $pass = md5($password);
		$sql = "INSERT INTO `users`(`username`, `password`, `email`,`job`, `teleNo`, `address`,`user_type`)
				VALUES ('$safe_username','$pass','$email','$job','$teleNo','$address','$user_type')";
		$conn = $this->connect(); 
		$result = $conn->query($sql);
		return $result;
	}

       //add a new job offer to database.
    public function addJob($jobTitle, $companyName,$fl_pa_time, $address, $city, $comp_type,$salary, $teleNo, $email, $image, $category, $jobDesc, $jobReq, $sponsored, $userId,$website) {
        if (empty($image)) {
            $image = "defult.jpg";
        }
        if(isset($sponsored)) {
            $sponsored = 1;
        }
        else {
            $sponsored = 0;
        }
        $sql = "INSERT INTO `addjob`(`jobTitle`, `companyName`,`fl_pa_time`, `category`, `address`, `city`,`comp_type`, `jobDescription`, `jobRequirment`, `salary`, `teleNo`, `email`, `sponsored`, `image`, `userID`, `website`,`viewsNo`)
			    VALUES ('$jobTitle','$companyName','$fl_pa_time','$category','$address','$city','$comp_type','$jobDesc','$jobReq','$salary','$teleNo','$email','$sponsored','$image',$userId, '$website','0') ";
	 	echo ($sql);  
	   $conn = $this->connect(); 
		$result = $conn->query($sql);
		return $result;
    }

    //get all posted jobs
    public function getAllPostedJobs(){
        $sql = "SELECT * FROM addjob WHERE 	review=1 ORDER BY jobID DESC "; 
        $conn = $this->connect();
        $result = $conn->query($sql);  
        echo $conn->error;
        $rows = array();
        while($row = $result-> fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }

      //get all posted jobs
      public function getAllAddedJobs(){
        $sql = "SELECT * FROM addjob WHERE 	review=0 ORDER BY jobID DESC "; 
        $conn = $this->connect();
        $result = $conn->query($sql);  
        echo $conn->error;
        $rows = array();
        while($row = $result-> fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }

	    // update review to 1 when admin reviews job offer and post it 
        public function review($jobID) {
            $sql = "UPDATE addjob SET 	review = 1  where jobID = '$jobID' ";
            $conn = $this->connect();
            $result = $conn->query($sql);
            return $result;
        }

        // get posted jobs
        public function getJobs(){
            $sql = "SELECT * FROM addjob WHERE 	review=1 ORDER BY jobID DESC "; 
            $conn = $this->connect();
            $result = $conn->query($sql);  
            echo $conn->error;
            $rows = array();
            while($row = $result-> fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

        // get all users 
        public function getUsers(){
            $sql="SELECT * FROM users";
            $conn=$this->connect();
            $result=$conn->query($sql);
            echo $conn->error;
            $rows=array();
            while($row = $result->fetch_assoc()){
                $rows[]=$row;
            }
            return $rows;
        }

    	//get all the jobs that belongs to a specific user.
        public function getjobsOffer($id) {
            $sql = "SELECT * FROM `addjob` WHERE userID= $id AND review=1";
            $conn = $this->connect();
            $result = $conn->query($sql);
            $rows = array();
            while($row = $result-> fetch_assoc()) {
                $rows[] = $row; 
            }
            return $rows;
        }
        

        // get feacured jobs
        public function getFeatured () {
            $sql = "SELECT * from addjob  WHERE sponsored=1 AND review=1 ORDER BY jobID DESC LIMIT 6";
            $conn = $this->connect();
            $result = $conn->query($sql);
            $rows = array();
            while($row = $result-> fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        }

        //return a specific job to get it's details.
    public function getJobDetails($id) {
        $sql = "SELECT * FROM `addjob` WHERE jobID = '$id'";
        $conn = $this->connect();
		$result = $conn->query($sql);
		return $result;
	}

    // get details for specific job
    public function getJobById($id){
        if(is_numeric($id)) {
			$sql = "SELECT * from addjob WHERE jobID = $id AND 	review=1 ";
			$conn = $this->connect();
			$result = $conn->query($sql);
			$rows = array();
			while($row = $result-> fetch_assoc()) {
				$rows[] = $row;
			}
			return $rows;
		}
		return false;
    }

    // get details for specific user 
    public function getUserById($id){
        if(is_numeric($id)) {
			$sql = "select * from users where userID = $id";
			$conn = $this->connect();
			$result = $conn->query($sql);
			$rows = array();
			while($row = $result-> fetch_assoc()) {
				$rows[] = $row;
			}
			return $rows;
		}
		return false;
    }
    // delete a user 
    public function deleteUser($id){
      if(is_numeric($id)){
        $sql="DELETE FROM users WHERE userID=$id";
        $conn=$this->connect();
        $result=$conn->query($sql);
        echo $conn->error;
        return $result;
      }
      return false;
    }

    // update user's details
    public function updateUser($id,$username,$password,$email,$job,$teleNo,$address,$user_type){
        if(is_numeric($id)) {
            $sql ="UPDATE users 
            SET username='$username',password='$password',email='$email',job='$job',user_type='$user_type',teleNo='$teleNo',address='$address'
            WHERE userID = $id ";
            $conn = $this->connect();
            $result = $conn->query($sql);
            return $result;
            }
            return false;
    }
    	//delete a specific job offer by using job id.
	public function deleteJob($id) {
		$sql = "DELETE FROM addjob WHERE jobID = $id";
		$conn = $this->connect();
		$result = $conn->query($sql);
		return $result;
	}

    //update a job's details 
	public function updateJob($id, $jobTitle, $companyName, $address, $fl_pa_time, $city, $comp_type,$salary, $teleNo, $email, $image, $category, $jobDesc, $jobReq, $sponsored,$website) {
		if(isset($sponsored)) {
			$sponsored = 1;
		}
		else {
			$sponsored = 0;
		}
		$sql ="UPDATE addjob 
        SET jobTitle='$jobTitle',companyName= '$companyName',address='$address',fl_pa_time='$fl_pa_time', city = '$city',comp_type='$comp_type', salary= '$salary', teleNo='$teleNo', email='$email', image='$image',category='$category', jobDescription='$jobDesc', jobRequirment='$jobReq', sponsored='$sponsored', website='$website' 
        WHERE jobID = $id";
		$conn = $this->connect();
		$result = $conn->query($sql);
		echo ($sql);
		return $result;
	}


    //search on a jobs that maches job title, category or city 
	public function search($job_title, $city) {
		if(!empty($job_title) && empty($city)) {
			$sql = "SELECT * FROM addjob WHERE jobTitle like '%$job_title%' OR category like '%$job_title%' AND review=1";
		}
		else if(!empty ($city) && empty($job_title)) {
			$sql = "SELECT * FROM addjob WHERE review=1 AND city = '$city' ";
		}
		else {
			$sql = "SELECT * FROM addjob WHERE jobTitle = '$job_title' OR category = '$job_title' AND city = '$city' AND review=1";
		}
		$conn = $this->connect();
		$result = $conn->query($sql);
		$rows = array();
		while($row = $result-> fetch_assoc()){
			$rows[] = $row;
		}
		return $rows;
	}

    	//increment the job views when the user views that job.
	public function setView($jobID) {
		$sql = "UPDATE addjob SET viewsNo = viewsNo +1  where jobID = '$jobID' ";
		$conn = $this->connect();
		$result = $conn->query($sql);
		return $result;
	}

	//get the most viewed job offer.
	public function getMostView() {
		$sql = "SELECT * FROM addjob WHERE review=1 ORDER BY viewsNo DESC LIMIT 5";
		$conn = $this->connect();
		$result = $conn->query($sql);
		$rows = array();
		while($row = $result-> fetch_assoc()) {
			$rows[] = $row;
		}
		return $rows;
	}

    // count job posted in website 
    public function countPostedJob() {
        $sql = "SELECT COUNT(*) AS 'totalPostedJob' FROM addjob  where review=1  ";
		$conn = $this->connect();
		$result = $conn->query($sql);
		$rows = array();
		while($row = $result-> fetch_assoc()) {
			$rows[] = $row;
		}
		return $rows;
	}
       // count job added  in website 
       public function countAddedJob() {
        $sql = "SELECT COUNT(*) AS 'totalAddedJob' FROM addjob";
		$conn = $this->connect();
		$result = $conn->query($sql);
		$rows = array();
		while($row = $result-> fetch_assoc()) {
			$rows[] = $row;
		}
		return $rows;
	}

   // count companies post job in website 
    public function countCompany() {
        $sql = "SELECT COUNT(userID) AS 'totalCompany' FROM users WHERE 	user_type='businessOwner'";
        $conn = $this->connect();
        $result = $conn->query($sql);
        $rows = array();
        while($row = $result-> fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

     // count registered users in website 
    public function countJobSeeker() {
    $sql = "SELECT COUNT(userID) AS 'totalJobSeeker' FROM users WHERE 	user_type='jobSeeker'";
    $conn = $this->connect();
    $result = $conn->query($sql);
    $rows = array();
    while($row = $result-> fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
    }
    
    //.......................... ADS  SECTION ..............
    // ADD NEW ADS TO DATABASE
    public function addAds($ads_title, $ads_image,$ads_desc,$ads_url){
        $sql = "INSERT INTO ads(ads_title, ads_image,ads_desc,ads_url)
		VALUES ('$ads_title','$ads_image','$ads_desc','$ads_url')";
        $conn = $this->connect();
        $result = $conn->query($sql);
        return $result;
    }

    
	//return all ads.
	public function getAds() {
		$sql = "SELECT * FROM ads";
		$conn = $this->connect();
		$result = $conn->query($sql);
		$rows = array();
		while($row = $result-> fetch_assoc()) {
			$rows[] = $row;
		}
		return $rows;
	}

	//delete a specific ad
	public function deleteAd($id) {
		if(is_numeric($id)) {
			$sql = "DELETE FROM ads WHERE adsID = $id";
			$conn = $this->connect();
			$result =  $conn->query($sql);
			return $result;
		}
		return false;
	 }
	 
	
	public function getAdById($id) {
		if(is_numeric($id)) {
			$sql = "select * from ads where adsID = $id";
			$conn = $this->connect();
			$result = $conn->query($sql);
			$rows = array();
			while($row = $result-> fetch_assoc()) {
				$rows[] = $row;
			}
			return $rows;
		}
		return false;
	}

	public function updateAd($id, $ads_title, $ads_image,$ads_desc,$ads_url) {
		if(is_numeric($id)) {
		$sql ="UPDATE ads SET ads_title ='$ads_title', ads_image='$ads_image',ads_desc='$ads_desc',ads_url='$ads_url' WHERE adsID = $id";
		$conn = $this->connect();
		$result = $conn->query($sql);
		return $result;
		}
		return false;
	}
    // get preference jobs
    public function getPreference($pref) {
        $sql = "SELECT * from addjob  WHERE review=1 AND jobTitle like '%$pref%' OR category LIKE '%$pref%' ";
        $conn = $this->connect();
        $result = $conn->query($sql);
        $rows = array();
        while($row = $result-> fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    }
