
<?php
session_start();
require("config1.php");
if(!isset($_SESSION['id'])){
	session_destroy();
	$_SESSION['logtest']=false;
	header("Location: /irtt/validation/ErrorPage.php");
	
}
else{
	
	header( "Content-Type: application/vnd.ms-excel" );
	header( "Content-disposition: attachment; filename=spreadsheet.xls" ); 
	echo 'Roll_no'."\t".'Reg_no'."\t".'First_name'."\t".'Last_name'."\t".'Branch_id'."\t".'Gender'."\t".'Father_name'."\t".
	'Mother_name'."\t".'Address'."\t".'Pin_code'."\t".'DOB'."\t".'CGPA'."\t".'Per_dip'."\t".'Per_12th'."\t".
	'Per_10th'."\t".'Standing_A'."\t".'History_A'."\t".'Phone_no'."\t".'Email'."\n";
$pass = 2000+substr($_SESSION['year'],2);
if($pass == 2000){
	header("Location: /irtt/validation/ErrorPage.php");
	session_destroy();
}
$login = new StudentLogin;
$connection = $login->getStudentLogin($pass);
/* $DEPARTLIST = EXPLODE(',', $_SESSION['DEPARTLIST']);
FOREACH($DEPARTLIST AS $DLIST  ){
    ECHO $DLIST.'<BR>';  
} */
$sqlq = "select * from datas AS i ".$_SESSION['departlist'];
if(isset($_POST['CGPA'])){
	if(!empty($_POST['CGPA'])){
		$sqlq = $sqlq." and CGPA >= ".$_POST['CGPA'];
	}
}
if(isset($_POST['Per_dip'])){
	if(!empty($_POST['Per_dip'])){
		$sqlq = $sqlq." and (Per_dip is null or Per_dip >= ".$_POST['Per_dip'] .") " ;
	}
}

if(isset($_POST['Per_12th'])){
	if(!empty($_POST['Per_12th'])){
		$sqlq = $sqlq." and (Per_12th is null or Per_12th >= ".$_POST['Per_dip'].") " ;
	}
}

if(isset($_POST['Per_10th'])){
	if(!empty($_POST['Per_10th'])){
		$sqlq = $sqlq." and Per_10th >= ".$_POST['Per_10th'];
	}
}

if(isset($_POST['Standing_A'])){
	if(!empty($_POST['Standing_A'])){
		$sqlq = $sqlq." and Standing_A <= ".$_POST['Standing_A'];
	}
}

if(isset($_POST['History_A'])){
	if(!empty($_POST['History_A'])){
		$sqlq = $sqlq." and History_A <= ".$_POST['History_A'];
	}
}

if(isset($_POST['Place_status'])){
	if(!empty($_POST['Place_status'])){
		$sqlq = $sqlq." and Place_status like '".$_POST['Place_status']."'";
	}
}
if(isset($_POST['gender'])){
	if(!empty($_POST['gender'])){
		$sqlq = $sqlq." and Gender like '".$_POST['gender']."'";
	}
}

$result = $connection->query($sqlq);
//echo $sqlq;
if($result){
			if($result->num_rows >0){
		while($row=$result->fetch_assoc()){
						echo $row['Roll_no']."\t"; 
						echo $row['Reg_no']."\t"; 
                        echo $row['First_name']."\t"; 
						echo $row['Last_name']."\t";
						echo $row['Branch_id']."\t";
                        echo $row['Gender']."\t"; 
						echo $row['Father_name']."\t";
						echo $row['Mother_name']."\t";
						echo $row['Address']."\t";
						echo $row['Pin_code']."\t";						
                        echo $row['DOB']."\t";
						echo $row['CGPA']."\t";
						echo $row['Per_dip']."\t";
                        echo $row['Per_12th']."\t"; 
						echo $row['Per_10th']."\t";
						echo $row['Standing_A']."\t";
						echo $row['History_A']."\t";
						echo $row['Phone_no']."\t";						
                        echo $row['Email']."\t";
						
                        
						
						
						echo "\n";

		}
			}
}
}
?>