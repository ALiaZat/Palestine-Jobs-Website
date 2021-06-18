<?php
if (isset($_GET['id'])) {
    require '../database.php';
    $db = new dbFun();
    $id = $_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $job=$_POST['job'];
    $teleNo = $_POST['teleNo'];
    $address = $_POST['address'];
    $user_type = $_POST['user_type'];
    $update = $db->updateUser($id, $username, $password, $email,$job, $teleNo, $address, $user_type);
    header("location:manageUsers.php?id=$id");
}
else{
    echo "wrong";
}
?>
