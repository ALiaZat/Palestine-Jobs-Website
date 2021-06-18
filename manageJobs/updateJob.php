<?php
if (isset($_GET['id'])) {
    require '../database.php';
    $db = new dbFun();
    $id = $_GET['job_id'];
    $userID=$_GET['id'];
    $jobTitle = $_POST['jobTitle'];
    $companyName = $_POST['companyName'];
    $email = $_POST['email'];
    $teleNo = $_POST['teleNo'];
    $address = $_POST['address'];
    $fl_pa_time = $_POST['fl_pa_time'];
    $city = $_POST['city'];
    $comp_type = $_POST['comp_type'];
    $salary = $_POST['salary'];
    $image = $_POST['image'];
    $category = $_POST['category'];
    $jobDesc = $_POST['jobDesc'];
    $jobReq = $_POST['jobReq'];
    $sponsored = $_POST['sponsored'];
    $website = $_POST['website'];
    $update = $db->updateJob($id, $jobTitle, $companyName, $address, $fl_pa_time, $city, $comp_type,
    $salary, $teleNo, $email, $image, $category, $jobDesc, $jobReq, $sponsored,$website);
    header("location:manageJobs.php?id=$userID");
}
else{
    echo "wrong";
}
?>