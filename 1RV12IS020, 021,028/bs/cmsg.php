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
	$susn= $_POST['usn'];
}

$a=$_SESSION["cid"];

$query_select ="INSERT INTO `cmsg`(`susn`, `cmsg`,`cid`) VALUES ('$susn','$msg','$a')";
		$ret = mysql_query($query_select);
		if($ret == 1)
			header('Location:WPsendmesc.php?error=1');
		else
		 	echo $query_select;
		  
?>
?>
