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
			$x = $_GET["sem"];
			$b= $_SESSION["cid"];
			
  			$sql = "SELECT `fname`,`lname`,`usn`,`sem`,`gender`,`email`,`phone_no` FROM `student` WHERE cid = '$b' AND sem = '$x' ";
			
  			echo "<tr><th>NAME</th><th>USN</th><th>SEM</th><th>GENDER</th><th>PHONE-NO</th><th>EMAIL</th></tr>";
			$ret1 = mysql_query($sql);
				if(!$ret1){echo "error ".$sql; }
			   	while($row = mysql_fetch_assoc($ret1)){
				echo "<td height='30'>".strtoupper($row['fname'])." ".strtoupper($row['lname'])."</td><td>".strtoupper($row['usn'])."</td><td>".
				$row['sem']."</td><td>".strtoupper($row['gender'])."</td><td>".$row['phone_no']."</td><td>".$row['email']."</td><td></tr><tr>";
				
					
		
  
			}
	?>
?>
