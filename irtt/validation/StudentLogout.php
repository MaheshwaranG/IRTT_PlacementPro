<?php
session_start();
$_SESSION['logtest']=false;
if($_SESSION['logtest']==false){
	header("LOCATION: /irtt/index.php");
}
session_destroy();
?>