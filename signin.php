<?php
if (isset($_SESSION['admin'])){
    header('location:admin/');
}
include "tbl_user.php";
$error="";
$user=new tbl_user();
if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $data=$user->userLogin($email, $password);
    if ($data==false) {
        $error="Email or Password dosen't match";
    } else {
        $_SESSION['email']=$data['email'];
        $_SESSION['name']=$data['name'];
        $_SESSION['mobile']=$data['mobile'];
        header('Location:verificationpage.php');
    }
}
?>