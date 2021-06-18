<?php 
require '../database.php';
$db=new dbFun();
$id=$_GET['id'];
$delete=$db->deleteUser($id);
header("location:manageUsers.php?id=$id")
?>