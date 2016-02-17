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
			$sem = $_GET['sem'];
			
			$dept=$_GET['dept'];
	
			
 			$s= "Verified"; 
			echo " <tr><th>STATUS</th><th>USN</th><th>NAME</th><th>TYPE</th><th>EXAM MONTH</th><th>SEM</th><th>CHALLAN#</th><th>AMOUNT</th><th>VERIFICATION<th></tr><tr>";
  			$sql = "SELECT `averify`,`susn`,`sfname`,`slname`,`exam_type`,`month`,`sem`,`challan_no`,`amount` FROM `exam_reg` WHERE `checks` ='$s' AND `sem` = '$sem' AND `susn` LIKE '1RV__$dept%' ";
			
  			
			$ret1 = mysql_query($sql);
				if(!$ret1){echo "error ".$sql; }
			   		while($row = mysql_fetch_assoc($ret1)){
					echo "<td height='30'>".$row['averify']."</td><td>".$row['susn']."</td><td>".$row['sfname']." ".$row['slname']."</td><td>".$row['exam_type']."</td><td>".$row['month']."</td><td>".$row['sem']."</td><td>".$row['challan_no']."</td><td>".$row['amount']."</td><td><input type='checkbox' name='check[]' value='$row[susn]'></td></tr><tr>";
					
		
  
			}
	?>
?>
