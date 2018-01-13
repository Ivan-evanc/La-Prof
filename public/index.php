<!doctype html>
<html lang="en">
<head>
<title>Mwalimu | expense</title>
<meta charset="UTF-8">
<link href="../css/header-style.css" rel="stylesheet" type="text/css">
<link rel="icon" href="../images/title-icon.jpg">
<link href="../css/footer-style.css" rel="stylesheet" type="text/css">
<link href="../css/index-style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
</head>
<body id="body-full">
<nav class="navbar navbar-inverse navbar-fixed-top" id="nav">       
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">MwalimuPlus</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
         <li><a href="#about" class="common" ><i class="fa fa-question" aria-hidden="true"></i> Help</a></li>
      </ul>
    </div>
  </div>
</nav>


<div>
<br><br><br>
<fieldset class="container">
<legend>Login</legend>
<form name="vform" onsubmit="return validate()" method="POST" action="../database/loginUser.php">
<table id="form-input">
<tr>
<td><label>Email:</label></td>
<td><input type="email" name="email" placeholder="Enter your email"/></td>
</tr>
<tr><td></td><td><div id="email_error" class="val_error"></div></td></tr>
<tr>
<td><label>Password:</label></td>
<td><input type="password" name="password" placeholder="Enter your Password"/></td>
</tr>
<tr><td></td><td><div id="password_error" class="val_error"></div></td></tr>
<tr>
<td><button class="btn btn-primary">Login</button></td>
</tr>
</table>
</form>
</fieldset>
</div>
<footer class="container">
<p>All Right Reserved, copyright &copy; 2017</p>
</footer>
</body>
</html>
<!--javascript for handling-->
<script>
var email=document.forms["vform"]["email"];
var pass=document.forms["vform"]["password"];

//display all the errors
var email_error=document.getElementById("email_error");
var password_error=document.getElementById("password_error");
	
    email.addEventListener("blur",emailVerify,true);
    pass.addEventListener("blur",passwordVerify,true);
	
	function validate(){
		if (email.value=="") {
    		email.style.border="1px solid red";
    		email_error.textContent="Email cannot be empty!!";
    		email.focus();
    		return false;
    	}
    	//validate password
    	if (pass.value=="") {
    		pass.style.border="1px solid red";
    		password_error.textContent="Password cannot be empty!!";
    		pass.focus();
    		return false;
    	}
		
	}

	
	function emailVerify(){
	if(email.value!=""){
	email.style.border="1px solid #5E6E66";
	email_error.innerHTML="";
	return true;
	}
	
}

function passwordVerify(){
	if(pass.value!=""){
		pass.style.border="1px solid #5E6E66";
		password_error.innerHTML="";
		return true;
	}
}
	
</script>


