<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EXAM-FORMS</title>
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
                <a class="navbar-brand" href="indexa.php">Admin</a> 
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
                        <a   href="indexa.php"><i class="fa fa-home fa-3x"></i> Home</a>
                    </li>
                     <li>
                        <a class="active-menu"  href="examformad.php"><i class="fa fa-desktop fa-3x"></i> EXAM FORMS</a>
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
                    <i class="fa fa-certificate"></i>
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
                    <i class="fa fa-book"></i>
                </span>
                <div class="text-box" >
                    <a href="sendmesa.php"><p class="main-text">Send</p></a>
                    <p class="text-muted">Message</p>
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
            <h4>FILTER</h4>
            <form name="filter" method="post" action="filter.php"><br>
           <p>DEPARTMENT:
            <select name= "dept" ><option></option>
			<option >IS</option>
    		<option>CS</option>
    		<option>EE</option><option>EC</option><option>CV</option><option>IM</option><option>ME</option><option>BT</option><option>IT</option>							            <option>CH</option>
            </select>
             SEMSTER:
            <select name= "sem" ><option></option>
			<option >1</option>
    		<option>2</option>
    		<option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option>
            </select>
            <input type="submit" name="submit"  value="Submit" align="center" />
            </form></p>
            <form method="post" action="verifyexamformad.php">
			<h3><b>EXAM FORMS</b></h3>
            <table width="1000" >
            <tr><th>STATUS</th><th>USN</th><th>NAME</th><th>TYPE</th><th>EXAM MONTH</th><th>SEM</th><th>CHALLAN#</th><th>AMOUNT</th><th>VERIFICATION<th></tr>
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
 			$s= "Verified"; 			
  			$sql = "SELECT `averify`,`susn`,`sfname`,`slname`,`exam_type`,`month`,`sem`,`challan_no`,`amount` FROM `exam_reg` WHERE `checks` ='$s' ";
			
  			
			$ret1 = mysql_query($sql);
				if(!$ret1){echo "error ".$sql; }
			   		while($row = mysql_fetch_assoc($ret1)){
					echo "<td height='30'>".$row['averify']."</td><td>".$row['susn']."</td><td>".$row['sfname']." ".$row['slname']."</td><td>".$row['exam_type']."</td><td>".$row['month']."</td><td>".$row['sem']."</td><td>".$row['challan_no']."</td><td>".$row['amount']."</td><td><input type='checkbox' name='check[]' value='$row[susn]'></td></tr><tr>";
					
		
  
			}
	?>
                 <!-- /. ROW  -->
                <hr />                
                </table>
                <br><br>
				 <p align="center"><strong>VERIFIED ALL?</strong>
			   <input type="submit" name="submit" value="VERIFY" align="center">
        			</form>
					</br>
				<form method="post" action="reformad.php">
    				<input type="submit" name="submit" value="Remove Forms" >
        			</form>

               
					
    				
                </p>
                
                
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
l>
