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
}
$usn=$_SESSION["usn"];
$cid=$_SESSION["cid"];

$query_select ="INSERT INTO `smsg`(`susn`, `smsg`,`cid`)
		VALUES ('$usn','$msg','$cid')";
		$ret = mysql_query($query_select);
		if($ret == 1)
			header('Location:WPviewnoti.php?error=1');
		else
		 echo $query_select;
		  
		 ?>
?>
