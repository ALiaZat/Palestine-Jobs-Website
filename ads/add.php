<?php
require '../database.php';
if(isset($_POST['adds'])){
    $db = new dbFun();
    $ads_title = $_POST['ads_title'];
    $ads_image = $_POST['ads_image'];
    $ads_desc = $_POST['ads_desc'];
    $ads_url=$_POST['ads_url'];
    $result = $db->addAds($ads_title, $ads_image,$ads_desc,$ads_url);
    if($result){
        $db=$_GET['id'];
        header("location:manageAds.php?id=$id") ;
   }
    else{
        echo "error" ;
    }

 }
?>