<?php 
require 'database.php';
$db=new dbFun();
$id=$_GET['job_id'];
$userid=$_GET['id'];
$delete=$db->review($id);
header("location:manageJobs/manageJobs.php?id=$userid");
?>