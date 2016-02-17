<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Messages</title>
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
    <script type="text/javascript">
    function showinfo(){
	var xmlhttp = new XMLHttpRequest();

		xmlhttp.onreadystatechange = function(){
		
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				document.getElementById('table').innerHTML = xmlhttp.responseText;
			
		}
		xmlhttp.open('GET','WPviewnotistajax.php',true);
		xmlhttp.send();
}
function editinfo(){
	var x = document.getElementsByClassName("ex");
	x[0].innerHTML = "";
	var xmlhttp = new XMLHttpRequest();

		xmlhttp.onreadystatechange = function(){
		
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				document.getElementById('table1').innerHTML = xmlhttp.responseText;
			
		}
		xmlhttp.open('GET','WPeditprofileajax.php',true);
		xmlhttp.send();
}
 
 
     </script>
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
				  <td align="center" width="280px" ><a class="active-menu"  href="WPindex.php"><i class="fa fa-home fa-4x"></i> Home</a></td>
				  <td align="center" width="280px"><a  href="WPhssform.php"><i class="fa fa-desktop fa-3x"></i> HSS MANAGEMENT</a></td>
				  <td align="center" width="280px"><a  href="WPexamform.php"><i class="fa fa-edit fa-3x"></i> EXAM REGISTRATION </a></td>
				  <td align="center" width="280px"><a  href="faq.php"><i class="fa fa-table fa-3x"></i> FAQ</a></td>
				  <td align="center" width="280px"><a href="logout.php" ><i class="fa fa-sign-out fa-3x"></i>Logout</a></td></tr>
				  </table>
				  
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-certificate"></i>
                </span>
                <div class="text-box" >
                     <a href="WPhsshis.php"><p class="main-text">HSS</p></a>
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
                    <a href="WPexamhis.php"><p class="main-text">Exam</p></a>
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
                    <a href="WPviewnoti.php"><p class="main-text"><b><i><mark>View</p>
</a>                    <p class="text-muted">Messages</p></mark></i></b>
                </div>
             </div>
		     </div>
			 
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-pencil-square"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text" onclick="editinfo()">Edit</p>
                    <p class="text-muted">Profile</p>
                </div>
             </div>
		     </div>
			</div>
			<form name="sform" method="post" action="supdate.php"><br>
			<table id="table1">
			</table>
			</form>
            <div class = "karan">
			<h3>MESSAGES</h3>
            	<h4><strong>Message From Counsellor</strong></h4>
                <button onclick="showinfo()">See All Messages</button><br/>
				<p id= "table"></p>
            <br>
			<form action="dcmsg.php" method="post">
   	<input type="submit" value="DELETE MESSAGES" name="submit">
	<hr/>
    </form>
			</div>
		<div class="ex">	
			
	
    <h3>ANY DOUBTS??? ASK YOUR COUNSELLOR</h3>
    <br>
    <form name="eform" method="post" action="smsg.php">
    <textarea name="msg" rows="6" columns="600" placeholder="Type Your Query Here" required></textarea>
   <br> <input name="submit" type="submit" name="submit"  value="Submit" align="center" />
     </form>
</div>
    
                 <!-- /. ROW  -->
                <hr />      
            <tr>
            
	
                 <!-- /. ROW  -->
                <hr /> 
			
                
				<hr/>
                <p>
	
                
                
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        
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
