 <?php 
			$hostname="localhost"; 
			$username="root"; 
			$password="root"; 
			$database="ereges";
  	
			$dbhandle = mysql_connect($hostname, $username, $password) 
  				or die("Unable to connect to MySQL");
  
			$selected = mysql_select_db("ereges",$dbhandle) 
  				or die("Could not select examples");
  			
			echo "<tr><th>NAME</th><th>C-ID</th><th>SEM</th><th>GENDER</th><th>PHONE-NO</th><th>EMAIL</th></tr><tr>";
			
  			$sql = "SELECT `fname`,`lname`,`id`,`dept`,`desig`,`phone_no`,`email` FROM `counsellor`";
			
  			
			$ret1 = mysql_query($sql);
				if(!$ret1){echo "error ".$sql; }
			   	while($row = mysql_fetch_assoc($ret1)){
				echo "<td height='30'>".$row['fname']." ".$row['lname']."</td><td>".strtoupper($row['id'])."</td><td>".
				$row['dept']."</td><td>".$row['desig']."</td><td>".$row['phone_no']."</td><td>".$row['email']."</td><td></tr><tr>";
				
					
		
  
			}
	?>
?>
