<?php 
require 'database.php';
$db=new dbFun();
$id=$_GET['job_id'];
$delete=$db->setView($id);
header("location:details.php?job_id=$id")
?>