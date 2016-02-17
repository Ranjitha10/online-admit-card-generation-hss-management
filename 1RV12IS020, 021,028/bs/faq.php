<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Message</title>
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
	<script>
		function editinfo(){
	var xmlhttp = new XMLHttpRequest();

		xmlhttp.onreadystatechange = function(){
		
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				document.getElementById('table1').innerHTML = xmlhttp.responseText;
			
		}
		xmlhttp.open('GET','WPeditprofilecajax.php',true);
		xmlhttp.send();
}
function showinfo(){
	var xmlhttp = new XMLHttpRequest();

		xmlhttp.onreadystatechange = function(){
		
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				document.getElementById('table').innerHTML = xmlhttp.responseText;
			
		}
		xmlhttp.open('GET','WPsendmescajax.php',true);
		xmlhttp.send();
}
 </script>
   </head>
<body bgcolor="blue">
 <?php
			if(isset($_GET['error']))
			{
				if($_GET['error']== 1)
				{
					echo "<html><head>";
					echo "<body>";
					echo "<script>function myfunction(){ window.alert('Message Sent');}myfunction();</script>";
                   echo "</body></head></html>";

				}
			}
			?>
    <div id="wrapper" bgcolor="blue">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <div class="kushal" style="color:white;
            padding: 15px 50px 5px 50px;
float: left;font-size: 30px;">ONLINE ADMIT CARD AND HSS MANAGEMENT</div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;

font-size: 16px;"><a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                
			
		
        <!-- /. NAV SIDE  -->
       
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
				  <table width="860" border="1px">
				  <tr>
				  <td align="center" width="280px" ><a class="active-menu"  href="WPindexc.php"><i class="fa fa-home fa-4x"></i> Home</a></td>
				  <td align="center" width="280px"><a  href="WPhssmngrc.php"><i class="fa fa-desktop fa-3x"></i> HSS MANAGEMENT</a></td>
				  <td align="center" width="280px"><a  href="WPexamformc.php"><i class="fa fa-edit fa-3x"></i> EXAM REGISTRATION </a></td>
				  <td align="center" width="280px"><a  href="faq.html"><i class="fa fa-table fa-3x"></i> FAQ</a></td>
				  <td align="center" width="280px"><a href="logout.php" ><i class="fa fa-sign-out fa-3x"></i>Logout</a></td></tr>
				  </table>
				  </br>
				  
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                   <i class=" fa fa-user"></i>
                </span>
                <div class="text-box" >
                     <a href="WPsdetailsc.php"><p class="main-text">View</p></a>
                    <p class="text-muted">Students</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-envelope"></i>
                </span>
                <div class="text-box" >
                    <a href="WPsendmesc.php"><p class="main-text">Send</p></a>
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
                    <a href="WPviewnote.php"><p class="main-text"><mark><b>View</b></mark></p>
</a>                    <p class="text-muted">Notice</p>
                </div>
             </div>
		     </div>
             
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-pencil-square"></i>
                </span>
                <div class="text-box" >
                     <p class="main-text" onclick="editinfo()">Edit</p>
                    <p class="text-muted">Profile</p>
                </div>
             </div>
		     </div>
                   
			</div>
                 <!-- /. ROW  -->
                               
               
                             
			<form name="cform" method="post" action="cupdate.php"><br>
			<table id="table1">
			</table>
			
			</form>
		 
                    <p class="main-text">Frequently Asked Questions</p>
                    <p class="text-muted">
                    	Q1.  How to manage HSS?<br>
                    	Ans. <h5>For Student:</h5>
                    			Students are required to submit their certificates manually to their respective counsellors once they have uploaded their event and other details through the HSS management option.
                    		<h5>For Counsellor:</h5>
                    		    Counsellors will recieve the registrations and will have to verify the registrations after the certificates are collected.
                    		    <br></p>
                    <hr />
                    <p class="text-muted">
                    	Q2.  How is Admit-Card generated?<br>
                    	Ans.</p> Students have to register for exam through the form which is verified by the counsellor and then forwaded to the adminitrator who will further verify and issue the admit card which will be recieved by the student in their profile. They can Check admit card and take a printout of it and get the seal of the department.
                    	<hr/>	
                    		<p class="text-muted">
                    	Q2. What to do if there is a change in details of any user?<br>
                    	Ans.</p> Students, Counsellors and Administrator can edit their profile by simply going to the link for edit profile.  
			
	</p>
                    
                    <hr />
                   
                  
		
               
				
			
         
                 
                    
                    
                    
                   
			
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
l>
