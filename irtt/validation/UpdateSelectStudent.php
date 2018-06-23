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
.but1 {
    font-size: 20px;
    margin: 4px 2px;
}
</style>
<?php
session_start();
if(!isset($_SESSION['id'])){
	header("Location: /irtt/validation/ErrorPage.php");
	$_SESSION['logtest']=false;
	session_destroy();
}
else if(isset($_POST['year'])){
	$_SESSION['year']=substr($_POST['year'],8);
	//echo $_SESSION['year'];
?>
<script type="text/javascript">
//document.getElementById("t1").value = "7311455" ;
	function validate(){
var Name = document.studentReg_no.Reg_no.value;
var check = '<?php echo $_SESSION['year']; ?>';
var dbyear = check.substr(2);
var check1 = Name.substr(4,2);
var nostudents = Name.substr(10,2);
//document.getElementById("e2").innerHTML = check1+" "+dbyear;
if(isNaN(Name) ){
document.getElementById("e1").innerHTML = "Enter Student Registration number only";
return false;
}
else{
document.getElementById("e1").innerHTML = "";
}
if(Name.length != 12){
document.getElementById("e1").innerHTML = "Enter 12 digits Student Registration number only";
return false;
}
else{
document.getElementById("e1").innerHTML = "";
}
if(check1 != dbyear ){
//alert(check1+"   "+dbyear+"  from post"+check);
document.getElementById("e1").innerHTML = "Wrong Student Registration Number, This is "+check+" Student DataBase";
return false;
}
else{
document.getElementById("e1").innerHTML = "";
}
if(nostudents > 80 ){
//alert(check1+"   "+dbyear+"  from post"+check);
document.getElementById("e1").innerHTML = "Wrong Student Registration Number!!!";
return false;
}
else{
document.getElementById("e1").innerHTML = "";
}

return true;

}
</script>
</head>
<body>


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
	<h1 id="id2"> Enter Student Registration Number </h1>
	<center>
	<form name="studentReg_no" id="f1" action="/irtt/validation/form/UpdateForm.php" onsubmit="return  validate()" method="post" >
		<input type="text" name="Reg_no" id ="t1" class="but1" maxlength=12 value= "<?php echo "7311".substr($_SESSION['year'],2) ?>">
		<!-- <script>
			document.getElementById("t1").value = "7311";
		</script>
		-->
		<br/>
		<span id="e1" style="font-size:20px" ></span>
		<br/>
		<span id="e2" style="font-size:20px" ></span>	
	<br/>
	<br/>
	</br>
	<div class="button-container">
    <button class="but">NEXT</button>
     </div>
	</form>
	</center>
	</div>
<?php
}
else{
	header("Location: /irtt/validation/ErrorPage.php");
	$_SESSION['logtest']=false;
	session_destroy();
}	
	?>	
<footer>
Copyright@IRTT
</footer>
</body>
</html>	