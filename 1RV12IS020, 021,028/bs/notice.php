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
if(isset($_POST['issue'])){	

	$msg = $_POST['notice'];
}
$aid=$_SESSION["aid"];

$query_select ="INSERT INTO `anote`(`notice`, `aid`) VALUES ('$msg','$aid')";
		$ret = mysql_query($query_select);
		if($ret == 1)
			header('Location:indexa.php?error=2');
		else
		 echo $query_select;
		  
		 ?>
?>
