<?php 
session_start();
$uname = $_POST['name'];
$pass = $_POST['pass'];
require 'db.php';
$sql = "SELECT * FROM tbl_user WHERE email = '$uname' and password = '$pass'";
$result = mysqli_query($conn,$sql) or die("fail");

if(mysqli_num_rows($result) > 0){	
	//echo "login success";
	$row = mysqli_fetch_assoc($result);
			if ($row['is_admin']==1){
			//$_SESSION['mail'] = $uname;
			 $_SESSION['name'] = $row['name'];
			
            header("location: admin/index.php");
            echo "success";
			
			}
			elseif ($row['is_admin']==0) {
            $_SESSION['name'] = $row['name'];
            echo "success";
			// $_SESSION['id'] = $row['user_id'];
			// echo $_SESSION['id'];

			// $_SESSION['mail'] = $uname;
			// $_SESSION['email'] = $row['name'];
			// $_SESSION['id'] = $row['user_id'];
			// $_SESSION['mobile'] = $row['mobile'];
			// $_SESSION['passwd'] = $row['password'];
			// $_SESSION['status'] = $row['status'];
			// $_SESSION['adm'] = $row['is_admin'];

			// if($row['status']==1){
            // //header("location:user.php");
            // echo "success";
			// }else{
			// 	//echo "<script type='text/javascript'>alert('You Blocked By the Admin..')</script>";
			// 	header("location:login.php");
			// }
			// //echo "user";
			// }
}else{
	//echo '<script>alert("You Blocked By the Admin..")</script>';
	header("location:login.php");
	
}
}

mysqli_close($conn);
?>