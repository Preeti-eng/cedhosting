<?php
include "tbl_user.php";

$user=new tbl_user();
if(isset($_POST['email']) && ($_POST['password'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
   
    $info=$user->login($email, $password);
   //print_r($info);
    if($info == 0){
        //return "invalid" ;
        echo "invalid";
     }else if($info['is_admin']==1){
         echo "you are admin";
     }else if($info['is_admin']==0 && $info['active']==1){
         echo "you are user";
     }else if($info['is_admin']==0 && $info['active']==0){
         echo "you are block";
     }
     
            
    }

   

?>