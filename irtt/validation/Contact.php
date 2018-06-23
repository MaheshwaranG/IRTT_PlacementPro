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
<div style = "padding:20px;margin:50px;background-color:green;color:white;align:center;text-align:center;font-size:12px">
<h1 id="id1"> STAFF CONTACT'S </h1>
<center>
<table>
<tr>
		<th>Name</th>
		<th>Email ID</th>
		<th>Department</th>
		<th>Contact Number</th>
		
		
		
</tr>		
<?php
session_start();
require("config1.php"); 
if(!isset($_SESSION['id'])){
	header("Location: /irtt/validation/ErrorPage.php");
	session_destroy();
}
$login = new AdminLogin;
$connection = $login->getAdminLogin("logindatabase");
//echo $_SESSION['database'];
$sqlq = "select * from login";

$result = $connection->query($sqlq);
//echo $sqlq;

if($result){
	if($result->num_rows > 0){
		
		while($row = $result->fetch_assoc()){
		?>

<tr>
                        <td><?php echo $row['First_name']." ".$row['Last_name']; ?></td>
                        <td><?php echo $row['User_name']; ?></td>
                        <td><?php echo $row['Department']; ?></td>
                        <td><?php echo $row['Phone_no']; ?></td>
						
						
    </tr>
	
<?php
		}
?>
</table>
	</center>
	</div>
<?php
		
	}
	else{
		
		echo "<h2 class=\"error\">ERROR...!!!!! INVALID ...!!!!!!</h2>";
		$_SESSION['logtest']=false;
	session_destroy();
	exit();
	}
}

	
else {
	echo "<h2 class=\"error\">Empty Set of result</h2>";
	$_SESSION['logtest']=false;
	session_destroy();
	exit();
}

?> 

<div>
<footer>
Copyright@IRTT
</footer>
</div>
</body>
</html>