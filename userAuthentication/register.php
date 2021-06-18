<?php
require '../database.php';
if(isset($_POST['register'])){
    $db = new dbFun();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $teleNo = $_POST['teleNo'];
    $address = $_POST['address'];
    $user_type = $_POST['user_type'];
    $job = $_POST['job'];
    $result = $db->addUser($username, $password,$job, $email, $teleNo, $address, $user_type);
    if($result){
        header("location:loginForm.php") ;
   }
    else{
        echo "error" ;
    }
 }
?>