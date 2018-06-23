<!DOCTYPE HTML>
<html>
<head>
	<title>select year</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="/irtt/css/style1.css">
	<link rel="stylesheet" href="/irtt/css/link.css">
	<style>
.but {
    background-color: #4C0050;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['id'])){
	session_destroy();
	$_SESSION['logtest']=false;
	header("Location: /irtt/validation/ErrorPage.php");
	
}
else{
	$_SESSION['year']=substr($_POST['year'],8);
	//echo $_SESSION['year'];
?>

	<header> IRTT PLACEMENT CELL </br></br>
	DEPARTMENT PORTAL
	</header>
	<ul class="tags">
  <li><a href="/irtt/validation/DepartmentLogin.php" class="tag">Home</a></li>
  <li><a href="UpdateSelect.php" class="tag">Update Student Info</a></li>
  <li><a href="Select.php" class="tag">Student Registration</a></li>
  <li><a href="OperationSelect.php" class="tag">Selection Process</a></li>
  <li><a href="Contact.php" class="tag">Contacts</a></li>
  <li><a href="StudentLogout.php" class="tag">Logout</a></li>
</ul>
	<div style = "padding:20px;margin:50px;background-color:green;color:white;align:center;text-align:center;font-size:12px">
	<h1 id="id2"> Select Department </h1>
	
	<center>
	
	<form name="SelectDepart" action="/irtt/validation/Operationget.php"  method="post">
	<table>
	<tr>
		<td><input type="checkbox" name="check_list[]" value="AUTO"><label>AUTO</label></td>
	</tr>
		<td><input type="checkbox" name="check_list[]" value="CSE"><label>CSE</label></td>
	</tr>
	<tr>
	<td><input type="checkbox" name="check_list[]" value="CIVIL"><label>CIVIL</label></td>
	</tr>
	<tr>
	<td><input type="checkbox" name="check_list[]" value="ECE"><label>ECE</label></td>
	</tr>
	<tr>
	<td><input type="checkbox" name="check_list[]" value="EEE"><label>EEE</label></td>
	<tr>
	<td><input type="checkbox" name="check_list[]" value="IT"><label>IT</label></td>
	</tr>
	<tr>
	<td><input type="checkbox" name="check_list[]" value="MECH"><label>MECH</label></td>
	</tr>
	<tr>
	<td><input type="checkbox" name="check_list[]" value="MCA"><label>MCA</label></td>
	</tr>
	<tr>
	<td><div class="button-container">
    <button class="but">N E X T</button>
    </div></td>
	</tr>
	</table>
</form>
</center>
</div>
<footer>
Copyright@IRTT
</footer>
<?php

		
}
	?>
	
	
	
	
		

</body>
</html>	