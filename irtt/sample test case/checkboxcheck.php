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
<form action="#" method="post">
<input type="checkbox" name="check_list[]" value="AUTO"><label>AUTO</label><br/>
<input type="checkbox" name="check_list[]" value="CSE"><label>CSE</label><br/>
<input type="checkbox" name="check_list[]" value="CIVIL"><label>CIVIL</label><br/>
<input type="checkbox" name="check_list[]" value="ECE"><label>ECE</label><br/>
<input type="checkbox" name="check_list[]" value="EEE"><label>EEE</label><br/>
<input type="checkbox" name="check_list[]" value="IT"><label>IT</label><br/>
<input type="checkbox" name="check_list[]" value="MECH"><label>MECH</label><br/>
<input type="checkbox" name="check_list[]" value="MCA"><label>MCA</label><br/>

<input type="submit" name="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
echo $selected."</br>";
}
}
}
?>
</body>
</html>	