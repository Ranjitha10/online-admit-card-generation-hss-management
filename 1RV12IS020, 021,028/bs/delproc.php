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
			$a = $_SESSION["cid"];
  			$sql = "DELETE FROM `counsellor` WHERE id = '$a'";
			$ret1 = mysql_query($sql);
			if(!$ret1){echo "error ".$sql; }
			$sql = "DELETE FROM `clogin` WHERE cid = '$a'";
			$ret1 = mysql_query($sql);
			if($ret1==1 && $ret==1){echo "error".$sql;}
	        $sql = "DELETE FROM `smsg` WHERE cid = '$a'";
			$ret1 = mysql_query($sql);
			if($ret1==1 && $ret==1){echo "error".$sql;}
			$sql = "DELETE FROM `cmsg` WHERE cid = '$a'";
			$ret1 = mysql_query($sql);
			if($ret1==1 && $ret==1){echo "error".$sql;}
						
			else{
	                session_destroy();
					header('Location:../login.php?error=5');
  
			}
	?>
?>
