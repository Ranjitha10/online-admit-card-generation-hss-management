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
  $b=$_SESSION["cid"];
  $sql = "SELECT `susn`,`sfname`,`slname`,`event_name`,`level`,`sem`,`grade` FROM `hss_mngr` WHERE cid = '$b'";
  $ret = mysql_query($sql);
  echo "<tr><th>USN</th><th>NAME</th><th>EVENT</th><th>ROLE</th><th>SEM</th><th>STATUS</th><th>VERIFICATION</th></tr><tr>";
  while($row = mysql_fetch_assoc($ret)){
	  	
	  	
		echo "<td height='30'>".$row['susn']."</td><td>".$row['sfname']." ".$row['slname']."</td><td>".$row['event_name']."</td><td>".$row['level']."</td><td>".$row['sem']."</td><td>".$row['grade']."</td><td><input type='checkbox' name='check[]' value='$row[susn]'></td></tr><tr>";
		
			
  }
 
 ?>
?>
