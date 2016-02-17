<?php 
$hostname="localhost"; 
$username="root"; 
$password="root"; 
$database="ereges";
  
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
  
$selected = mysql_select_db("ereges",$dbhandle) 
  or die("Could not select examples");



	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$usn=$_POST['usn'];
	$sem=$_POST['sem'];
	$grade="NA";	
	$event=$_POST['event'];
	$level=$_POST['level'];
	session_start();
	$a = $_SESSION['cid'];
$query_select ="INSERT INTO `hss_mngr`(`event_name`, `susn`, `sfname`, `smname`, `slname`, `level`,`sem`,`grade`,`cid`)
		VALUES ('$event','$usn','$fname','$mname','$lname','$level','$sem','$grade','$a')";
		$result = mysql_query($query_select); 
		

	if($result == 1)
		{
			header('Location:WPindex.php?error=3');
			
		}
	else
		{
			echo "There is some problem in inserting record";
			
		}
?>
?>
