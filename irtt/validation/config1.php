<?php
class AdminLogin{
function getAdminLogin($pass){
$servername = "127.0.0.1:3306";	 // server name definition
$username = "root";				//sql server username
$password = "";					// sql server password
static $connection ;		// choose server database
if(!isset($connection))
{
$connection = new mysqli($servername,$username,$password,$pass);	// connection establishmentamp
}
if($connection->connect_error) {
exit();
}
return $connection;
}
}
class StudentLogin{
function getStudentLogin($year){
$servername = "127.0.0.1:3306";	 // server name definition
$username = "root";				//sql server username
$password = "";					// sql server password
$database = "database".$year;
static $connection ;   // choose server database
$test = true;		
$link = new mysqli($servername,$username,$password);
$result = $link->query("SHOW DATABASES");
if($result){
if($result->num_rows >0){
while($row=$result->fetch_assoc()){
if($database == $row['Database']){
$test=false;
}
}
if($test){
?>
<div style = "padding:20px;margin:50px;background-color:green;color:white;align:center;text-align:center;font-size:20px">
ERROR....!!!!    INVALID USER </div>
<?php
exit();
}
}
}
if(!$test){
if(!isset($connection))
{
$connection = new mysqli($servername,$username,$password,$database);	// connection establishmentamp
}
if($connection->connect_error) {
exit();
}
return $connection;
}
}	
}
?>