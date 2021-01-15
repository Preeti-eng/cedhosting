<?php
session_start();
include "tbl_user.php";

$user=new tbl_user();
if(isset($_POST['email']) && ($_POST['password'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
   
    $info=$user->login($email, $password);
//     echo "<pre>";
//     print_r($info);
//     echo "</pre>";
//    echo  $info['active'];
    if($info == 0){
        echo 0;
        //echo "invalid";
     }else if($info['is_admin']==1){
         //echo "you are admin";
         echo 1;
          $_SESSION['admin'] = $info;
        
         //$_SESSION['name'] = $info;
     }else if($info['is_admin']==0 && $info['active']==1){
        echo 2;
        $_SESSION['user'] = $info;
        // echo "you are user";
     }else if($info['is_admin']==0 && $info['active']==0){
        echo 3;
        // echo "you are block";
     }
     
            
    }

   

?>