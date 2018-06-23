<!DOCTYPE html>
		<html>
			 <head>
					<title> STUDENTS DATA ENTRY FORM </title>
						
						<meta name="viewport" content="width=device-width">
						<link rel="stylesheet" href="/irtt/css/formstyle.css">
						<link rel="stylesheet" href="/irtt/css/link.css">	
							
						
						<link rel='stylesheet' href='form1style.css'>

						<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
						<script src="/irtt/js/forminsert1.js"></script>
</head>

											
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
<?php
session_start();
require("config1.php");
$reg = true;
if(!isset($_SESSION['id']) && !isset($_SESSION['year']) || !isset($_POST['Reg_no'])){
	header("Location: /irtt/validation/ErrorPage.php");
	$_SESSION['logtest']=false;
	session_destroy();
}
else if(isset($_POST['Reg_no'])){
	$_SESSION['Reg_no'] = $_POST['Reg_no'];
	$login = new StudentLogin;
	"database".$_SESSION['year'];
$connection = $login->getStudentLogin($_SESSION['year']);
$sqlq = "select * from datas where Reg_no=".$_SESSION['Reg_no'];

$result = $connection->query($sqlq);
//echo $sqlq;
if($result->num_rows >0){
	$reg = false;
	?>
						</center>
						<div style = "padding:20px;margin:50px;background-color:green;color:white;align:center;text-align:center;font-size:22px;">
						Registered Student
						</div>
						<center>
<?php						
}
}
if($reg) {
	//echo $_SESSION['database'] ;
?>
					<center><h1 style = "padding:20px;margin:50px;background-color:green;color:white;align:center;text-align:center;">STUDENTS PORTAL <br/>
					<?php 
						echo "NEW REGISTRATION   : ".$_SESSION['Reg_no'];
						?>
					</h1>
					</center>
						<div style = "padding:20px;margin:50px;background-color:green;color:white;align:center;text-align:center;font-size:22px;">
							<center>
						
									<table cellpadding='10px'>
									<tr>
										<th> </th>
									</tr>
											<form name='form' id='insert' method='post' action='/irtt/validation/form/InsertSuccess.php' onsubmit='return validate()' >
													<tr>
														<td>ROLL NUMBER </td>
														<td><input type='text' class="but" id="rollno" name='rollno' placeholder='11IMT46 or 11IMT62L' maxlength='8'> 
														<br/><span class="error_form" id="rollno_error_msg"></span>
														</td>
														</tr>
																
													<tr>
														<td>FIRST NAME </td>
														<td><input type='text' class="but" id="fn" name='fn' id='txt' placeholder='KRISHNA KUMAR' maxlength='25' > 
														<br/><span class="error_form" id="firstname_error_msg"></span>
														</td>
														
													</tr>
													
													<tr>
														<td>LAST NAME </td>
														<td><input type='text' class="but" id="ln" name='ln' id='txt' placeholder='R' maxlength='25' >
														<br/><span class="error_form" id="lastname_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>BRANCH </td>
														<td> <select name='branch' class="but" id="branch">
																	<option value=''> </option>
																	<option value='AUTO'>AUTOMOBILE ENGINEERING</option>
																	<option value='CSE'>COMPUTER SCIENCE ENGINEERING</option>
																	<option value='CIVIL'>CIVIL ENGINEERING</option>
																	<option value='ECE'>ELECTRONICS & COMM. ENGINEERING</option>
																	<option value='EEE'>ELECTRICAL & ELECTRONICS ENGINEERING</option>
																	<option value='IT'>INFORMATION TECHNOLOGY</option>
																	<option value='MECH'>MECHANICAL ENGINEERING</option>
																	<option value='MCA'>MASTER OF COMPUTER APPLICATIONS</option>
															</select>
															<br/><span class="error_form" id="branch_error_msg"></span>
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
															<br/><span class="error_form" id="gender_error_msg"></span>
															</td>
													</tr>
													
													<tr>
														<td>FATHER NAME </td>
														<td><input type='text' class="but" name='fathername' id='fathername' placeholder='SHYAM S' maxlength='25' > 
														<br/> <span class="error_form" id="fathername_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>MOTHER NAME </td>
														<td><input type='text' class="but" name='mothername' id='mothername' placeholder='PRIYA S' maxlength='25' > 
														<br/> <span class="error_form" id="mothername_error_msg"></span>

														</td>
													</tr>
													
													<tr>
														<td>ADDRESS</td>
														<td><textarea class="but" name='address' id='address' cols="25" rows="4" maxlength='100' ></textarea> 
														<br/><span class="error_form" id="address_error_msg">hii</span>
														</td>
													</tr>
													
													<tr>
														<td>PIN CODE </td>
														<td><input type='text' class="but" name='pincode' id='pincode' placeholder='638316' maxlength='6' >
														<br/><span class="error_form" id="pincode_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>DATE OF BIRTH </td>
														<td><input type='text' class="but" name='dob' id='dob'  maxlength=10 placeholder="20-06-1996"> 
														<br/><span class="error_form" id="dob_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>CGPA </td>
														<td><input type='text' class="but" name='cgpa' id='cgpa' placeholder='8.952' maxlength='5' > 
														<br/><span class="error_form" id="cgpa_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>YEAR OF PASSING DEGREE </td>
														<td><input type='text' class="but" name='yopug' id='yopug' placeholder='2015' maxlength='4' > 
														<br/><span class="error_form" id="yopug_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>HSC PERCENTAGE </td>
														<td><input type='text' class="but" name='hsc' id='hsc' placeholder='90.50' maxlength='5' > 
														<br/><span class="error_form" id="hsc_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>YEAR OF PASSING HSC </td>
														<td><input type='text' class="but" name='yophsc'id='yophsc' placeholder='2011' maxlength='4' >
														<br/><span class="error_form" id="yophsc_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>DIPLOMA PERCENTAGE </td>
														<td><input type='text' class="but" name='dip' id='dip' placeholder='90.50' maxlength='5' >
														<br/><span class="error_form" id="dip_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>YEAR OF PASSING DIPLOMA </td>
														<td><input type='text' class="but" name='yopdip' id='yopdip' placeholder='2011' maxlength='4' > 
														<br/><span class="error_form" id="yopdip_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>SSLC PERCENTAGE </td>
														<td><input type='text' class="but" id='sslc' name='sslc' placeholder='93.80' maxlength='5' > 
														<br/><span class="error_form" id="sslc_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>YEAR OF PASSING SSLC </td>
														<td><input type='text' class="but" id='yopsslc' name='yopsslc' placeholder='2009' maxlength='4' > 
														<br/><span class="error_form" id="yopsslc_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>STANDING ARREAR COUNT </td>
														<td><input type='text' class="but" id='SA' name='SA' placeholder='2' maxlength='2' > 
														<br/><span class="error_form" id="SA_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>HISTORY OF ARREAR</td>
														<td><input type='text' class="but" id='HA' name='HA' placeholder='2' maxlength='2' > 
														<br/><span class="error_form" id="HA_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>CONTACT NUMBER </td>
														<td><input type='text' class="but" id='phone' name='phone' placeholder='9944223355' maxlength='10' > 
														<br/><span class="error_form" id="phone_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>ALTERNATE CONTACT NUMBER </td>
														<td><input type='text' class="but" id='Aphone' name='Aphone' placeholder='9846233255' maxlength='10' > 
														<br/><span class="error_form" id="Aphone_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>E-MAIL ID </td>
														<td><input type='email' class="but" id='email' name='email' placeholder='YOU@EXAMPLE.COM' maxlength=30> 
														 <br/><span class="error_form" id="email_error_msg"></span>
														 
														</td>
													</tr>
													
													<tr>
														<td>PLACEMENT STATUS </td>
														<td> <select name='placementstatus' class="but" id='status'>
																	<option value=''> </option>
																	<option value='N'>INTERESTED </option>
																	<option value='NI'>NOT INTERESTED </option>
																	<option value='HS'>HIGHER STUDIES </option>
																	
																	
															</select> 
															<br/><span class="error_form" id="status_error_msg"></span>
															</td>
													</tr>	
													
																										
													<tr>
														<td><input type='RESET' value='RESET' id='reset' class="but"> </td>
														<td ><input type='SUBMIT' value='SUBMIT' id='submit' class="but"> 
														<br/><span class="error_form" id="submit_error_msg"></span>
														</td>
														
													</tr>
													
											</form>
									</table>
							</center>
						</div>	
<?php
}

?>	
<div>
<footer>
Copyright@IRTT
</footer>
</div>						
</body>
</html>			