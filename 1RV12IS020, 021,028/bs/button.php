<?php 
$hostname="localhost"; 
$username="root"; 
$password="root"; 
$database="ereges";
  
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
  
$selected = mysql_select_db("ereges",$dbhandle) 
  or die("Could not select examples");



$g = "Verified";


$query= "UPDATE `hss_mngr` SET `grade` = '$g' WHERE `cid`= '$b'";
$result1 = mysql_query($query);

	if($result1==1)
		{ 	
			header('Location:hssmngr.php');
		}
		else
			echo $query;
		?>
?>
