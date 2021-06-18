<?php
if (isset($_GET['id'])) {
    require '../database.php';
    $db = new dbFun();
    $userid=$_GET['id'];
    $id = $_GET['ads_id'];
    $ads_title = $_POST['ads_title'];
    $ads_image = $_POST['ads_image'];
    $ads_desc = $_POST['ads_desc'];
    $ads_url = $_POST['ads_url'];
    $update = $db->updateAd($id, $ads_title, $ads_image,$ads_desc,$ads_url);
    header("location:manageAds.php?id=$userid");
}
else{
    echo "wrong";
}
?>