<!doctype html>
<html>
<head>
<title>User | login</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
</head>
<?php
include '../config/db-header.php';

$email=$_POST['email'];
$password=$_POST['password'];

$query="SELECT * FROM admin WHERE email='$email' AND password='$password'";

$result=$connect->query($query);
if(!$row=$result->fetch_assoc()){
	echo "<br><br><br><div class='container alert alert-danger'>";
	echo 'Sorry!!! Wrong Email or Password!';
	echo "</div>";
	include '../public/index.php';
	
}
else{
	include '../views/userClaimForm.php';
}

?>