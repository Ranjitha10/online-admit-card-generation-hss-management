﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home-Student</title>
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
				if($_GET['error']== 2)
				{
					echo "<html><head>";
					echo "<body>";
					echo "<script>function myfunction(){ window.alert('USN REGISTERED FOR EXAM!!');}myfunction();</script>";
                   echo "</body></head></html>";

				}
				if($_GET['error'] == 3)
				{
					echo "<html><head>";
					echo "<body>";
					echo "<script>function myfunction(){ window.alert('HSS-RECORD UPDATED WAIT UNTILL YOUR COUNSELLOR APPROVES');}myfunction();</script>";
				echo "</body></head></html>";
			}
			if($_GET['error'] == 5)
				{
					echo "<html><head>";
					echo "<body>";
					echo "<script>function myfunction(){ window.alert('PROFILE UPDATED');}myfunction();</script>";
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
                <a class="navbar-brand" href="index.php">Student</a> 
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
                        <a class="active-menu"  href="index.php"><i class="fa fa-home fa-3x"></i> Home</a>
                    </li>
                     <li>
                        <a  href="../hssform.php"><i class="fa fa-desktop fa-3x"></i> HSS MANAGEMENT</a>
                    </li>
                   
						  	
                    
                    <li  >
                        <a  href="../examform.php"><i class="fa fa-edit fa-3x"></i> EXAM REGISTRATION </a>
                    </li>				
					 <li  >
                        <a  href="faq.html"><i class="fa fa-table fa-3x"></i> FAQ</a>
                    </li>
					                   
                    
                 	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <?php
					   session_start();
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
                    <i class="fa fa-certificate"></i>
                </span>
                <div class="text-box" >
                     <a href="hsshis.php"><p class="main-text">HSS</p></a>
                    <p class="text-muted">History</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-book"></i>
                </span>
                <div class="text-box" >
                    <a href="examhis.php"><p class="main-text">Exam</p></a>
                    <p class="text-muted">History</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <a href="viewnoti.php"><p class="main-text">View</p>
</a>                    <p class="text-muted">Notifications</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-pencil-square"></i>
                </span>
                <div class="text-box" >
                    <a href="editpro.php"><p class="main-text">Edit</p></a>
                    <p class="text-muted">Profile</p>
                </div>
             </div>
		     </div>
			</div>
                 <!-- /. ROW  -->
                <hr />                
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue">
                    <i class="fa fa-card"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">ADMIT CARDS </p>
                    <p class="text-muted"> 
			<?php 
			$hostname="localhost"; 
			$username="root"; 
			$password="root"; 
			$database="ereges";
  	
			$dbhandle = mysql_connect($hostname, $username, $password) 
  				or die("Unable to connect to MySQL");
  
			$selected = mysql_select_db("ereges",$dbhandle) 
  				or die("Could not select examples");
  			$a = $_SESSION["usn"];
			$b="Verified";
  			$sql = "SELECT `susn`,`sfname`,`smname`,`slname`,`sem`,`exam_type`,`month` FROM `exam_reg` WHERE susn = '$a' AND 			averify='$b'";
			
  			
			$ret1 = mysql_query($sql);
				if(!$ret1){echo "error ".$sql; }
			   	while($row = mysql_fetch_assoc($ret1)){
					echo $row['exam_type']." "." "." ".$row['month'];
			
			}
	?></p>
                    <form method = "post"  action="admit.php">
                    	<input type="submit" name="submit" value="Check Admit Card">
                       </form> 
                    <hr />
                  
                </div>
                
             </div>
             
		     </div>
                 <div  >
                    <p class="main-text">General Notice</p>
                    <p class="text-muted"> 
			<?php 
			$hostname="localhost"; 
			$username="root"; 
			$password="root"; 
			$database="ereges";
  	
			$dbhandle = mysql_connect($hostname, $username, $password) 
  				or die("Unable to connect to MySQL");
  
			$selected = mysql_select_db("ereges",$dbhandle) 
  				or die("Could not select examples");
  			
  			$sql = "SELECT `notice` FROM `anote` ";
			
  			
			$ret1 = mysql_query($sql);
				if(!$ret1){echo "error ".$sql; }
			   	while($row = mysql_fetch_assoc($ret1)){
					echo "<html><head><body><blue>".$row['notice']."<br></blue></body></head></html>";
			
			}
	?></p>
                    
                    <hr />
                   
                </div>    
                    
                    
                    
                   
			
    </div>
                        
        </div>
                      
                 <!-- /. ROW  -->           
    
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
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
/html>
