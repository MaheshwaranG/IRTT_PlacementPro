
<?php
session_start();
require("config1.php"); 
$User_name=$_POST['UserName'];
$Password = $_POST['Password'] ;
//echo $_SESSION['User_name']." ".$_SESSION['Password']."</br>";
//echo var_dump($_SESSION['Password']);
$pass = 2000+substr($User_name,4,-6);
//echo $User_name." ".$Password." ".$pass;
$login = new StudentLogin;
$connection = $login->getStudentLogin($pass);
$sqlq = "select * from datas AS i,Department AS d where Reg_no=".$User_name." and Roll_no =\"".$Password."\" and i.Branch_id=d.Branch";

$result = $connection->query($sqlq);
//echo $sqlq;

if($result){
	
	if($result->num_rows == 1 ){
		
		while($row = $result->fetch_assoc()){
		$_SESSION['logtest']=true;
		$_SESSION['id'] = $row['Reg_no'];
		header("Location: /irtt/validation/StudentLogin.php");
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