<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Refistration Form</title>
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
	var xmlhttp = new XMLHttpRequest();
    document.getElementById("content").innerHTML="";
		xmlhttp.onreadystatechange = function(){
		
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				document.getElementById('table1').innerHTML = xmlhttp.responseText;
			
		}
		xmlhttp.open('GET','WPeditprofileajax.php',true);
		xmlhttp.send();
}
function predict(){
	var str = document.getElementById('usn1').value;
	
	if(str.search("12is") != -1)
	{
		
	  var x = document.getElementById("sem1").value;
	  var a = parseInt(x);
	 
	  var d = new Date();
	  var n = d.getFullYear();
	  n = n - 2000;
	  var c = (n-12)+1;
	  if(x <= c*2 && x > (c-1)*2) 
		{
			if(a == 7)
			{
			var y = document.getElementById("ss1");
			y.value="12IS71";
			var y = document.getElementById("ss2");
			y.value="12IS72";
			var y = document.getElementById("ss3");
			y.value="12IS73";
			var y = document.getElementById("ss4");
			y.value="12IS74";
			var y = document.getElementById("ss5");
			y.value="12HSS71";
			var y = document.getElementById("ss6");
			y.value="12IS7E4";
		}
		
	}
	}
	else if(str.search("12ee") != -1)
	{
		
	  var x = document.getElementById("sem1").value;
	  var a = parseInt(x);
	 
	  var d = new Date();
	  var n = d.getFullYear();
	  n = n - 2000;
	  var c = (n-12)+1;
	  if(x <= c*2 && x > (c-1)*2) 
		{
			if(a == 7)
			{
			var y = document.getElementById("ss1");
			y.value="12EE71";
			var y = document.getElementById("ss2");
			y.value="12EE72";
			var y = document.getElementById("ss3");
			y.value="12EE73";
			var y = document.getElementById("ss4");
			y.value="12EE74";
			var y = document.getElementById("ss5");
			y.value="12HSS71";
			var y = document.getElementById("ss6");
			y.value="12EE7E4";
		}
		
	}
	}
		else if(str.search("15is") != -1)
	{
		
	  var x = document.getElementById("sem1").value;
	  var a = parseInt(x);
	 
	  var d = new Date();
	  var n = d.getFullYear();
	  n = n - 2000;
	  var c = (n-15)+1;
	  if(x <= c*2 && x > (c-1)*2) 
		{
			if(a == 1)
			{
			var y = document.getElementById("ss1");
			y.value="15IS11";
			var y = document.getElementById("ss2");
			y.value="15IS12";
			var y = document.getElementById("ss3");
			y.value="15IS13";
			var y = document.getElementById("ss4");
			y.value="15IS14";
			var y = document.getElementById("ss5");
			y.value="15HSS11";
			var y = document.getElementById("ss6");
			y.value="15IS1E4";
		}
			if(a == 2)
			{
				var y = document.getElementById("ss1");
			y.value="15IS21";
			var y = document.getElementById("ss2");
			y.value="15IS22";
			var y = document.getElementById("ss3");
			y.value="15IS23";
			var y = document.getElementById("ss4");
			y.value="15IS24";
			var y = document.getElementById("ss5");
			y.value="15HSS21";
			var y = document.getElementById("ss6");
			y.value="15IS2E4";
			}	
		
	}
	}
	else if(str.search("13is") != -1)
	{
		
	  var x = document.getElementById("sem1").value;
	  var a = parseInt(x);
	 
	  var d = new Date();
	  var n = d.getFullYear();
	  n = n - 2000;
	  var c = (n-13)+1;
	  if(x <= c*2 && x > (c-1)*2) 
		{
			if(a == 5)
			{
			var y = document.getElementById("ss1");
			y.value="13IS51";
			var y = document.getElementById("ss2");
			y.value="13IS52";
			var y = document.getElementById("ss3");
			y.value="13IS53";
			var y = document.getElementById("ss4");
			y.value="13IS54";
			var y = document.getElementById("ss5");
			y.value="13HSS51";
			var y = document.getElementById("ss6");
			y.value="13IS5E4";
		}
			if(a == 6)
			{
				var y = document.getElementById("ss1");
			y.value="13IS61";
			var y = document.getElementById("ss2");
			y.value="13IS62";
			var y = document.getElementById("ss3");
			y.value="13IS63";
			var y = document.getElementById("ss4");
			y.value="13IS64";
			var y = document.getElementById("ss5");
			y.value="13HSS61";
			var y = document.getElementById("ss6");
			y.value="13IS6E4";
			}	
		
	}
	}
	else if(str.search("14is") != -1)
	{
		
	  var x = document.getElementById("sem1").value;
	  var a = parseInt(x);
	 
	  var d = new Date();
	  var n = d.getFullYear();
	  n = n - 2000;
	  var c = (n-14)+1;
	
	  if(x <= c*2 && x > (c-1)*2) 
		{
			if(a == 3)
			{
			var y = document.getElementById("ss1");
			y.value="14IS31";
			var y = document.getElementById("ss2");
			y.value="14IS32";
			var y = document.getElementById("ss3");
			y.value="14IS33";
			var y = document.getElementById("ss4");
			y.value="14IS34";
			var y = document.getElementById("ss5");
			y.value="14HSS31";
			var y = document.getElementById("ss6");
			y.value="14IS3E4";
		}
		if(a == 4)
			{
			var y = document.getElementById("ss1");
			y.value="14IS41";
			var y = document.getElementById("ss2");
			y.value="14IS42";
			var y = document.getElementById("ss3");
			y.value="14IS43";
			var y = document.getElementById("ss4");
			y.value="14IS44";
			var y = document.getElementById("ss5");
			y.value="14HSS41";
			var y = document.getElementById("ss6");
			y.value="14ISW4E4";
		}
		
	}
	
	
}
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
				  <td align="center" width="280px" bgcolor = "cyan"><a  href="WPexamform.php"><i class="fa fa-edit fa-3x"></i> EXAM REGISTRATION </a></td>
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
                    <a href="WPviewnoti.php"><p class="main-text">View</p>
</a>                    <p class="text-muted">Messages</p>
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
           <div id="content">
<div id="header">


<center><h2 style="color:white;">Exam-Registration Form</h2></center>


</div>
<form name="eform" method="post" action="eform.php"><br>
<table align="center">
<tr>
<td width="85" height="30">First Name <td width="15">:<td height="30"> <input type="text" name="fname" size="20" "text-transform:capitalize" value="<?php echo $_SESSION['fname']; ?>" readonly></tr><tr>
<td height="30">Middle Name<td> :<td height="30"> <input type="text" name="mname" size="20" "text-transform:capitalize" value="<?php echo $_SESSION['mname']; ?>" readonly ></tr><tr>
<td height="30">Last Name<td> :<td height="30"> <input type="text" name="lname" size="20" "text-transform:capitalize" value="<?php echo $_SESSION['lname']; ?>" readonly></tr><tr>
<td width="85" height="30">Father's Name <td width="15">:<td height="30"> <input type="text" name="faname" size="20" style = "text-transform:capitalize" required></tr><tr>
<td width="85" height="30">Address<td width="15">:<td height="30"> <textarea name="address" rows="5" columns="20"></textarea>

</tr><tr>

<td height="30">USN<td> : <td height="30"><input type="text" style = "text-transform:uppercase" name="usn" id="usn1" size="20" value="<?php echo $_SESSION['usn']; ?>" readonly></tr><tr>
<td height="30">Exam Month<td>:<td height="30"><select name= "month" >
	<option >1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
    <option>11</option>
    <option>12</option></select>
    </tr><tr>
    <td height="30">Sem<td>:<td height="30"><select name= "sem" id="sem1" onchange="predict()" >
	<option value= "1">1</option>
    <option value= "2">2</option>
    <option value= "3">3</option>
    <option value= "4">4</option>
    <option value= "5">5</option>
    <option value= "6">6</option>
    <option value= "7">7</option>
    <option value= "8">8</option></select>
    </tr><tr>

    <td width="85" height="30">Suject-Codes<td width="8">:<td height="30"> <input type="text" id="ss1" name="s1" size="20" required><td><input type="text" name="s2" id="ss2" size="20"></tr><tr>
<td width="85" height="30"><td width="8">:<td height="30"> <input type="text" name="s3" id="ss3" size="20"><td><input type="text" name="s4" id="ss4" size="20"></tr><tr>
<td width="85" height="30"><td width="8">:<td height="30"> <input type="text" id="ss5" name="s5" size="20" ><td><input type="text" name="s6" id="ss6" size="20"></tr><tr>
<td width="85" height="30"><td width="8">:<td height="30"> <input type="text" name="s7" size="20" ><td><input type="text" name="s8" size="20" ></tr><tr>

<td height="30">Challan No.<td>: <td><input type="number" name="challan"  required></tr><tr>

<td height="30">Exam-Type<td>:<td> <select name= "type" >
	<option >SEE</option>
    <option>MAKE-UP</option>
    <option>Fastrack</option></select></tr><tr>
<td height="30">Fee-Amount<td>:<td> <input type="text" name="amount" size="20" required></tr><tr>
<td height="30"><input name="Submit" type="submit" name="submit"  value="Submit" align="center" /></tr><tr>
</table>
<p></p>
<p></p>
</form>

<!--Click here to go <a href="file:///C|/Users/Karan/Desktop/test/home1.html">BACK</a>-->
<div id="footer">
<center>&copy; Copyright. All Rights Reserved</center>
</div>
</div> 
			
                
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
