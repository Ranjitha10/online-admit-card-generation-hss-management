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
			$i=1;
			echo "<tr><th>SNo.</th><th>Message</th></tr><tr>";
			$b = $_SESSION["cid"];
  			$sql = "SELECT `amsg` FROM `amsg` WHERE cid = '$b'";
			
  			
			$ret = mysql_query($sql);
				if(!$ret){echo "error ".$sql; }
			   	while($row = mysql_fetch_assoc($ret)){
				echo "<td>".$i++."</td><td>".$row['amsg']."</td><tr>";
				}
	?>
?>
