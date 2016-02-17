<?php 
			$hostname="localhost"; 
			$username="root"; 
			$password="root"; 
			$database="ereges";
  	
			$dbhandle = mysql_connect($hostname, $username, $password) 
  				or die("Unable to connect to MySQL");
            session_start();
			$selected = mysql_select_db("ereges",$dbhandle) 
  				or die("Could not select examples");
			echo "<tr><th>VERIFICATION</th><th>EXAM TYPE</th><th>EXAM MONTH</th><th>SEM</th><th>SUB-1</th><th>SUB-2</th><th>SUB-3</th><th>SUB-4</th><th>SUB-5</th><th>SUB-6</th><th>SUB-7</th><th>SUB-8</th></tr>";
  			$a = $_SESSION["usn"];
  			$sql = "SELECT `checks`,`exam_type`,`month`,`sem` FROM `exam_reg` WHERE susn = '$a'";
			
  			
			$ret1 = mysql_query($sql);
				if(!$ret1){echo "error ".$sql; }
			   	while($row = mysql_fetch_assoc($ret1)){
				echo "<td height='30'>".strtoupper($row['checks'])."</td><td>".strtoupper($row['exam_type'])."</td><td>".$row['month']."</td><td>".$row['sem']."</td>";
				$type1 = $row['exam_type'];
				$sql1 = "SELECT `s1`,`s2`,`s3`,`s4`,`s5`,`s6`,`s7`,`s8` FROM `u_sc` WHERE susn = '$a' AND type = '$type1'";
				$ret2 = mysql_query($sql1);
				if(!$ret2){echo "error ".$sql1; }

				while($row1 = mysql_fetch_assoc($ret2)){
	               echo "<td>".strtoupper($row1['s1'])."</td><td>".strtoupper($row1['s2'])."</td><td>".strtoupper($row1['s3'])."</td><td>".strtoupper($row1['s4'])."</td><td>".strtoupper($row1['s5'])."</td><td>".strtoupper($row1['s6'])."</td><td>".strtoupper($row1['s7'])."</td><td>".strtoupper($row1['s8'])."</td></tr><tr>"; 
  		}
		
  
			}
	?>
?>
