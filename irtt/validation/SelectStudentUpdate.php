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
	session_destroy();
}
else{
	$_SESSION['database'] = $_POST['choose'];
	//echo $_SESSION['database'] ;
?>
<script type="text/javascript">
//document.getElementById("t1").value = "7311455" ;
	function validate(){
var Name = document.Selectdatabase.Reg_no.value;
var check = '<?php echo $_SESSION['database']; ?>';
var dbyear = check.substr(10,2);
var check1 = Name.substr(4,2);
//document.getElementById("e2").innerHTML = check1+" "+dbyear;
if(isNaN(Name) ){
document.getElementById("e1").innerHTML = "Enter Student Registration number only";
return false;
}
else{
document.getElementById("e1").innerHTML = "";
}
if(Name.length <12){
document.getElementById("e1").innerHTML = "Enter 12 digits Student Registration number only";
return false;
}
else{
document.getElementById("e1").innerHTML = "";
}
if(check1 != dbyear ){
document.getElementById("e1").innerHTML = "Wrong Student Registration Number, This is "+check.substr(8,4)+" Student DataBase";
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
	<form name="Selectdatabase" id="f1" action="/irtt/validation/UpdatePage.php" onsubmit="return  validate()" method="post" >
		<input type="text" name="Reg_no" id ="t1" class="but1" value= "<?php echo "7311".substr($_SESSION['database'],10) ?>">
		<!-- <script>
			document.getElementById("t1").value = "7311";
		</script>
		-->
		<br/>
		<span id="e1" style="font-size:20px" ></span>
		<br/>
		<span id="e2" style="font-size:20px" ></span>
<?php
}
		
	?>
	
	</select>
	<br/>
	<br/>
	</br>
	<div class="button-container">
    <button class="but">NEXT</button>
     </div>
	</form>
	</center>
	</div>	
<footer>
Copyright@IRTT
</footer>
</body>
</html>	