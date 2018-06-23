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
	<h1 id="id2"> Select Year of Batch </h1>
	<center>
	<form name="Selectdatabase" action="/irtt/validation/OperationSelectDepart.php"  method="post" >
		<select name="year" class="but">
<?php
}
$servername = "127.0.0.1:3306";	 // server name definition
$username = "root";				//sql server username
		$password = "";					// sql server password
	    static $connection ;   // choose server database
        $test = true;		
	    $link = new mysqli($servername,$username,$password);
		$result = $link->query("SHOW DATABASES");
		
		if($result){
			if($result->num_rows >0){
		while($row=$result->fetch_assoc()){
			
			if(strlen($row['Database'] )== 12){
				$opt = substr($row['Database'],8);
				
				$check = substr($row['Database'],0,-4);
				if(strcmp($check,"database")==0){
					echo"<option value=\"".$row['Database']."\">".$opt." - ".($opt+4)."</option>";
			
		}
		}
		
		}
		
		
		}
		}
	?>
	
	</select>
	<br/>
	<br/>
	</br>
	<div class="button-container">
    <button class="but">N E X T</button>
     </div>
	</form>
	</center>
	</div>	
<footer>
Copyright@IRTT
</footer>
</body>
</html>	