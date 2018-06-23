<!DOCTYPE html>
<html>
<head>
	<title>Student Corner</title>
	
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="/irtt/css/style1.css">
	<link rel="stylesheet" href="/irtt/css/link.css">
	
</head>
<body >
<?php
session_start();
require("config1.php"); 
// $_SESSION['User_name']=$_POST['UserName'];
// $_SESSION['Password'] = sha1($_POST['Password']) ;
// echo $_SESSION['User_name']." ".$_SESSION['Password']."</br>";
// echo var_dump($_SESSION['Password']);
if(!isset($_POST['UserName']) && !isset($_POST['Password'])){
	header("Location: /irtt/validation/ErrorPage.php");
	session_destroy();
}
else{
$_SESSION['Reg_no']	= $_POST['UserName'];
$_SESSION['Roll_no'] =	$_POST['Password'];
/*echo $_POST['UserName']."<br/>";
echo $_POST['Password']."<br/>"; */
$pass = 2000+substr($_POST['UserName'],4,2);
//echo $pass;
if($pass == 2000){
	header("Location: /irtt/validation/ErrorPage.php");
	session_destroy();
}
$login = new StudentLogin;
$connection = $login->getStudentLogin($pass);
$sqlq = "select * from datas where Reg_no=".$_SESSION['Reg_no'];
$result = $connection->query($sqlq);
//echo $sqlq;
if($result->num_rows >0){
while($row =$result ->fetch_assoc()) { 
if($row['Place_status']=='BM'){?>
<header> IRTT PLACEMENT CELL </br></br>
 STUDENT CORNER
</header>
<ul class="tags">
  <li><a href="#id1" class="tag">Personal Info</a></li>
  <li><a href="#id2" class="tag">Contact Info</a></li>
  <li><a href="#id3" class="tag">Educational Info</a></li>
  <li><a href="#id4" class="tag">Other Info</a></li>
   <li><a href="StudentLogout.php" class="tag">Logout</a></li>
</ul>

<div style = "padding:20px;margin:50px;background-color:green;color:white;align:center;text-align:center;font-size:12px">
<h1 id="id1"> Account has been Blocked... Contact Admin </h1> 
</div>
<?php	 
}
else{
?>
<header> IRTT PLACEMENT CELL </br></br>
 STUDENT CORNER
</header>
<ul class="tags">
  <li><a href="#id1" class="tag">Personal Info</a></li>
  <li><a href="#id2" class="tag">Contact Info</a></li>
  <li><a href="#id3" class="tag">Educational Info</a></li>
  <li><a href="#id4" class="tag">Other Info</a></li>
   <li><a href="StudentLogout.php" class="tag">Logout</a></li>
</ul>
<div style = "padding:20px;margin:50px;background-color:green;color:white;align:center;text-align:center;font-size:12px">
<h1 id="id1"> Personal Information </h1>
<center>
<table >
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>DOB</th>
<th>Father Name</th>
<th>Mother name</th>
<th>Address</th>
</tr>
<tr>
<td><?php echo $row['First_name']; ?></td>
<td><?php echo $row['Last_name']; ?></td>
<td><?php echo $row['Gender']; ?></td>
<td><?php echo $row['DOB']; ?></td>
<td><?php echo $row['Father_name']; ?></td>
<td><?php echo $row['Mother_name']; ?></td>
<td><?php echo $row['Address']; ?></td>
</tr>
</table>
</center>
</div>
	
	
<div style = "padding:20px;margin:50px;background-color:green;color:white;align:center;text-align:center;font-size:12px">
<h1 id="id2"> Contact Details </h1>
<center>
<table>
<tr>
		<th>Your Number</th>
		<th>Parent Number</th>
		<th>Email id</th>
		<th>ALT Email id</th>
		
		
</tr>		
<tr>
                        <td><?php echo $row['Phone_no']; ?></td>
                        <td> <?php echo $row['APhone_no']; ?>  </td>
                        <td><?php echo $row['Email']; ?></td>
                        <td>   </td>
						
						
						
    </tr>
	</table>
	</center>
	</div>	
	
	
<div style = "padding:20px;margin:50px;background-color:green;color:white;align:center;text-align:center;font-size:12px">
<h1 id="id3"> Educational Information </h1>
<center>
<table>
<tr>
		<th>Roll_num</th>
		<th>Reg_num</th>
		<th>Branch</th>
		<th>CGPA</th>
		<th>Diploma %</th>
		<th>12th %</th>
		<th>10th %</th>
		<th>Standing Arrears</th>
		<th>History Arrears</th>
		
		
	</tr>		
	<tr>
                        <td><?php echo $row['Roll_no']; ?></td>
                        <td><?php echo $row['Reg_no']; ?></td>
                        <td><?php echo $row['Branch_id']; ?></td>
                        <td><?php echo $row['CGPA']; ?></td>
						<td><?php echo $row['Per_dip']; ?></td>
						<td><?php echo $row['Per_12th']; ?></td>
						<td><?php echo $row['Per_10th']; ?></td>
						<td><?php echo $row['Standing_A']; ?></td>
						<td><?php echo $row['History_A']; ?></td>
						
    </tr>
	<tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?php echo $row['Yop_ug']; ?></td>
						<td><?php echo $row['Yop_dip']; ?></td>
						<td><?php echo $row['Yop_12th']; ?></td>
						<td><?php echo $row['Yop_10th']; ?></td>
						<td></td>
						<td></td>
						
    </tr>

	</table>
	</center>
	</div>
	
	<div style = "padding:20px;margin:50px;background-color:green;color:white;align:center;text-align:center;font-size:12px">
<h1 id="id4"> Placement Information </h1>
<center>
<table>
<tr>
		<th>Company Name</th>
		<th>Designation</th>
		<th>Package</th>
		<th>Work Location</th>
		<th>Bond</th>
		
		
</tr>		
<tr>
                        <td><?php echo $row['Company_name']; ?></td>
                        <td><?php echo $row['Job']; ?></td>
                        <td><?php echo $row['Package']; ?></td>
						<td><?php echo $row['Location']; ?></td>
						<td><?php echo $row['Bond']; ?></td>
						
						
    </tr>
	</table>
	</center>
	</div>
	<div style = "padding:20px;margin:50px;background-color:green;color:white;align:center;text-align:center;font-size:12px">
<h1 id="id4"> Higher Study Information </h1>
<center>
<table>
<tr>
		<th>Course Name</th>
		<th>College Name</th>
</tr>		
<tr>
                        <td><?php echo $row['Course_name']; ?></td>
                        <td><?php echo $row['PG_college']; ?></td>
</tr>
	</table>
	</center>
	</div>
<?php } 
 }
}
else{
	header("Location: /irtt/student.php");
}
}	
?>

<table>
</center>

</div>
<footer>
Copyright@IRTT
</footer>
</body>
</html>