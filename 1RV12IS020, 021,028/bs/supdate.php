
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
	$usn=$_SESSION['usn'];
	$pass1=$_POST['pass1'];
	
	$email=$_POST['email'];
	$phone_no=$_POST['phone_no'];
	$cid=$_POST['cid'];
	$gender=$_POST['gender'];
	
	
		$query= "UPDATE `student` SET `fname` = '$fname',`mname` = '$mname',`lname` = '$lname',`gender` = '$gender',`email` = '$email',`phone_no` = '$phone_no',`cid` = '$cid' WHERE `usn`= '$usn'"; 	
			
		$query2 ="UPDATE `slogin` SET  `password`='$pass1' WHERE `susn` = '$usn' ";		
		$result = mysql_query($query); 
		$result1 = mysql_query($query2);

	if($result1==1 && $result==1)
		{
			$_SESSION["fname"]= $fname;
					$_SESSION["mname"]= $mname;
					$_SESSION["lname"]= $lname;
					
					$_SESSION["cid"]= $cid;
			header('Location:WPindex.php?error=5');
			
		}
	else
		{
			echo "There is some problem in inserting record";
			echo $query;
			echo $query2;
		}
?>



