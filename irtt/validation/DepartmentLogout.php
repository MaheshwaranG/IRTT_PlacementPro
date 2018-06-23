<?php
session_start();
if($_SESSION['logtest']==false){
	header("LOCATION: /irtt/index.php");
}
$_SESSION['logtest']=false;
session_destroy();
	
 
?>