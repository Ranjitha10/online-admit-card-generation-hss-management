
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


	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$aid=$_SESSION['id'];
	
	$gender=$_POST['gender'];
	
	
		$query= "UPDATE `admin` SET `fname` = '$fname',`mname` = '$mname',`lname` = '$lname',`gender` = '$gender' WHERE `aid`= '$aid'"; 	
			
		$query2 ="UPDATE `alogin` SET  `password`='$pass1' WHERE `aid` = '$aid' ";		
		$result = mysql_query($query); 
		$result1 = mysql_query($query2);

	if($result==1 && $result1==1)
		{
					$_SESSION["fname"]= $fname;
					$_SESSION["mname"]= $mname;
					$_SESSION["lname"]= $lname;
					
					$_SESSION["aid"]= $aid;
			header('Location:WPindexa.php?error=1');
			
		}
	else
		{
			echo "There is some problem in inserting record";
			echo $query;
			echo $query2;
		}
?>



