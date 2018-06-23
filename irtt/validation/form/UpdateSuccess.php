<!DOCTYPE html>
		<html>
			 <head>
					<title> STUDENTS DATA ENTRY FORM </title>
						
						<meta name="viewport" content="width=device-width">
						<link rel="stylesheet" href="/irtt/css/formstyle.css">
						<link rel="stylesheet" href="/irtt/css/link.css">	
							
						
						<link rel='stylesheet' href='form1style.css'>

						<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
						<script src="/irtt/js/form1.js"></script>
</head>
<?php
session_start();
//require("dbclass.php");
if(!isset($_SESSION['id']) && !isset($_SESSION['year']) && !isset($_SESSION['Reg_no'])){
	header("Location: /irtt/validation/ErrorPage.php");
	$_SESSION['logtest']=false;
	session_destroy();
}
else{
require("config1.php"); 
$dbname = $_SESSION['year'];
$login = new StudentLogin;
// Create connection
$conn = $login->getStudentLogin($dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>
	
<body>
<header> IRTT PLACEMENT CELL </br></br>
 DEPARTMENT CORNER
</header>

<ul class="tags">
  <li><a href="/irtt/validation/DepartmentLogin.php" class="tag">Home</a></li>
  <li><a href="/irtt/validation/UpdateSelect.php" class="tag">Update Student Info</a></li>
  <li><a href="/irtt/validation/Select.php" class="tag">Student Registration</a></li>
  <li><a href="/irtt/validation/OperationSelect.php" class="tag">Selection Process</a></li>
  <li><a href="/irtt/validation/Contact.php" class="tag">Contacts</a></li>
  <li><a href="/irtt/validation/StudentLogout.php" class="tag">Logout</a></li>
</ul>


<div style = "padding:20px;margin:50px;background-color:green;color:white;align:center;text-align:center;font-size:20px">
				<?php 
				/*echo $_POST['rollnumber']."\n";
				echo $_POST['firstname']."\n";
				echo $_POST['lastname']."\n";
				echo $_POST['branch']."\n";
				echo $_POST['gender']."\n";
				echo $_POST['fathername']."\n";
				echo $_POST['mothername']."\n";
				echo $_POST['dob']."\n";	
				echo $_POST['yopug']."\n";
				echo $_POST['hsc']."\n";
				echo $_POST['yophsc']."\n";
				echo $_POST['dip']."\n";
				echo $_POST['yopdip']."\n";
				echo $_POST['sslc']."\n";
				echo $_POST['yopsslc']."\n";			*/
				
				
			/*	echo $_POST['address']."\n";
				echo $_POST['pincode']."\n";
				echo $_POST['cgpa']."\n";
				echo $_POST['SA']."\n";
				echo $_POST['HA']."\n";
				echo $_POST['phone']."\n";
				echo $_POST['Aphone']."\n";
				echo $_POST['email']."\n";
				echo $_POST['placementstatus']."\n"; */
				
				$sqlq = "UPDATE datas set Address='".$_POST['address']."',Pin_code=".
				$_POST['pincode'].",
				CGPA = ".$_POST['cgpa'].",Standing_A=".$_POST['SA'].",History_A=".$_POST['HA'].",
				Phone_no=".$_POST['phone'].",APhone_no=".$_POST['Aphone'].",
				Email='".$_POST['email']."',Place_status='".$_POST['placementstatus']."'";
				
				
			if(isset($_POST['company'])){
					if(!empty($_POST['company'])){
						$sqlq = $sqlq.",Company_name='".$_POST['company']."'";
					}
					else{
						$sqlq = $sqlq.",Company_name=null";
			}
					
			}
			
			if(isset($_POST['designation'])){
					if(!empty($_POST['designation'])){
						$sqlq = $sqlq.",Job = '".$_POST['designation']."'";
					}
					else{
				$sqlq = $sqlq.",Job =null";
			}
			}
			
			if(isset($_POST['package'])){
					if(!empty($_POST['package'])){
						$sqlq = $sqlq.",Package='".$_POST['package']."'";
					}
					else{
				$sqlq = $sqlq.",Package =null";
			}
			}
			
			if(isset($_POST['location'])){
					if(!empty($_POST['location'])){
						$sqlq = $sqlq.",Location='".$_POST['location']."'";
					}
					else{
				$sqlq = $sqlq.",Location =null";
			}
			}
			
			if(isset($_POST['bond'])){
					if(!empty($_POST['bond'])){
						$sqlq = $sqlq.",Bond='".$_POST['bond']."'";
						//echo "<br/> inside if ".$_POST['bond']."<br/>";
					}
					else{
				$sqlq = $sqlq.",Bond =null";
				//echo "<br/>outside else ".$_POST['bond']."<br/>";
			}
			}
			
			
			if(isset($_POST['course'])){
					if(!empty($_POST['course'])){
						$sqlq = $sqlq.",Course_name = '".$_POST['course']."'";
					}
					else{
				$sqlq = $sqlq.",Course_name =null";
			}
			}
			
			if(isset($_POST['PGcollege'])){
					if(!empty($_POST['PGcollege'])){
						$sqlq = $sqlq.",PG_college='".$_POST['PGcollege']."'";
					}
					else{
				$sqlq = $sqlq.",PG_college =null";
			}
			}
			
			if(isset($_POST['BM'])){
					if(!empty($_POST['BM'])){
						$sqlq = $sqlq.",BM_reason='".$_POST['BM']."'";
					}
					else{
				$sqlq = $sqlq.",BM_reason =null";
			}
			}
						
				
			$sqlq = $sqlq." where Reg_no = ".$_SESSION['Reg_no'];
				
				//echo $sqlq;
				
				
				

if ($conn->query($sqlq) === TRUE) {
    echo $_SESSION['Reg_no']." record Updated successfully";
} else {
    echo "Error: in statement... Try Again <br/>" . $conn->error;
}

$conn->close();
?>
				
				
				</div>
<div>
<footer>
Copyright@IRTT
</footer>
</div>	
<?php
}
?>					
</body>
</html>			