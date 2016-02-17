
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
	$aid=$_POST['aid'];
	$pass1=$_POST['pass1'];
	$gender=$_POST['gender'];
	
	$sql = "SELECT `aid` FROM `alogin` ";
	$ret = mysql_query($sql);
	if(!$ret){
		die("couldnot get data");
	}
	while($row = mysql_fetch_assoc($ret)){
		if($row['aid'] == $aid){
			header('Location:login.php?error=4');
					}
	}
			
		$query_select ="INSERT INTO `admin`(`fname`, `mname`, `lname`, `aid`, `gender`)
		VALUES ('$fname','$mname','$lname','$aid','$gender')";
			
		$query2 ="INSERT INTO `alogin`(`aid`,`password`) VALUES ('$aid','$pass1')";		
		$result = mysql_query($query_select); 
		$result1 = mysql_query($query2);

	If($result1==1 && $result==1)
		{
					session_start();
			        $_SESSION["fname"]= $fname;
					$_SESSION["mname"]= $mname;
					$_SESSION["lname"]= $lname;
					$_SESSION["aid"]= $aid;
					$_SESSION["sub"]="";
			header('Location:bs/indexa.php');
			
		}
	Else
		{
			Echo "There is some problem in inserting record";
			echo $query_select;
		}
?>

