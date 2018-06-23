<!DOCTYPE html>
<?php
session_start();
$_SESSION['logtest']=false;
if($_SESSION['logtest']==false){
	header("LOCATION: /irtt/index.php");
}
session_destroy();
?>

<html>
<head>
	<title>Error Page</title>
	
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="/irtt/css/style1.css">
	<link rel="stylesheet" href="/irtt/css/link.css">
	
</head>
<body >
<h2 class="error">E R R O R    P A G E !!! ....</h2>
</body>
</html>
