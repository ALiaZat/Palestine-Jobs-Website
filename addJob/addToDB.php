<?php 
	// session_start();
	// if(!isset($_SESSION['type'])){
	// 	header("location:loginForm.php?msg=error no user");
	// }
?>
<?php 
require '../database.php';
$db = new dbFun();
$id = $_GET['id'];
$jobTitle = $_POST['jobTitle'];
$companyName = $_POST['companyName'];
$fl_pa_time =$_POST['fl_pa_time'];
$address = $_POST['address'];
$city = $_POST['city'];
$comp_type =$_POST['comp_type'];
$salary = $_POST['salary'];
$teleNo = $_POST['teleNo'];
$email = $_POST['email'];
$image = $_POST['image'];
$sponsored = $_POST['sponsored'];
$category = $_POST['category'];
$jogDesc = $_POST['jobDescription'];
$jobReq = $_POST['jobRequirment'];
$website = $_POST['website'];
$result = $db->addJob($jobTitle, $companyName,$fl_pa_time, $address, $city,$comp_type, $salary,$teleNo,$email,$image,$category,$jogDesc,$jobReq,$sponsored, $id,$website);
header("location:announcement.php?id=$id&msg=1");
 ?>

