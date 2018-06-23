<?php
session_start();
require("config1.php"); 
$User_name=$_POST['UserName'];
$Password = $_POST['Password'];
//echo $_SESSION['User_name']." ".$_SESSION['Password']."</br>";
//echo var_dump($_SESSION['Password']);
$_SESSION['database'] = "logindatabase";
//echo $User_name." ".$Password." ".$pass;
$login = new AdminLogin;
$connection = $login->getAdminLogin($_SESSION['database']);
$sqlq = "select * from login where User_name=\"".$User_name."\" and Password =\"".$Password."\" ";

$result = $connection->query($sqlq);
//echo $sqlq;

if($result){
	if($result->num_rows == 1){
		$_SESSION['logtest']=true;
		while($row = $result->fetch_assoc()){
		$_SESSION['logtest']=true;
		$_SESSION['id'] = $row['User_name'];
		//echo $_SESSION['id'];
		header("Location: /irtt/validation/DepartmentLogin.php");
	}
	}
	else{
		
		echo "<h2 class=\"error\">Empty Set of result1</h2>";
		$_SESSION['logtest']=false;
	session_destroy();
	exit();
	}
}
else{
		
		echo "<h2 class=\"error\">Empty Set of result</h2>";
		$_SESSION['logtest']=false;
	session_destroy();
	exit();
	}

 

?>