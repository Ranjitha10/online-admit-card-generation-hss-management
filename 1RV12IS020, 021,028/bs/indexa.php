<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home-Administrator</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php
			if(isset($_GET['error']))
			{
				if($_GET['error']== 1)
				{
					echo "<html><head>";
					echo "<body>";
					echo "<script>function myfunction(){ window.alert('PROFILE UPDATED');}myfunction();</script>";
                   echo "</body></head></html>";

				}
				if($_GET['error']== 2)
				{
					echo "<html><head>";
					echo "<body>";
					echo "<script>function myfunction(){ window.alert('NOTICE ISSUED');}myfunction();</script>";
                   echo "</body></head></html>";

				}
			}
?>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="indexca.php">ADMIN</a> 
            </div>
            <div style="color:white;
            padding: 15px 50px 5px 50px;
float: left;font-size: 30px;">ONLINE ADMIT CARD AND HSS MANAGEMENT</div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;

font-size: 16px;"><a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="indexa.php"><i class="fa fa-home fa-3x"></i> Home</a>
                    </li>
                    
						  	
                    
                    <li  >
                        <a  href="examformad.php"><i class="fa fa-edit fa-3x"></i> EXAM FORMS </a>
                    </li>				
					 <li  >
                        <a  href="faq.html"><i class="fa fa-table fa-3x"></i> FAQ</a>
                    </li>
					                   
                    
                 	
                </ul>
               
            </div>
            
        </nav>  
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <?php
					   session_start();
					   $sub=$_SESSION["sub"];
                        echo "Welcome ".$_SESSION["fname"]." Love to see you back";
						?>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                   <i class=" fa icon-group list-n-fa-4"></i>
                </span>
                <div class="text-box" >
                     <a href="tdetails.php"><p class="main-text">Teacher</p></a>
                    <p class="text-muted">Details</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-envelope"></i>
                </span>
                <div class="text-box" >
                    <a href="sendmesa.php"><p class="main-text">Send</p></a>
                    <p class="text-muted">Message</p>
                </div>
             </div>
		     </div>
             
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-pencil-square"></i>
                </span>
                <div class="text-box" >
                    <a href="editproa.php"><p class="main-text">Edit</p>
</a>                    <p class="text-muted">Profile</p>
                </div>
             </div>
		     </div>
                   
			</div>
           
                 <!-- /. ROW  -->

              
                    <hr />
              		
                    <div class="text-box" >
                    
                    <p class="main-text">ISSUE NOTICE</p> 
                   
                    <p class="text-muted"> 
			            <form method = "post"  action="notice.php">
                    	<textarea name="notice" rows="6" columns="7000" placeholder="NOTICE"></textarea><br>
                        <input type="submit" name="issue" value="ISSUE">
                       </form>
                     </p> 
                
                 <!-- /. ROW  -->
				
                <h4><b>VIEW NO. OF REGISTRATIONS</b></h4>
               <form method="POST" action="indexa.php">SUBJECT:
                	<select name= "subject" ><option></option>
			<option >12EE61</option>
			<option >12EE62</option>
			<option >12EE63</option>
			<option >12EE64</option>
			<option >11EE51</option>
			<option >11EE52</option>
			<option >11EE53</option>
			<option >11EE54</option>
			<option >12IS61</option>
			<option >12IS62</option>
    		<option>12IS63</option>
    		<option>12IS64</option><option>12IS65</option><option>11IS52</option><option>11IS53</option><option>11IS54</option><option>11IS51</option><option>12HSM61</option><option>11HS151</option>
            </select>
            	<input type="submit" name="submit" value="SEE">
                </form>
               <table width="500" >
            <tr><th>Subjects</th><th>No. Of Registrations</th><tr>
            
             <?php 
			$hostname="localhost"; 
			$username="root"; 
			$password="root"; 
			$database="ereges";
  	
			$dbhandle = mysql_connect($hostname, $username, $password) 
  				or die("Unable to connect to MySQL");
  
			$selected = mysql_select_db("ereges",$dbhandle) 
  				or die("Could not select examples");
  			if(isset($_POST['submit']))
				$sub=$_POST['subject'];
			$sql = "SELECT count(susn) FROM `u_sc` WHERE s1 = '$sub' OR s2 = '$sub' OR s3 = '$sub' OR s4 = '$sub' OR s5 = '$sub' OR s6 = '$sub' OR s7 = '$sub' OR s8 = '$sub' ";
			
  			
			$ret1 = mysql_query($sql);
				if(!$ret1){echo "error ".$sql; }
			   	while($row = mysql_fetch_assoc($ret1)){
				echo "<td height='30'>".$sub."</td><td>".$row['count(susn)']."</td><tr>";}
				?>
                    <hr />
                  
                </div>
                </div>
             </div>
		     </div>
                    
                    
                    
                    
			
    </div>
                        
        </div>
                      
                 <!-- /. ROW  -->           
    
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
                 <!-- /. ROW  -->
               
                   
                </div>
             </div>
		     </div>
                    
                    
                    
                    
                     
			
  
            
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
l>
