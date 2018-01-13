<!doctype html>
<html lang="en">
<head>
<title>Mwalimu | expense Form</title>
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
         <li class="active"><a href="Question-admin.php" class="common" ><i class="fa fa-question" aria-hidden="true"></i> Question</a></li>
        <li><a href="../views/Glossary-panel.php"><i class="fa fa-briefcase" aria-hidden="true"></i> Glossary</a></li>
        <li><a href="../views/userClaimForm.php"><i class="fa fa-question" aria-hidden="true"></i> My Profile</a></li>
          <li><a href="../public/index.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>


<div>
<br><br><br>
<fieldset class="container">
<legend>Ask a Question</legend>
<form action="#" method="POST">
<label>Email:</label>
<input type="email" name="email-id" class="form-control" placeholder="Enter your email">
<br>
<label>Subject:</label>
<input type="text" name="subject-id" class="form-control" placeholder="Enter your subject">
<br>
<label>Message:</label>
<textarea class="form-control" name="message-id"></textarea>
<br>
<button class="btn btn-primary">Submit</button>
<br>
<br>
</form>
</fieldset>
</div>
<footer class="container">
<p>All Right Reserved, copyright &copy; 2017</p>
</footer>
</body>
</html>
<!--javascript for handling-->
