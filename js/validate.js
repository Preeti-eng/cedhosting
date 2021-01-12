function sendMail(){
    var email =  document.getElementById("email").value;
    var reg =/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!email.match(reg)) {
         alert("Invalid Email Address");
        // document.getElementById("error").style.display = "block";
        // document.getElementById("error").text = "Invalid Email Address";
        return false;
      }
    
     
    
    else{
    
    document.getElementById("form").style.display = "block";
    document.getElementById("form1").style.display = "none";
    document.getElementById("se").style.display = "none";


    $.ajax({
        type:"POST",
        url:"mail.php",
        data:{
            email:email}
        ,
        success:function(res){
        
        }
    });
}
}

function sendotp(){
    var otp =  document.getElementById("otp").value; 
       
      $.ajax({
        type:"POST",
        url:"mail1.php",
        data:{
            otp:otp}
        ,
        success:function(res1){
        	if(res1 == "Success"){
        		document.getElementById("form").style.display = "none";
     			// document.getElementById("form1").style.display = "block"; 
     			 document.getElementById("sms").style.display = "block"; 
        		alert(res1);
        	}
        	else{
        		alert("Enter valid OTP");
        	}
        // document.getElementById("s").innerHTML = res1;
            
        }
    });
}


function sendSms(){
    
    var mobile =  document.getElementById("mobile").value;
   
    var reg =/^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
    if(!mobile.match(reg)) {
         alert("Invalid Mobile Number..");
        // document.getElementById("error").style.display = "block";
        // document.getElementById("error").text = "Invalid Email Address";
        return false;
      }
    
     
    
    else{
    
    document.getElementById("sms1").style.display = "block";
    document.getElementById("sms").style.display = "none";
    document.getElementById("form").style.display = "none";
    document.getElementById("form1").style.display = "none";
   

    $.ajax({
        type:"POST",
        url:"smsotp.php",
        data:{
            mobile:mobile},
        success:function(res2){
            // alert(res2);
        
        }
    });
}  
}

 function smsotp(){
    var otp1 =  document.getElementById("otp1").value; 
     //document.getElementById("form").style.display = "none";
     //document.getElementById("form1").style.display = "block";   
      $.ajax({
        type:"POST",
        url:"otp.php",
        data:{
            otp1:otp1},
            success:function(res3){
        	if(res3 == "Success"){
        		document.getElementById("form1").style.display = "block";
     			document.getElementById("sms").style.display = "block";
     			document.getElementById("sh").style.display = "block"; 

     			document.getElementById("sms1").style.display = "none"; 
     			document.getElementById("se1").style.display = "none"; 
                document.getElementById("se").style.display = "none"; 
                document.getElementById("email").readOnly = true;
                document.getElementById("mobile").readOnly = true;
        		alert(res3);
        	}
        	else{
        		alert("Enter valid OTP");
        	}
         document.getElementById("s").innerHTML = res3;
            
        }
    });
}
$('#signUp').click(function() {
    var maile = $('#email').val();
    var mobil = $('#mobile').val();
    var name =  $('#name').val();
    var pass =  $('#pass').val();
    var question =  $('#question').val();
    var answer =  $('#answer').val();
    $.ajax({
        type:"POST",
        url:"insert.php",
        data:{
            maile:maile,mobil:mobil,name:name,pass:pass,question:question,answer:answer},
        success:function(res2){
            alert(res2);
            window.location.href = "login.php";
        
        }
    });
 
});

function nameValidate(){
    var error = document.getElementById("error");
    var name =  document.getElementById("name").value;
    var reg =  /^[a-zA-Z ]+$/;
    if(name.length==0)
    {
   error.textContent = "Invalid text" 
    error.style.color = "red" 
    }
    else if(!name.match(reg)) {
            error.textContent = "Invalid text" 
            error.style.color = "red" 
            // document.getElementById("error").style.display = "block";
            // document.getElementById("error").text = "Invalid Email Address";
            return false;
          }
          else{
              error.textContent = "";
          }
        }

function passValidate(){
            var error = document.getElementById("error");
            var pass =  document.getElementById("pass").value;
            var reg = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
            if(pass.length==0)
            {
           error.textContent = "Invalid Password" 
            error.style.color = "red" 
            }
            else if(!pass.match(reg)) {
                    error.textContent = "Invalid Password" 
                    error.style.color = "red" 
                    // document.getElementById("error").style.display = "block";
                    // document.getElementById("error").text = "Invalid Email Address";
                    return false;
                  }
                  else{
                      error.textContent = "";
                  }
                }

function ansValidate(){
    var error = document.getElementById("error");
    var answer =  document.getElementById("answer").value;
    var reg = /^[a-zA-Z0-9_]*$/;
            if(answer.length==0)
            {
           error.textContent = "Invalid" 
            error.style.color = "red" 
            }
            else if(!answer.match(reg)) {
                    error.textContent = "Invalid" 
                    error.style.color = "red" 
                    // document.getElementById("error").style.display = "block";
                    // document.getElementById("error").text = "Invalid Email Address";
                    return false;
                  }
                  else{
                      error.textContent = "";
                  }
}
   
