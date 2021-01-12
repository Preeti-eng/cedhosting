<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Account :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
<!--script-->
</head>
<body>
	<!---header--->
	<?php include "header.php"?>
	<!---header--->
		<!---login--->
			<div class="content">
				<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">

			<form style="padding:5%;">
			<div class="alert alert-primary" role="alert">
			<p id="error"></p>  
			</div>
        <!-- <div class="form-row" > -->
        <div  id="form1" >
            <div class="form-group col-md-12">
                    <label for="inputEmail4">Email Address<span style="color:red;">*</span></label>
                    <input type="email" class="form-control" id="email"  name="email">
            </div>

            <div class="form-group col-md-12">
                    <button type="button" class="btn btn-primary" id="se" name="sub" onclick="sendMail()">Send OTP</button>
            </div>
        </div>
        <div  id="form" style="display:none;" >
            <div id="form" class="form-group col-md-12" >
                <label for="inputEmail4">Enter OTP</label>
                <input type="number" class="form-control" id="otp"  name="otp">
            </div> 
            <div class="form-group col-md-12">
                <button type="button" class="btn btn-primary" name="subm" id="so" onclick="sendotp()">Submit</button>
            </div>
        </div>
       
        
        
         <div  id="sms" style="display:none;">
            <div class="form-group col-md-12">
                    <label>Enter Mobile Number<span style="color:red;">*</span></label>
                    <input type="number" class="form-control" id="mobile"  name="mobile">
            </div>

            <div class="form-group col-md-12">
                    <button type="button" class="btn btn-primary" id="se1" name="submit" onclick="sendSms()">Send OTP</button>
            </div>
        </div>
        <div  id="sms1" style="display:none;">
            <div id="form" class="form-group col-md-12" >
                <label>Enter OTP</label>
                <input type="number" class="form-control" id="otp1"  name="otp1">
            </div> 
            <div class="form-group col-md-12">
                <button type="button" class="btn btn-primary" name="submit" id="ot" onclick="smsotp()">Submit</button>
            </div>

            <p id="s"></p>
        
    </div>


    <div id="sh" style="display:none;">
	
                
                <div class="form-group col-md-12">
                    <label>Name<span style="color:red;">*</span></label>
                    <input type="text" class="form-control" id="name"  name="name" onfocusout ="nameValidate()">
                </div>
                
                
                <div class="form-group col-md-12">
                    <label for="exampleInputPassword1">Password<span style="color:red;">*</span></label>
                    <input type="password" class="form-control" id="pass" placeholder="Password" onfocusout ="passValidate()">
                </div>
                
				<div class="form-group col-md-12">
					<lable><b>Security Question</b><span style="color:red;">*</span></lable><br>
					<select id="question" name="question"> 
					<option value="Please select security question" selected="selected" disabled="disabled">Please select security question</option>
					<option value="What was your childhood nickname?">What was your childhood nickname?</option>
					<option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend?</option>
					<option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
					<option value="What was your dream job as a child?">What was your dream job as a child?</option>
					<option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname?</option>
					</select>   
					</div>
					<div class="form-group col-md-12">
					<label>Answer<span style="color:red;">*</span></label>
					<input type="text" class="form-control" id="answer"  name="answer"  onfocusout ="ansValidate()">
            	</div>
				<div class="form-group col-md-12">
                    <button type="button" class="btn btn-primary" id="signUp">Sign Up</button>
                </div>
			</div>
		</form>

		   </div>
		 </div>
	</div>
<!-- registration -->

			</div>
<!-- login -->
				<!---footer--->
				<?php include "footer.php"?>
			<!---footer--->

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script type="text/javascript" src="js/validate.js"></script>
	
</body>
</html>