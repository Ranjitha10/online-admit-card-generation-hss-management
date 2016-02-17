
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


	$a=$_SESSION["usn"];
	
	
		$query= "DELETE FROM `exam_reg`"; 	
			$result = mysql_query($query); 
		

	if($result==1)
		{
			header('Location:examformad.php');
		}
	else
		{
			echo "There is some problem in inserting record";
			echo $query;
			
		}
?>



