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
			$a = $_SESSION["usn"];
  			$sql = "DELETE FROM `student` WHERE usn = '$a'";
			$ret1 = mysql_query($sql);
			if(!$ret1){echo "error ".$sql; }
			$sql = "DELETE FROM `slogin` WHERE susn = '$a'";
			$ret1 = mysql_query($sql);
			if($ret1==1 && $ret==1){echo "error".$sql;}
	        $sql = "DELETE FROM `smsg` WHERE susn = '$a'";
			$ret1 = mysql_query($sql);
			if($ret1==1 && $ret==1){echo "error".$sql;}
			$sql = "DELETE FROM `cmsg` WHERE susn = '$a'";
			$ret1 = mysql_query($sql);
			if($ret1==1 && $ret==1){echo "error".$sql;}
			$sql = "DELETE FROM `hss_mngr` WHERE susn = '$a'";
			$ret1 = mysql_query($sql);
			if($ret1==1 && $ret==1){echo "error".$sql;}
			$sql = "DELETE FROM `exam_reg` WHERE susn = '$a'";
			$ret1 = mysql_query($sql);
			if($ret1==1 && $ret==1){echo "error".$sql;}
			$sql = "DELETE FROM `u_sc` WHERE susn = '$a'";
			$ret1 = mysql_query($sql);
			if($ret1==1 && $ret==1){echo "error".$sql;}


			else{
	                session_destroy();
					header('Location:../login.php?error=5');
  
			}
	?>
?>
