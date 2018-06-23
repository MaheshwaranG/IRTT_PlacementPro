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
if(!isset($_SESSION['id']) && !isset($_SESSION['year']) && !isset($_SESSION['Reg_no'])  && !isset($_POST['firstname'])){
	header("Location: /irtt/validation/ErrorPage.php");
	$_SESSION['logtest']=false;
	session_destroy();
}
else {
require("config1.php"); 
$dbname = $_SESSION['year'];
$login = new StudentLogin;
// Create connection
$conn = $login->getStudentLogin($dbname);
// Check connection
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
				$query ="";
				/*echo $_POST['rollno']."\n";
				echo $_POST['fn']."\n";
				echo $_POST['ln']."\n";
				echo $_POST['branch']."\n";
				echo $_POST['gender']."\n";
				echo $_POST['fathername']."\n";
				echo $_POST['mothername']."\n";
				echo $_POST['address']."\n";
				echo $_POST['pincode']."\n";
				echo $_POST['dob']."\n";
				echo $_POST['cgpa']."\n";
				echo $_POST['yopug']."\n";
				echo $_POST['hsc']."\n";
				echo $_POST['yophsc']."\n";
				echo $_POST['dip']."\n";
				echo $_POST['yopdip']."\n";
				echo $_POST['sslc']."\n";
				echo $_POST['yopsslc']."\n";
				echo $_POST['SA']."\n";
				echo $_POST['HA']."\n";
				echo $_POST['phone']."\n";
				echo $_POST['Aphone']."\n";
				echo $_POST['email']."\n";
				echo $_POST['placementstatus']."\n"; */
				$dob = explode("-", $_POST['dob']);
				/*echo $dob[0];
				echo $dob[1];
				echo $dob[2]; */
				$_POST['dob'] =$dob[2]."".$dob[1]."".$dob[0];
				if($_POST['hsc'] != '-' && $_POST['dip']!='-'){
					$query = "insert into datas(Roll_no,Reg_no,First_name,Last_name,Branch_id,
					Gender,Father_name,Mother_name,Address,Pin_code,DOB ,CGPA,Yop_ug,Per_12th,
					Yop_12th ,Per_dip,
					Yop_dip,Per_10th,Yop_10th,Standing_A,History_A,
					Phone_no,APhone_no,Email,Place_status)
					values (".
					"'".$_POST['rollno']."',".$_SESSION['Reg_no'].",'".$_POST['fn'].
					"','".$_POST['ln']."','".$_POST['branch']."','".$_POST['gender']."','".
					$_POST['fathername']."','".$_POST['mothername']."','".$_POST['address']."',".
					$_POST['pincode'].",'".$_POST['dob']."',".$_POST['cgpa'].",".$_POST['yopug'].",".
					$_POST['hsc'].",".$_POST['yophsc'].",".
					$_POST['dip'].",".$_POST['yopdip'].
					",".$_POST['sslc'].",".$_POST['yopsslc'].",".$_POST['SA'].",".$_POST['HA'].
					",".$_POST['phone'].",".$_POST['Aphone'].",'".$_POST['email']."','".
					$_POST['placementstatus']."')";
					
					//echo $query;
					
				}
				
				else if($_POST['hsc']=='-'){
					$query = "insert into datas(Roll_no,Reg_no,First_name,Last_name,Branch_id,
					Gender,Father_name,Mother_name,Address,Pin_code,DOB ,CGPA,Yop_ug,Per_dip,
					Yop_dip,Per_10th,Yop_10th,Standing_A,History_A,
					Phone_no,APhone_no,Email,Place_status)
					values (".
					"'".$_POST['rollno']."',".$_SESSION['Reg_no'].",'".$_POST['fn'].
					"','".$_POST['ln']."','".$_POST['branch']."','".$_POST['gender']."','".
					$_POST['fathername']."','".$_POST['mothername']."','".$_POST['address']."',".
					$_POST['pincode'].",'".$_POST['dob']."',".$_POST['cgpa'].",".$_POST['yopug'].
					",".$_POST['dip'].",".$_POST['yopdip'].
					",".$_POST['sslc'].",".$_POST['yopsslc'].",".$_POST['SA'].",".$_POST['HA'].
					",".$_POST['phone'].",".$_POST['Aphone'].",'".$_POST['email']."','".
					$_POST['placementstatus']."')";
					//echo $query;
				}
				else if($_POST['dip']=='-'){
					$query = "insert into datas(Roll_no,Reg_no,First_name,Last_name,Branch_id,
					Gender,Father_name,Mother_name,Address,Pin_code,DOB ,CGPA,Yop_ug,Per_12th,
					Yop_12th ,Per_10th,Yop_10th,Standing_A,History_A,
					Phone_no,APhone_no,Email,Place_status)
					values (".
					"'".$_POST['rollno']."',".$_SESSION['Reg_no'].",'".$_POST['fn'].
					"','".$_POST['ln']."','".$_POST['branch']."','".$_POST['gender']."','".
					$_POST['fathername']."','".$_POST['mothername']."','".$_POST['address']."',".
					$_POST['pincode'].",'".$_POST['dob']."',".$_POST['cgpa'].",".$_POST['yopug'].
					",".$_POST['hsc'].",".$_POST['yophsc'].",".$_POST['sslc'].",".$_POST['yopsslc'].
					",".$_POST['SA'].",".$_POST['HA'].
					",".$_POST['phone'].",".$_POST['Aphone'].",'".$_POST['email']."','".
					$_POST['placementstatus']."')";
					//echo $query;
				}
				
				
				

if ($conn->query($query) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: in statement... Try Again <br/>" . $conn->error;
}

$conn->close();
}
?>
				
				
				</div>
<div>
<footer>
Copyright@IRTT
</footer>
</div>	
					
</body>
</html>			