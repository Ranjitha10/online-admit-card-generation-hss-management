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
if(isset($_POST['submit'])){	

	$msg = $_POST['msg'];
	$cid = $_POST['cid'];
}



$query_select ="INSERT INTO `amsg`(`amsg`,`cid`) VALUES ('$msg','$cid')";
		$ret = mysql_query($query_select);
		if($ret == 1)
			header('Location:WPsendmesa.php?error=1');
		else
		 	echo $query_select;
		  
?>
?>
