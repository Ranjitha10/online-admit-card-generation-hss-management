<?php 
$hostname="localhost"; 
$username="root"; 
$password="root"; 
$database="ereges";
  
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
 session_start();
echo "<tr><th>EVENT NAME</th><th>POSITION</th><th>GRADE</th></tr>"; 
$selected = mysql_select_db("ereges",$dbhandle) 
  or die("Could not select examples");
  $a=$_SESSION["usn"];
  $b=$_SESSION["cid"];
  $sql = "SELECT `susn`,`event_name`,`level`,`grade` FROM `hss_mngr` WHERE susn = '$a' AND cid = '$b'";
  $ret = mysql_query($sql);
  while($row = mysql_fetch_assoc($ret)){
		echo "<td height='30'>".$row['event_name']."</td><td>".$row['level']."</td><td>".$row['grade']."</tr><tr>";
  }
 
	?>
?>
