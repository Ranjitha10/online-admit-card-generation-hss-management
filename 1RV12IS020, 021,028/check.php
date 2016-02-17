<?php 
$hostname="localhost"; 
$username="root"; 
$password="root"; 
$database="ereges";
  
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
  
$selected = mysql_select_db("ereges",$dbhandle) 
  or die("Could not select examples");


if(isset($_POST['commit'])){	
    
	$type = $_POST['type'];
	
	$usn=$_POST['usn'];
	$pass1=$_POST['pass1'];
}
$x=0;
if(!strcmp($type,"Student"))
{
	$sql = "SELECT * FROM `slogin`";
	$ret = mysql_query($sql);
	if(!$ret){
		die("couldnot get data");
	}
	
	while($row = mysql_fetch_assoc($ret)){
		if($row['susn'] == $usn){
			$x=1;
			if($row['password'] == $pass1){
				$sql2 = "SELECT `fname`,`mname`,`lname`,`cid` FROM `student` WHERE usn = '$usn'";
				$ret1= mysql_query($sql2);
				if(!$ret1){ die("could not get data");}
				session_start();
					while($row1 = mysql_fetch_assoc($ret1)){
					$_SESSION["fname"]= $row1['fname'];
					$_SESSION["mname"]= $row1['mname'];
					$_SESSION["lname"]= $row1['lname'];
					$_SESSION["usn"]= $usn;
					$_SESSION["cid"]= $row1['cid'];
				}
				
				header('LOCATION: bs/WPindex.php');
				
			}
			else
				header('Location: WPlogin.php?error=1');
		}
	}
	if($x == 0){
	 			header('Location:WPlogin.php?error=2');
	 
	}
}
if(!strcmp($type,"Counsellor"))
{
	$sql = "SELECT * FROM `clogin`";
	$ret = mysql_query($sql);
	if(!$ret){
		die("couldnot get data");
	}
	
	while($row = mysql_fetch_assoc($ret)){
		if($row['cid'] == $usn){
			$x=1;
			if($row['password'] == $pass1){
				$sql3 = "SELECT `fname`,`mname`,`lname` FROM `counsellor` WHERE id = '$usn'";
				$ret1= mysql_query($sql3);
				if(!$ret1){ echo $sql3;die("");}
				session_start();
					while($row1 = mysql_fetch_assoc($ret1)){
					$_SESSION["fname"]= $row1['fname'];
					$_SESSION["mname"]= $row1['mname'];
					$_SESSION["lname"]= $row1['lname'];
					$_SESSION["cid"]= $usn;
				}
				
				header('LOCATION: bs/WPindexc.php');
				
			}
			else
				header('Location: WPlogin.php?error=1');
		}
	}
	if($x == 0){
	 			header('Location:WPlogin.php?error=6');
	 
	}
}
if(!strcmp($type,"Admin"))
{
	$sql = "SELECT * FROM `alogin`";
	$ret = mysql_query($sql);
	if(!$ret){
		die("couldnot get data");
	}
	
	while($row = mysql_fetch_assoc($ret)){
		if($row['aid'] == $usn){
			$x=1;
			if($row['password'] == $pass1){
				$sql2 = "SELECT `fname`,`mname`,`lname` FROM `admin` WHERE aid = '$usn'";
				$ret1= mysql_query($sql2);
				if(!$ret1){ die("could not get data");}
				session_start();
					while($row1 = mysql_fetch_assoc($ret1)){
					$_SESSION["fname"]= $row1['fname'];
					$_SESSION["mname"]= $row1['mname'];
					$_SESSION["lname"]= $row1['lname'];
					
					$_SESSION["aid"]= $usn;
				}
				$_SESSION["sub"]="";
				header('LOCATION: bs/WPindexa.php');
				
			}
			else
				header('Location: WPlogin.php?error=1');
		}
	}
	if($x == 0){
	 			header('Location:WPlogin.php?error=6');
	 
	}
}	

?>
