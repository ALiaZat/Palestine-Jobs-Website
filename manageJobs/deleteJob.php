<?php 
require '../database.php';
$db=new dbFun();
$id=$_GET['job_id'];
$userid=$_GET['id'];
$delete=$db->deleteJob($id);
header("location:manageJobs.php?id=$userid");
?>