<?php
class db
{
	private $servername = "127.0.0.1:3306";	 // server name definition
	private $username = "root";				//sql server username
	private $password = "";
	private $conn ;
	
function Connection($pass){
	$database = "database".$pass;
	if(!isset($conn))
		{
				$conn = new mysqli($servername,$username,$password,$database);	
		}


}
function insertQuery($var){
		if(isset($conn){
			
				$conn->query($var);	// connection establishmentamp
			
		}
		
		return true;
	}
}


?>