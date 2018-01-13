<!doctype html>
<html lang="en">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<head>
</head>
<body>
<?php
$connect=@mysqli_connect("localhost","root","","mwalimudb");

if(!$connect){
	echo '
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
        <li><a href="../public/index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
         <li><a href="#about" class="common" ><i class="fa fa-question" aria-hidden="true"></i> Help</a></li>
      </ul>
    </div>
  </div>
</nav>



	';
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<div class='container alert alert-danger'>";
	die("Failed to connect to the server.");
	echo "</div>";
}




?>
</body>
</html>