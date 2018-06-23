<!DOCTYPE html>
<html>
<head>
	<title>Student Corner</title>
	
	<meta name="viewport" content="width=device-width">
	<style type="text/css">
	header {
    background-color:#5500FF;
    color:white;
    text-align:center;
    padding:20px;
	margin:0px 5px 10px 5px;     
	text-decoration:none;
	letter-spacing:2px;
	line-height:1.0;
	border:2px solid lightgray;
	outline-style:ridge;
	font-weight:bold;
	font-family:"Times New Roman";
	font-size:25px;
	
}
	</style>
	
</head>
<body >
<header> IRTT PLACEMENT CELL </br></br>
 STUDENT CORNER
</header>

<div style = "padding:20px;margin:50px;background-color:green;color:white;align:center;text-align:center;font-size:12px">
	<h1> 
	<?php  
	session_start();
	require("config1.php"); 
	if($_SESSION['result1']){
	while($row = $_SESSION['result1']->fetch_assoc()){
		echo "hii";
		
	}
	}
	else
		echo "error";

?> 
	</h1>
</div>
</body>
</html>