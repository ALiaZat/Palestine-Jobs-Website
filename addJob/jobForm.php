<?php 
	session_start();
	if(!isset($_SESSION['type'])){
		header("location:userAuthentication/loginForm.php?msg=error no user");
	}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <link rel="stylesheet" href="../style/index.css" type="text/css">
    <link rel="stylesheet" href="jobForm.css" type="text/css">
    <title>Post a Job</title>

    <link href="../images/icon1.png" rel="shortcut icon" type="image/x-icon" />
    <link href="../images/icon1.png" rel="apple-touch-icon" />
</head>

<body>
<?php
  require '../database.php';
  $db = new dbFun();
  $id = $_GET['id'];
  $users = $db->getUserById($id);
  ?>
  <!-- ...................NAV BAR SECTION .................. -->
  <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navigation-bar w-nav">
    <div class="w-container"><a href="/" class="brand-link w-nav-brand">
        <h1 class="brand-text"><img src="../images/logo1.png" alt="logo img" style="height: 64px;position: relative;bottom: 12px;"></h1>
      </a>
      <?php foreach ($users as $user) { ?>
        <nav role="navigation" class="navigation-menu w-nav-menu">
          <a href="../views/employer-home.php?id=<?php echo $user['userID']; ?>" aria-current="page" class="navigation-link w-nav-link w--current"><span class="glyphicon glyphicon-home"></span> Home</a>
          <a href="../views/alljobs.php?id=<?php echo $user['userID']; ?>" aria-current="page" class="navigation-link w-nav-link w--current"><span class="glyphicon glyphicon-list"></span> All Jobs</a>
          <a href="jobForm.php?id=<?php echo $user['userID']; ?>" aria-current="page" class="navigation-link w-nav-link "><span class="glyphicon glyphicon-hand-up"></span> Post Job</a>
          <div class="user-nav"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI_80u_uzadF91vm9XQO6kgsYzCXHcQMYlKg8UR4Wrzf6RrSfY7T9hYWQGoG7CA-hLpFc&usqp=CAU" loading="lazy" alt="" class="image-4" />
            <div data-hover="" data-delay="0" class="w-dropdown">
              <div class="dropdown-toggle w-dropdown-toggle">
                <div class="icon-2 w-icon-dropdown-toggle"></div>
                <div class="text-block-4"><?php echo $user['username']; ?></div>
              <?php } ?>
              </div>
              <nav class="w-dropdown-list"><a href="announcement.php?id=<?php echo $user['userID']; ?>" class="w-dropdown-link"><span class="glyphicon glyphicon-list"></span> My Announcements</a>
                <a href="../userAuthentication/logout.php" class="w-dropdown-link"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
              </nav>
            </div>
          </div>
        </nav>
        <div class="hamburger-button w-nav-button">
          <div class="w-icon-nav-menu"></div>
        </div>
    </div>
  </div>
  <!-- ........END NAVBAR............-->


    <div class="contact-form">
        <div class="contact-image">
            <img src="../images/logo1.png" alt="rocket_contact" style="width: 13em;"/>
        </div>
        <form method="post" action="addToDB.php?id=<?php echo $id; ?>">
            <h2>Post a Job</h2>
            <div class="row">
                <div class="col-md-6">
                    <!-- Job title -->
                    <div class="form-group">
                        <label for="jobTitle">Job Title :</label>
                        <input type="text" class="form-control" placeholder="Enter Job Title" name="jobTitle">
                    </div><br>
                    <!-- Company Name -->
                    <div class="form-group ">
                        <label for="companyName">Company name:</label>
                        <input type="text" class="form-control" placeholder="Enter company name" name="companyName">
                    </div><br>
                    <!-- Company telephone-->
                    <div class="form-group">
                        <label for="teleNo">Company's Telephone Number:</label>
                        <input type="text" class="form-control" placeholder="Enter telephone" name="teleNo">
                    </div><br>
                    <!-- Company email-->
                    <div class="form-group">
                        <label for="email">Company's Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                    </div><br>
                    <!-- Company address-->
                    <div class="form-group">
                        <label for="address">Company's Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter address">
                    </div><br>
                    <!-- Company city-->
                    <div class="form-group">
                        <label for="city">Company's City</label>
                        <input type="text" name="city" class="form-control" placeholder="Enter city">
                    </div><br>
                    <!--company type-->
                    <div class="form-group">
                        <label for="comp_type">Company's Type</label><br>
                        <select class="form-control" name="comp_type">
                            <option>select type</option>
                            <option value="International NGO">International NGO</option>
                            <option value="Local NGO">Local NGO </option>
                            <option value="Private Sector">Private Sector</option>
                            <option value="Public sector">Public sector</option>
                            <option value="Educational institution">Educational institution</option>
                            <option value="NON - Profit Company">NON - Profit Company</option>
                            <option value="Public Company">Public Company</option>
                        </select>
                    </div><br>
                    <!-- Company website-->
                    <div class="form-group">
                        <label for="website">Company's Website</label>
                        <input type="text" name="website" class="form-control" placeholder="Enter website's URL ">
                    </div><br>
                    <!-- Company image-->
                    <div class="form-group">
                        <label for="image">Company's Image</label>
                        <input type="text" name="image" class="form-control" placeholder="Enter image's URL">
                    </div><br>
                </div>
                <div class="col-md-6">
                    <!-- part time or full time -->
                    <div class="form-group">
                        <label for="fl_pa_time">Jop Time:</label><br>
                        <select class="form-control" name="fl_pa_time">
                            <option value>Select time</option>
                            <option value="part_time">Part Time</option>
                            <option value="full_time">Full Time</option>
                        </select>
                    </div><br>
                    <!-- Category -->
                    <div class="form-group">
                        <label for="category">Category:</label><br>
                        <select class="form-control" name="category">
                            <option value>select sector</option>
                            <option value="Agriculture, Food and Natural Resources">Agriculture, Food and Natural Resources</option>
                            <option value="Banking /Accounting / Finance industry sector">Banking /Accounting / Finance industry sector</option>
                            <option value="Consulting /Business Management sector">Consulting /Business Management sector</option>
                            <option value="Educational / Training /eLearning sector/Culture ">Educational / Training /eLearning sector/Culture </option>
                            <option value="Engineering /Construction Sector">Engineering /Construction Sector</option>
                            <option value="Health /Alternative Medicine / Medical Sector">Health /Alternative Medicine / Medical Sector</option>
                            <option value="Hospitality /Hotels/ Restaurant sector">Hospitality /Hotels/ Restaurant sector</option>
                            <option value="Humanitarian Aid/Development sector">Humanitarian Aid/Development sector</option>
                            <option value="Insurance sector">Insurance sector</option>
                            <option value="1IT/Telecom sector">IT/Telecom sector</option>
                            <option value="Manufacturing / sector">Manufacturing / sector</option>
                            <option value="Marketing /Advertising">Marketing /Advertising </option>
                            <option value="Media /PR sector">Media /PR sector</option>
                            <option value="Tourism /Traveling sector">Tourism /Traveling sector</option>
                            <option value="Wholesale / Retailer sector">Wholesale / Retailer sector</option>
                            <option value="Legal Services / Law Enforcement sector">Legal Services / Law Enforcement sector</option>
                            <option value="Commercial Real Estate sector">Commercial Real Estate sector</option>
                            <option value="Judiciary sector">Judiciary sector</option>
                            <option value="Logistics and Supply Chain">Logistics and Supply Chain</option>
                            <option value="Market Research">Market Research</option>
                            <option value="Capital Markets">Capital Markets</option>
                            <option value="Pharmaceuticals">Pharmaceuticals</option>
                            <option value="Religious Institutions">Religious Institutions</option>
                            <option value="Human Resources / Staffing and Recruiting">Human Resources / Staffing and Recruiting</option>
                            <option value="Automotive">Automotive</option>
                            <option value="International Trade and Development">International Trade and Development </option>
                            <option value="International Affairs">International Affairs</option>
                            <option value="Oil & Energy /Renewables & Environment">Oil & Energy /Renewables & Environment </option>
                            <option value="Outsourcing/Offshoring">Outsourcing/Offshoring</option>
                            <option value="Security">Security </option>
                            <option value="Textiles / Apparel & Fashion">Textiles / Apparel & Fashion</option>
                            <option value="Multimedia /Animation /Graphic design">Multimedia /Animation /Graphic design</option>
                            <option value="Other">Other</option>
                        </select>
                    </div><br>
                    <!-- salary -->
                    <div class="form-group">
                    <label for="salary">Jop's Salary:</label>
                        <input type="text" class="form-control" placeholder="Enter salary" name="salary" aria-label="Amount (to the nearest dollar)">
                    </div><br>
                    <!--Job Description-->
                    <div class="form-group">
                        <label for="jobDescription">Job Description:</label>
                        <textarea name="jobDescription" class="form-control" rows="5" placeholder="Enter Job's Description"></textarea>
                    </div><br>
                    <!--JobRequirment-->
                    <div class="form-group">
                        <label for="jobRequirment">Job Requirment:</label>
                        <textarea name="jobRequirment" class="form-control" rows="5" placeholder="Enter Job Requirment"></textarea>
                    </div><br>
                    <div class="checkbox">
                        <label><input type="checkbox" name="sponsored" value="sponsored"> Sponsored?</label>
                    </div><br>
                      <!-- .............. submit button ................ -->
                <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Add Job" />
                    </div>
                </div>
            </div>
        </form>
    </div>

    
    <!--................FOOTER SECTION .............. -->
<footer>
<div class="footer">
  <div class="w-container">
    <div class="w-row">
      <div class="spc w-col w-col-4">
        <h5 class="footer-head"><img src="../images/logo1.png" alt="logo img" style="height: 64px;position: relative;bottom: 12px;"></h5>
        <p>Pal Jobs have much planned for the future, working with great clients and companies. If you’d like to join our team.</p>
      </div>
      <div class="spc w-col w-col-4">
        <h5 class="footer-head">have a question?</h5>
        <a href="#" class="footer-link">pal-jobs@gmail.com</a>
        <a href="#" class="footer-link">05948766334</a>
        <a href="#" class="footer-link">Hebron, Palestine</a>
      </div>
      <div class="w-col w-col-4">
        <h5 class="footer-head">social</h5>
        <div class="footer-link-wrapper w-clearfix"><img src="https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/609d27d25aefab700ea1cf26_social-18.svg" width="20" alt="" class="info-icon" /><a href="#" class="footer-link with-icon">Twitter</a></div>
        <div class="footer-link-wrapper w-clearfix"><img src="https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/609d27d25aefab858aa1cf07_social-03.svg" width="20" alt="" class="info-icon" /><a href="#" class="footer-link with-icon">Facebook</a></div>
        <div class="footer-link-wrapper w-clearfix"><img src="https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/609d27d25aefab240ba1ceee_social-11.svg" width="20" alt="" class="info-icon" /><a href="#" class="footer-link with-icon">Pinterest</a></div>
        <div class="footer-link-wrapper w-clearfix"><img src="https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/609d27d25aefab2697a1cf18_social-06.svg" width="20" alt="" class="info-icon" /><a href="#" class="footer-link with-icon">Google</a></div>
      </div>
    </div>
  </div>
</div>
<div class="footer center">
  <div class="w-container">
    <div class="footer-text">© 2021 Copyright, Made By: Niveen & Alia</div>
  </div>
</div>
</footer>
<!-- .....END FOOTER...... -->
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=609d27d25aefabdd8aa1ced7" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/js/webflow.b7e093d49.js" type="text/javascript"></script>
</body>

</html>