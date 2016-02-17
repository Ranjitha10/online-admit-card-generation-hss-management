<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student-Details</title>
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

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="indexc.php">Counsellor</a> 
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
                        <a class="active-menu"  href="indexc.php"><i class="fa fa-home fa-3x"></i> Home</a>
                    </li>
                     <li>
                        <a  href="hssmngr.php"><i class="fa fa-desktop fa-3x"></i> HSS MANAGEMENT</a>
                    </li>
                   
						  	
                    
                    <li  >
                        <a  href="examform.php"><i class="fa fa-edit fa-3x"></i> EXAM FORMS </a>
                    </li>				
					 <li  >
                        <a  href="../faq.html"><i class="fa fa-table fa-3x"></i> FAQ</a>
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
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
                     <a href="sdetailsc.php"><p class="main-text">Student</p></a>
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
                    <a href="sendmesc.php"><p class="main-text">Send</p></a>
                    <p class="text-muted">Message</p>
                </div>
             </div>
		     </div>
             <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-clipboard"></i>
                </span>
                <div class="text-box" >
                    <a href="viewnote.php"><p class="main-text">View</p>
</a>                    <p class="text-muted">Notice</p>
                </div>
             </div>
		     </div>
             
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                     
                <div class="text-box" >
                    <a href="editproc.php"><p class="main-text">Edit</p>
</a>                    <p class="text-muted">Profile</p>
                </div>
             </div>
		     </div>
                   
			</div>
            <h3>Student Details</h3>
            <table width="1000" >
            <tr><th>NAME</th><th>USN</th><th>SEM</th><th>GENDER</th><th>PHONE-NO</th><th>EMAIL</th></tr>
            <tr>
            <?php 
			$hostname="localhost"; 
			$username="root"; 
			$password="root"; 
			$database="ereges";
  	
			$dbhandle = mysql_connect($hostname, $username, $password) 
  				or die("Unable to connect to MySQL");
  
			$selected = mysql_select_db("ereges",$dbhandle) 
  				or die("Could not select examples");
  			
			
			$b= $_SESSION["cid"];
  			$sql = "SELECT `fname`,`lname`,`usn`,`sem`,`gender`,`email`,`phone_no` FROM `student` WHERE cid = '$b' ";
			
  			
			$ret1 = mysql_query($sql);
				if(!$ret1){echo "error ".$sql; }
			   	while($row = mysql_fetch_assoc($ret1)){
				echo "<td height='30'>".strtoupper($row['fname'])." ".strtoupper($row['lname'])."</td><td>".strtoupper($row['usn'])."</td><td>".
				$row['sem']."</td><td>".strtoupper($row['gender'])."</td><td>".$row['phone_no']."</td><td>".$row['email']."</td><td></tr><tr>";
				
					
		
  
			}
	?>
    
                 <!-- /. ROW  -->
                <hr />                
                </table>
                
                
                
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



