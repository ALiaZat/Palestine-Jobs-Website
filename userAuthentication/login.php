<?php 
require '../database.php';
$db = new dbFun();
$username = $_POST['username'];
$password = $_POST['password'];
$count = 0 ;
$users = $db->login($username,$password);
foreach($users as $user){
	$count++;
	$type = $user['user_type'];
	$id = $user['userID'];
}
if($count==1){
	session_start();
	$_SESSION['type'] = $type;
	header ("location:../views/home.php?id=$id");
}
else {
	header("location:loginForm.php?error=1");
}

?>