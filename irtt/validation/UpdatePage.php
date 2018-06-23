<!DOCTYPE html>
<html>
<head>
	<title>Student Corner</title>
	
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="/irtt/css/style1.css">
	<link rel="stylesheet" href="/irtt/css/link.css">
	
</head>
<body >
<header> IRTT PLACEMENT CELL </br></br>
 DEPARTMENT CORNER
</header>
<ul class="tags">
  <li><a href="/irtt/validation/DepartmentLogin.php" class="tag">Home</a></li>
  <li><a href="UpdateSelect.php" class="tag">Update Student Info</a></li>
  <li><a href="Select.php" class="tag">Student Registration</a></li>
  <li><a href="OperationSelect.php" class="tag">Selection Process</a></li>
  <li><a href="Contact.php" class="tag">Contacts</a></li>
  <li><a href="StudentLogout.php" class="tag">Logout</a></li>
</ul>
<div style="margin:5px 5px 5px 5px;"></div>
<?php
session_start();
require("config1.php"); 
if(!isset($_SESSION['id']) && !isset($_SESSION['database'] )){
	header("Location: /irtt/validation/ErrorPage.php");
	session_destroy();
}
else{
?>
<div style = "padding:20px;margin:50px;background-color:green;color:white;align:center;text-align:center;font-size:12px">
<h1 id="id1"> Welcome </h1>
</div>
<?php
}
?>
<div>
<footer>
Copyright@IRTT
</footer>
</div>
</body>
</html>