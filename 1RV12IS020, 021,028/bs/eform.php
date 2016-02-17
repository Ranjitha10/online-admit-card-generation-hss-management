
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
	$usn=$_POST['usn'];
	$faname=$_POST['faname'];
	$s1=$_POST['s1'];
	$s2=$_POST['s2'];
	$s3=$_POST['s3'];
	$s4=$_POST['s4'];
	$s5=$_POST['s5'];
	$s6=$_POST['s6'];
	$s7=$_POST['s7'];
	$s8=$_POST['s8'];
	$month=$_POST['month'];
	$sem = $_POST['sem'];
	$challan=$_POST['challan'];
	$amount=$_POST['amount'];
	$type=$_POST['type'];
	$address=$_POST['address'];
	$cid = $_SESSION["cid"];
				
		$query_select ="INSERT INTO `exam_reg`(`susn`, `fathers name`, `Address`, `sfname`,`smname`,`slname`,`sem`, `challan_no`,`amount`,`exam_type`,`month`,`cid`) VALUES ('$usn','$faname','$address','$fname','$mname','$lname','$sem','$challan','$amount','$type','$month','$cid')";
			
		$query2 ="INSERT INTO `u_sc`(`susn`,`type`,`s1`,`s2`,`s3`,`s4`,`s5`,`s6`,`s7`,`s8`) VALUES ('$usn','$type','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8')";
		
		$result = mysql_query($query_select); 
		$result1 = mysql_query($query2);
	


	if($result==1 && $result1==1){
			header('Location:WPindex.php?error=2');
	}
	else
	{
		echo $query_select;
	
	}
		
	
?>



