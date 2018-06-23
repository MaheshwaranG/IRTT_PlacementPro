<?php
session_start();
require("config1.php");
$Username = $_POST['UserName'];  // get form user Name
$Password = $_POST['Password'];  // get form user Password
$_SESSION['user']=$_POST['UserName'];
$_SESSION['pass'] = $_POST['Password'];
//$_SESSION['user'] = "Santhosh";
$connectionobj = new AdminLogin;
$connection = $connectionobj->getAdminLogin();
if($connection ->connect_error){		
	die("Login with database failed");  // show error if any connection problem
}
/* $sql = "SELECT * FROM login where UserName = '$Username' and Password = '$Password'";  // sql query String
$result = $connection->query($sql);		//result set object  */
$result1 = $connection->query("SELECT * FROM login where UserName = ".$_SESSION['user']." and Password = ".$_SESSION['pass']);
if($result1->num_rows > 0){  	
	while($row = $result1 -> fetch_assoc()){
		$dbuser = $row['UserName'];
		$dbpass = $row['Password'];
	}
	header("Location: http://localhost/irtt/html/Admin.html");
	die();

}
else{
		$sql2 = "select * from depart where UserName = ".$Username." and Password = '$Password'";
		$result2 = $connection->query("select * from depart where UserName = '$Username' and Password = '$Password'");
		Echo $Username."  ".$Password;
	if($result2->num_rows>0){
	while($row = $result2->fetch_assoc()){
		$dbuser = $row['RegNo'];
		$dbpass = $row['RollNo'];
	}
	header("Location: http://localhost/irtt/html/Department.html");
	die();
}
else{
		$Username = (double) $Username;
		$sql3 = "select * from datas where RegNo = ".$Username." and RollNo = '$Password'";
		$result3 = $connection->query("select * from datas where RegNo = ".$Username." and RollNo = '$Password'");
	if($result3->num_rows>0){
	while($row = $result3->fetch_assoc()){
		$dbuser = $row['RegNo'];
		$dbpass = $row['RollNo'];
		$_SESSION['name']=$row['Name'];
	}
	header("Location: http://localhost/irtt/html/studentloginform.php");
	die();
}
else{
	echo '<h1 style ="background-color:red;align:center;test-align:center;">Unauthorized User </h1>';  
}

}
}

?> 