<?php 
$hostname="localhost"; 
$username="root"; 
$password="root"; 
$database="ereges";
  
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
  
$selected = mysql_select_db("ereges",$dbhandle) 
  or die("Could not select examples");
session_start();


$g = "Verified";
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check'] as $selected){
$query= "UPDATE `hss_mngr` SET `grade` = '$g' WHERE `susn`='$selected' ";
$result1 = mysql_query($query);

	if($result1==1)
		{ 	
			header('Location:.php');
		}
		else
		echo $query;
}
}
}
?>
?>
