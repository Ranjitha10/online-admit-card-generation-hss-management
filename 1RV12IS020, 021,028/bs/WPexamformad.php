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
		xmlhttp.open('GET','WPeditprofileaajax.php',true);
		xmlhttp.send();
}
function showinfo(){
	var xmlhttp = new XMLHttpRequest();
	var a = document.getElementById("sem1").value;
	var x=parseInt(a);
	var b = document.getElementById("dept1").value;
		
		xmlhttp.onreadystatechange = function(){
		
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				document.getElementById('table').innerHTML = xmlhttp.responseText;
			
		}
		
		xmlhttp.open('GET','WPexamformadajax.php?sem='+x+'&dept='+b,true);
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
				  <td align="center" width="280px" ><a class="active-menu"  href="WPindexa.php"><i class="fa fa-home fa-4x"></i> Home</a></td>
				  <td align="center" width="280px"  bgcolor="cyan" ><a  href="WPexamformad.php"><i class="fa fa-edit fa-3x"></i> EXAM FORMS</a></td>
				  <td align="center" width="280px"><a  href="faq.php"><i class="fa fa-table fa-3x"></i> FAQ</a></td>
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
                     <a href="WPtdetails.php"><p class="main-text">View</p></a>
                    <p class="text-muted">Teachers</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-envelope"></i>
                </span>
                <div class="text-box" >
                    <a href="WPsendmesa.php"><p class="main-text">Send</mark></a>
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
                     <p class="main-text" onclick="editinfo()">Edit</p>
                    <p class="text-muted">Profile</p>
                </div>
             </div>
		     </div>
                   
			</div>
                 <!-- /. ROW  -->
                               
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">           
			<form name="aform" method="post" action="aupdate.php"><br>
			<table id="table1">
			</table>
			
			</form>
			
			
            
			<h3><b>EXAM FORMS</b></h3>
			<p>DEPARTMENT:
            <select name= "dept" id="dept1" ><option></option>
			<option value="is" >IS</option>
    		<option value="CS">CS</option>
    		<option value="EE">EE</option><option value="EC">EC</option><option value="CV">CV</option><option value="im">IM</option><option value="ME">ME</option><option value="BT">BT</option><option value="IT">IT</option><option value="CH">CH</option>
            </select>
			 SEMSTER:
            <select name= "sem" id="sem1" ><option></option>
			<option value="1" >1</option>
    		<option value="2">2</option>
    		<option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option>
            </select>
			<button onclick="showinfo()">Filter</button>
			<form method="post" action="verifyexamformad.php">
            <table width="860" id="table" border="2px" >
            <tr><th>STATUS</th><th>USN</th><th>NAME</th><th>TYPE</th><th>EXAM MONTH</th><th>SEM</th><th>CHALLAN#</th><th>AMOUNT</th><th>VERIFICATION<th></tr>
            <tr>
			
			
			
			 <hr />                
                </table>
                <br><br>
				 
			   <input type="submit" name="submit" value="Issue Admit-Card" align="center">
        			</form>
					</br>
				<form method="post" action="reformad.php">
    				<input type="submit" name="submit" value="Remove Forms" >
        			</form>

               
					
    				
                </p>
		
			
			
               
				
			
         
                 
                    
                    
                    
                   
			
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
