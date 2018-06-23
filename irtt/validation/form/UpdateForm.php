<!DOCTYPE html>
		<html>
			 <head>
					<title> STUDENTS DATA ENTRY FORM </title>
						
						<meta name="viewport" content="width=device-width">
						<link rel="stylesheet" href="/irtt/css/formstyle.css">
						<link rel="stylesheet" href="/irtt/css/link.css">	
							
						
						<link rel='stylesheet' href='form1style.css'>

						<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
						<script src="/irtt/js/forminsertU.js"></script>
</head>
<?php
session_start();
require("config1.php");
if(!isset($_SESSION['id']) && !isset($_SESSION['year']) || !isset($_POST['Reg_no'])){
	header("Location: /irtt/validation/ErrorPage.php");
	$_SESSION['logtest']=false;
	session_destroy();
}
else if(isset($_POST['Reg_no'])){
	$_SESSION['Reg_no'] = $_POST['Reg_no'];
	
	
	//echo $_SESSION['database'] ;
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
					<div>
					<center><h1 style = "padding:20px;margin:50px;background-color:green;color:white;align:center;text-align:center;">STUDENTS PORTAL <br/> UPDATE :
<?php 
						echo $_SESSION['Reg_no'];
 
// $_SESSION['User_name']=$_POST['UserName'];
// $_SESSION['Password'] = sha1($_POST['Password']) ;
// echo $_SESSION['User_name']." ".$_SESSION['Password']."</br>";
// echo var_dump($_SESSION['Password']);
$login = new StudentLogin;
$connection = $login->getStudentLogin($_SESSION['year']);
$sqlq = "select * from datas where Reg_no=".$_SESSION['Reg_no'];

$result = $connection->query($sqlq);
if($result->num_rows >0){
while($row =$result ->fetch_assoc()){
?>
					
					</h1></center>
					</div>
						<div style = "padding:20px;margin:50px;background-color:green;color:white;align:center;text-align:center;font-size:22px;">
							<center>
						
									<table cellpadding='10px'>
									
											<form name='form' id='insert' method='post' action='/irtt/validation/form/UpdateSuccess.php' onsubmit='return validate()' >
													<tr>
														<td>ADDRESS</td>
														<td><textarea class="but" name='address' id='address' cols="25" rows="4" maxlength='100' ><?php echo $row['Address']; ?></textarea> 
														<br/><span class="error_form" id="address_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>PIN CODE </td>
														<td><input type='text' class="but" name='pincode' id='pincode' placeholder='638316' maxlength='6'  value=<?php echo $row['Pin_code']; ?> >
														<br/><span class="error_form" id="pincode_error_msg"></span>
														</td>
													</tr>
										
													<tr>
														<td>CGPA </td>
														<td><input type='text' class="but" name='cgpa' id='cgpa' placeholder='8.955' maxlength='5' value=<?php echo $row['CGPA']; ?>> 
														<br/><span class="error_form" id="cgpa_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>STANDING ARREAR COUNT </td>
														<td><input type='text' class="but" id='SA' name='SA' placeholder='2' maxlength='2' value=<?php echo $row['Standing_A']; ?> > 
														<br/><span class="error_form" id="SA_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>HISTORY OF ARREAR</td>
														<td><input type='text' class="but" id='HA' name='HA' placeholder='2' maxlength='2'  value=<?php echo $row['History_A']; ?> > 
														<br/><span class="error_form" id="HA_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>CONTACT NUMBER </td>
														<td><input type='text' class="but" id='phone' name='phone' placeholder='9944223355' maxlength='10'  value=<?php echo $row['Phone_no']; ?> > 
														<br/><span class="error_form" id="phone_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>ALTERNATE CONTACT NUMBER </td>
														<td><input type='text' class="but" id='Aphone' name='Aphone' placeholder='9846233255' maxlength='10' value=<?php echo $row['APhone_no']; ?>> 
														<br/><span class="error_form" id="Aphone_error_msg"></span>
														</td>
													</tr>
													
													<tr>
														<td>E-MAIL ID </td>
														<td><input type='email' class="but" id='email' name='email' placeholder='YOU@EXAMPLE.COM' maxlength=30  value=<?php echo $row['Email']; ?>> 
														 <br/><span class="error_form" id="email_error_msg"></span>
														 
														</td>
													</tr>
													
													<tr>
														<td>PLACEMENT STATUS </td>
														<td> <select name='placementstatus' class="but" id='status' >
																	<option value=''> </option>
																	<option value='BM' <?php if('BM'== $row['Place_status']){echo "selected";} ?>>BLACK MARK </option>
																	<option value='N' <?php if('N'== $row['Place_status']){echo "selected";} ?>>INTERESTED </option>
																	<option value='NI' <?php if('NI'== $row['Place_status']){echo "selected";} ?>>NOT INTERESTED </option>
																	<option value='HS' <?php if('HS'== $row['Place_status']){echo "selected";} ?>>HIGHER STUDIES </option>
																	<option value='Y' <?php if('Y'== $row['Place_status']){echo "selected";} ?>>PLACED </option>
																	
															</select> 
															<br/><span class="error_form" id="status_error_msg"></span>
															</td>
														</tr>
															<span id="placed" >
															<tr>
																<td> COMPANY NAME </td>
																<td> <textarea class="but" id='company' name='company' placeholder='ZOHO' maxlength=100 > <?php echo $row['Company_name']; ?></textarea>  
																<br/><span class="error_form" id="company_error_msg"></span>
																</td>
															</tr>
															<tr>
																<td> DESIGNATION TYPE </td>
																<td> <textarea class="but" id='designation' name='designation' placeholder='Trainee Engineer' maxlength=100><?php echo $row['Job']; ?> </textarea>  
																<br/><span class="error_form" id="designation_error_msg"></span>
																</td>
															</tr>
															<tr>
																<td> PACKAGE In L/A </td>
																<td> <textarea class="but" id='package' name='package' placeholder='6.5' maxlength=30 > <?php echo $row['Package']; ?></textarea>  
																<br/><span class="error_form" id="package_error_msg"></span>
																</td>
															</tr>
															<tr>
																<td> Location </td>
																<td> <textarea class="but" id='location' name='location' placeholder='CHENNAI' maxlength=60><?php echo $row['Location']; ?></textarea>  
																<br/><span class="error_form" id="location_error_msg"></span>
																</td>
															</tr>
															<tr>
																<td> Bond (year.month) </td>
																<td> <textarea class="but" id='bond' name='bond' placeholder='2' maxlength=30 ><?php echo $row['Bond']; ?></textarea>  
																<br/><span class="error_form" id="bond_error_msg"></span>
																</td>
															</tr>
													</span>
													<span id="hs" >
															<tr>
																<td> COURSE </td>
																<td> <textarea class="but" id='course' name='course' placeholder='M.TECH - IT' maxlength=20 ><?php echo $row['Course_name']; ?> </textarea>  
																<br/><span class="error_form" id="course_error_msg"></span>
																</td>
															</tr>
															<tr>
																<td> INSTITUTE NAME </td>
																<td> <input type='text' class="but" id='PGcollege' name='PGcollege' placeholder='IRTT,ERODE.' maxlength=30 value=<?php echo $row['PG_college']; ?> >  
																<br/><span class="error_form" id="PGcollege_error_msg"></span>
																</td>
															</tr>
															
													</span>
													<span id="bm" >
															<tr>
																<td> BLACK MARK </td>
																<td><textarea class="but" name='BM' id='BM' cols="25" rows="4" maxlength='50' value=<?php echo $row['BM_reason']; ?> ></textarea> 
																<br/><span class="error_form" id="BM_error_msg"></span>
																</td>
															</tr>
													</span>
													
																										
													<tr>
														<td><input type='button' value='RESET' id='reset' class="but"> </td>
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
}
else{
	?>
	<div>
					<center><h1 style = "padding:20px;margin:50px;background-color:green;color:white;align:center;text-align:center;"> Records Not Found!!! 
					</div>
<?php
}
}

?>	

<footer>
Copyright@IRTT
</footer>						
					</body>
		</html>			