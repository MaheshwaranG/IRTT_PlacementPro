<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Material Login Form</title>
  
     <link rel="stylesheet" href="css/style.css">
	 <link rel="stylesheet" href="css/style1.css">
	 <link rel="stylesheet" href="/irtt/css/link.css">
	 
<script type="text/javascript">
function validate(){
var Name = document.login.UserName.value;
var Pass = document.login.Password.value;
if(isNaN(Name) ){
document.getElementById("e1").innerHTML = "Enter Numeric Reg number only";
return false;
}
else{
document.getElementById("e1").innerHTML = "";
}
if(Name.length <12){
document.getElementById("e1").innerHTML = "Enter 12 digits Numeric Reg number only";
return false;
}
else{
document.getElementById("e1").innerHTML = "";
}
if(Pass.length < 7){
document.getElementById("e2").innerHTML = "Password length should be 7 or 8";
return false;
}
else{
document.getElementById("e2").innerHTML = "";
}
return true;

}
 </script> 
</head>

<body>
<header> IRTT PLACEMENT CELL </br></br>
 STUDENT LOGIN FORM

</header>
  
<!-- Mixins-->
<!-- Pen Title-->

<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form id='login' name="login" action='/irtt/validation/StudentLogin.php' onsubmit='return validate()' method='post' accept-charset='UTF-8'>
      <div class="input-container">
        User ID :  <input type="text" name="UserName" required="required" maxlength="12" />
		
        <div class="bar"></div>
		<span id="e1" ></span>
      </div>
      <div class="input-container">
        Password:  <input type="password" name="Password" maxlength="7" required="required"/>
		<span id="e2"></span>
        <div class="bar"></div>
		
      </div>
      <div class="button-container">
        <button><span>Go</span></button>
      </div>
    </form>
  </div>
  
 </div>
 
<footer>
Copyright@IRTT
</footer>
 
</body>
</html>
