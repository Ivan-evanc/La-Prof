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
<body>
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
        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
         <li><a href="../views/Question-admin.php" class="common" ><i class="fa fa-question" aria-hidden="true"></i> Question</a></li>
        <li><a href="../views/Glossary-panel.php"><i class="fa fa-briefcase" aria-hidden="true"></i> Glossary</a></li>
        <li class="active"><a href="#"><i class="fa fa-question" aria-hidden="true"></i> My Profile</a></li>
          <li><a href="../public/index.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>


<div>
<br><br><br>
<fieldset class="container">
<legend>Claim your expense</legend>
<label for="sell">Department</label>
<select class="form-control">
	<option>---Select your department---</option>
	<option>Marketing</option>
	<option>Technical team</option>
	<option>Content team</option>
	<option>Teachers dept</option>
</select>
<!--create another select input control to show the names-->
<br>
<select class="form-control">
	<option>---Select your name---</option>
	<option>evans@gmail.com</option>
	<option>alp@elimuplus.com</option>
	<option>ivan@elimuplus.com</option>
</select>
<br>
<table class="table table-striped table-hover" border="1">
	<tr>
		<th>Full Names</th>
		<th>Category Claim</th>
		<th>File Evident</th>
		<th>Status</th>
	</tr>
	<tr>
		<td>evanskibet@gmail.com</td>
		<td>Tax payment</td>
		<td><img src="../images/title-icon.jpg" width="80px" height="40px"></td>
		<td><span class="label label-success">Paid</span></td>
	</tr>
	
</table>

<div class="container"><button class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add your claim</button>  <button class="btn btn-success"><i class="fa fa-refresh" aria-hidden="true"></i> Refresh</button></div>
<br>
</fieldset>
</div>
<footer class="container">
<p>All Right Reserved, copyright &copy; 2017</p>
</footer>
</body>
</html>
<!--javascript for handling-->
