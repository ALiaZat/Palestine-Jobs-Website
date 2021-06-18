<?php 
require '../database.php';
$db=new dbFun();
$id=$_GET['ads_id'];
$userid=$_GET['id'];
$delete=$db->deleteAd($id);
header("location:manageAds.php?id=<?php echo $userid ?>");
?>