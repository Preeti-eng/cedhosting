<?php 
$mail = $_POST['maile'];
$mobil= $_POST['mobil'];
$name = $_POST['name'];
$pass = $_POST['pass'];
$question = $_POST['question'];
$answer = $_POST['answer'];
require 'db.php';
$sql = "INSERT INTO tbl_user(email,name,mobile,email_approved,phone_approved,is_admin,active,password,security_question,security_answer)
         VALUES ('$mail','$name','$mobil','1','1','0','1','$pass','$question','$answer')";
if (mysqli_query($conn,$sql)) {
    echo "Sign Up Successful.....You can login now..";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
        ?>