
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
	$id=$_SESSION['cid'];
	$pass1=$_POST['pass1'];
	$dept=$_POST['dept'];
	$email=$_POST['email'];
	$phone_no=$_POST['phone_no'];
	$desig=$_POST['desig'];
	$gender=$_POST['gender'];
	
	
		$query= "UPDATE `counsellor` SET `fname` = '$fname',`mname` = '$mname',`lname` = '$lname',`gender` = '$gender',`email` = '$email',`phone_no` = '$phone_no' WHERE `id`= '$id'"; 	
			
		$query2 ="UPDATE `clogin` SET  `password`='$pass1' WHERE `cid` = '$id' ";		
		$result = mysql_query($query); 
		$result1 = mysql_query($query2);

	if($result1==1 && $result==1)
		{
			$_SESSION["fname"]= $fname;
					$_SESSION["mname"]= $mname;
					$_SESSION["lname"]= $lname;
					
					
			header('Location:WPindexc.php?error=1');
			
		}
	else
		{
			echo "There is some problem in inserting record";
			echo $query;
			echo $query2;
		}
?>



