<!DOCTYPE html>
<html>
<head>
	<title>Welcome page </title>
	<meta charset="UTF-8">
	<meta name = "Key" content="Welcome, hello, login, page">
</head>
<body>
<?php
//echo "<h1>Welcome page... success login</h1><br/><br/>";
$Username = $_POST['UserName'];

$Password = $_POST['Password'];
//echo "username : $Username<br/>Password  : $Password";
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$database = "irttcheck";
$connection = new mysqli($servername,$username,$password,$database);
if($connection ->connect_error){
	die("Login with database failed");
}
$sql = "SELECT * FROM login where UserName = '$Username' and Password = '$Password'";
$result = $connection->query($sql);

	$result1 = $connection->query("SELECT * FROM login where UserName = '$Username' and Password = '$Password'");
//echo "Database element";
if($result1->num_rows > 0){
	while($row = $result1 -> fetch_assoc()){
		$dbuser = $row['UserName'];
		$dbpass = $row['Password'];
		//echo $dbuser."  ".$dbpass."<br/><br/><br/>";
		check($dbuser,$dbpass);
		header("Location: http://www.youtube.com"); /* Redirect browser */

	}
}
else{
		$Username = (double) $Username;
		$sql2 = "select * from datas where RegNo = ".$Username." and RollNo = '$Password'";
		// echo $sql2;
		$result2 = $connection->query("select * from datas where RegNo = ".$Username." and RollNo = '$Password'");
		if($result2->num_rows>0){
	while($row = $result2->fetch_assoc()){
		$dbuser = $row['RegNo'];
		$dbpass = $row['RollNo'];
		
	}
	header("Location: http://www.bing.com");
}
else{
	echo '<hi style ="background-color:red;">Unauthorized user in student database</h1>';  
}

}

function check($dbuser,$dbpass){
	if($dbuser == $GLOBALS['Username'] && $dbpass == $GLOBALS['Password']){
		//s echo "<h1> welcome".$dbuser."</h1>";
	}
	else{
		echo '<hi style ="background-color:red;">Unauthorized user of login</h1>';  
	}
}
?> 
</body>
<html>