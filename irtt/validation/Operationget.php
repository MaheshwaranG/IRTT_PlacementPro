<!DOCTYPE HTML>
<html>
<head>
	<title>select year</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="/irtt/css/style1.css">
	<link rel="stylesheet" href="/irtt/css/link.css">
	<style>
.but {
    
    padding: 7px 18px;
    text-align: left;
    text-decoration: none;
    font-size: 18px;
    margin: 2px 2px;
    cursor: pointer;
}
</style>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
<script src="/irtt/js/form1.js"></script>
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
	<h1 id="id2"> Selection Process </h1>
	<center>
	<form name="Selectdatabase" action="/irtt/validation/DownloadProcess.php"  method="post" >
		
<?php
//to run PHP script on submit
if(!empty($_POST['check_list'])){
	$_SESSION['departlist']="where (";
	$count=0;
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
	if($count == 0)
	{
	$_SESSION['departlist'] =$_SESSION['departlist']."Branch_id like '".$selected."' ";
	$count++;
	}
	else
		$_SESSION['departlist'] =$_SESSION['departlist']."or Branch_id like '".$selected."' ";

}
$_SESSION['departlist'] =$_SESSION['departlist'].")";
//echo $_SESSION['departlist']."</br>";
}


}
		
	?>
	<center>
		<table cellpadding="10px" >
		
		<tr>
		<td>CGPA  </td>
		<td><input type="text"  class="but" name="CGPA" placeholder="9.25" maxlength=3></td>
		</tr>
		
		<tr>
		<td>Diplamo Percentage  </td>
		<td><input type="text" class="but" name="Per_dip" placeholder="99.5" maxlength=2></td>
		</tr>
		
		<tr>
		<td>HSC Percentage  </td>
		<td><input type="text" class="but" name="Per_12th" placeholder="90.5" maxlength=2></td>
		</tr>
		
		<tr>
		<td>SSLC Percentage  </td>
		<td><input type="text" class="but" name="Per_10th" placeholder="92.8" maxlength=2></td>
		</tr>
		<tr>
		<td>Standing Arrear Count  </td>
		<td><input type="number" class="but" name="Standing_A" placeholder="2" maxlength="2" ></td>
		</tr>
		<tr>
		<td>History of Arrear  </td>
		<td><input type="number" class="but" name="History_A" placeholder="2" maxlength="2" ></td>
		</tr>
		<tr>
		<td>Placement Status  </td>
		<td><select name="Place_status" class="but">
			<option value=""></option>
			<option value="N" >NOT PLACED</option>
			<option value="Y" >PLACED</option>
			<option value="HS">HIGHER STUDIES</option>
			<option value="NI">NOT INTESTED</option>
			<option value="BM" >BLACK MARK</option>
			</select>
		</td>
		</tr>	
		<tr>
														<td>GENDER</td>
														<!-- <td><input type='radio' class="but" name='gender' value='male'>MALE <input type='radio' class="but" name='gender' value='female' >FEMALE </td> -->
														<td> <select name='gender' class="but" id='gender'>
																	<option value=''> </option>
																	<option value='MALE'>MALE </option>
																	<option value='FEMALE'>FEMALE </option>
															</select> 
															
															</td>
													</tr>
		  
		<tr>
		
		<td> <input type="reset" class="but" > </td>
		<td> <div class="button-container">
		<button class="but">D O W N L O A D</button>
		</div></td>
		</tr>
		</form>
		</table>
		
		</center>
		</div>
	
<footer>
Copyright@IRTT
</footer>
</body>
</html>	