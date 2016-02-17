<?php 
			$hostname="localhost"; 
			$username="root"; 
			$password="root"; 
			$database="ereges";
  	         session_start();
			$dbhandle = mysql_connect($hostname, $username, $password) 
  				or die("Unable to connect to MySQL");
  
			$selected = mysql_select_db("ereges",$dbhandle) 
  				or die("Could not select examples");
				
  			$a = $_SESSION["cid"];
  			$sql = "SELECT `checks`,`susn`,`exam_type`,`month`,`sem` FROM `exam_reg` WHERE cid = '$a'";
			echo " <tr><th>STATUS</th><th>USN</th><th>TYPE</th><th>MONTH</th><th>SEM</th><th>SUB-1</th><th>SUB-2</th><th>SUB-3</th><th>SUB-4</th><th>SUB-5</th><th>SUB-6</th><th>SUB-7</th><th>SUB-8</th><th>VERIFY</th></tr>";
				    
  				$ret = mysql_query($sql);
				if(!$ret){echo "error ".$sql; }
			   	while($row = mysql_fetch_assoc($ret)){
					
					
					$b = $row['susn'];
					$type1 = $row['exam_type'];
					$sql1 = "SELECT `s1`,`s2`,`s3`,`s4`,`s5`,`s6`,`s7`,`s8` FROM `u_sc` WHERE susn = '$b' AND `type` = '$type1' ";
					$ret1= mysql_query($sql1);
					if(!$ret1){echo "error ".$sql1; }
					if (mysql_num_rows($ret1) != 0)
					{
						echo "<td height='30'>".strtoupper($row['checks'])."</td><td>".strtoupper($row['susn'])."</td><td>".strtoupper($row['exam_type'])."</td><td>".strtoupper($row['month'])."</td><td>"
						.strtoupper($row['sem'])."</td>";
						while($row1 = mysql_fetch_assoc($ret1)){
								echo "<td>".strtoupper($row1['s1'])."</td><td>".strtoupper($row1['s2'])."</td><td>".strtoupper($row1['s3'])."</td><td>".strtoupper($row1['s4'])."</td><td>".strtoupper($row1['s5'])."</td><td>".strtoupper($row1['s6'])."</td><td>".strtoupper($row1['s7'])."</td><td>".strtoupper($row1['s8'])."</td><td><input type='checkbox' name='check[]' value='$row[susn]'></td></tr><tr>"; 
						}
					
					
					}
					
			            
		
  
			}
			?>
?>
