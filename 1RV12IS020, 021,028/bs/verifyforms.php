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


$b = $_SESSION["cid"];
$g = "Verified";
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check'] as $selected){
$query= "UPDATE `exam_reg` SET `checks` = '$g' WHERE `cid`= '$b' AND `susn`='$selected' ";
$result1 = mysql_query($query);

	if($result1==1)
		{ 	
			header('Location:WPexamformc.php');
		}
		else
		echo $query;
}
}
}
else if(isset($_POST['reject'])){
	if(!empty($_POST['check'])){
	// Loop to store and display values of individual checked checkbox.
	foreach($_POST['check'] as $selected){
	$query= "DELETE FROM `exam_reg` WHERE susn = '$selected'";
		$ret1 = mysql_query($query);
		if(!$ret1){echo "error".$query; }
	}
	}
	if(!empty($_POST['check'])){
	$msg="REFILL EXAM FORM";
	foreach($_POST['check'] as $selected){
	$query_select ="INSERT INTO `cmsg`(`susn`, `cmsg`,`cid`) VALUES ('$selected','$msg','$b')";
		$ret = mysql_query($query_select);
		if($ret == 1)
			header('Location:WPexamformc.php');
		else
		 	echo $query_select;
	

	
}
}
}


		?>
?>
