
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
	$pass1=$_POST['pass1'];
	$sem=$_POST['sem'];
	$email=$_POST['email'];
	$phone_no=$_POST['phone_no'];
	$cid=$_POST['cid'];
	$gender=$_POST['gender'];

	$sql = "SELECT `susn` FROM `slogin` ";
	$ret = mysql_query($sql);
	if(!$ret){
		die("couldnot get data");
	}
	while($row = mysql_fetch_assoc($ret)){
		if($row['susn'] == $usn){
			header('Location:login.php?error=3');
					}
	}
			
		$query_select ="INSERT INTO `student`(`fname`, `mname`, `lname`, `usn`, `gender`, `email`,`phone_no`,`cid`,`sem`)
		VALUES ('$fname','$mname','$lname','$usn','$gender','$email','$phone_no','$cid','$sem')";
			
		$query2 ="INSERT INTO `slogin`(`susn`,`password`) VALUES ('$usn','$pass1')";		
		$result = mysql_query($query_select); 
		$result1 = mysql_query($query2);
	
	if($result1==1 && $result==1)
		{
			session_start();
			$_SESSION["fname"]=$fname;
					$_SESSION["mname"]= $mname;
					$_SESSION["lname"]= $lname;
					$_SESSION["usn"]= $usn;
					$_SESSION["cid"]= $cid;
			
			header('Location:bs/WPindex.php');
			
		}
	else
		{
			Echo "There is some problem in inserting record";
			echo $query_select;
		}
	
?>

