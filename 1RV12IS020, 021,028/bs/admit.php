 <?php 
			$hostname="localhost"; 
			$username="root"; 
			$password="root"; 
			$database="ereges";
  			session_start();
			echo "<html><head></head><body><center><h2><strong>R.V. COLLEGE OF ENGINEERING, BANGALORE-59</strong></h2><h4>(Autonomous Instituion Affiliated to VTU,Belgaum)</h4>";
			echo "<h3><strong>ACKNOWLEDGEMENT FOR BE/B.ARCH PROGRAM</strong></h3></center>";
			echo "<div></div></body></html>";
			$dbhandle = mysql_connect($hostname, $username, $password) 
  				or die("Unable to connect to MySQL");
  
			$selected = mysql_select_db("ereges",$dbhandle) 
  				or die("Could not select examples");
  			$a = $_SESSION["usn"];
			$b = "Verified";
  			$sql = "SELECT `susn`,`sfname`,`smname`,`slname`,`sem`,`exam_type`,`month` FROM `exam_reg` WHERE susn = '$a' AND 			averify='$b'";
  			echo "<center><table width='600'>";
			$ret1 = mysql_query($sql);
				if(!$ret1){echo "error".$sql; }
			   	while($row = mysql_fetch_assoc($ret1)){
					
					echo "<tr><td>USN</td><td>:</td><td>".strtoupper($row['susn'])."</td><td>EXAM-TYPE</td><td>:</td><td>".$row['exam_type']."</td></tr>
					<tr><td>NAME</td><td>:</td><td>".strtoupper($row['sfname'])." ".strtoupper($row['smname'])." ".strtoupper($row['slname'])."</td><td>SEM</td><td>:</td><td>"
					.$row['sem']."</td></tr><tr><td>EXAM MONTH</td><td>:</td><td>".$row['month']."</td></tr>"; 
					
					
				$type1 = $row['exam_type'];
				$sql1 = "SELECT `s1`,`s2`,`s3`,`s4`,`s5`,`s6`,`s7`,`s8` FROM `u_sc` WHERE susn = '$a' AND type = '$type1'";
				$ret2 = mysql_query($sql1);
				if(!$ret2){echo "error ".$sql1; }
			
				while($row1 = mysql_fetch_assoc($ret2)){
	               echo "<tr><td>SUBJECT-1</td><td>:</td><td>".strtoupper($row1['s1'])."</td><td>SUBJECT-2</td><td>:</td><td>".strtoupper($row1['s2'])."</td></tr><tr><td>SUBJECT-3</td><td>:</td><td>".strtoupper($row1['s3'])."</td><td>SUBJECT-4</td><td>:</td><td>".strtoupper($row1['s4'])."</td></tr><tr><td>SUBJECT-5</td><td>:</td><td>".strtoupper($row1['s5'])."</td><td>SUBJECT-6</td><td>:</td><td>".strtoupper($row1['s6'])."</td></tr><tr><td>SUBJECT-7</td><td>:</td><td>".strtoupper($row1['s7'])."</td><td>SUBJECT-8</td><td>:</td><td>".strtoupper($row1['s8'])."</td></tr><hr />"; 
				   
  		}
	}
	echo "</center></table><br>";
	echo "<hr />";
	echo "<br><br><br><br><center>OFFICE STAMP</center><br><br>";
	echo "<a href ='index.php'><strong> HOME </strong></a><br><br><br><a href=''><strong>PRINT</strong>";
	?>
?>
