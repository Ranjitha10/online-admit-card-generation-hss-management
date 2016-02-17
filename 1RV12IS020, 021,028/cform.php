
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
	$id=$_POST['id'];
	$pass1=$_POST['pass1'];
	$dept=$_POST['dept'];
	$email=$_POST['email'];
	$phone_no=$_POST['phone_no'];
	$desig=$_POST['desig'];
	$gender=$_POST['gender'];

	$sql = "SELECT `cid` FROM `clogin` ";
	$ret = mysql_query($sql);
	if(!$ret){
		die("couldnot get data");
	}
	while($row = mysql_fetch_assoc($ret)){
		if($row['cid'] == $id){
			header('Location:login.php?error=4');		}
	}
			
		$query_select ="INSERT INTO `counsellor`(`fname`, `mname`, `lname`, `id`, `gender`,`dept`,`phone_no`,`email`,`desig`)
		VALUES ('$fname','$mname','$lname','$id','$gender','$dept','$phone_no','$email','$desig')";
			
		$query2 ="INSERT INTO `clogin`(`cid`,`password`) VALUES ('$id','$pass1')";		
		$result = mysql_query($query_select); 
		$result1 = mysql_query($query2);

	if($result1==1 && $result==1)
		{
			session_start();
					$_SESSION["fname"]=$fname;
					$_SESSION["mname"]= $mname;
					$_SESSION["lname"]= $lname;
					$_SESSION["cid"]= $id;
					
			header('Location:bs/WPindexc.php');
			
		}
	else
		{
			echo "There is some problem in inserting record";
			echo $query_select;
		}
?>

