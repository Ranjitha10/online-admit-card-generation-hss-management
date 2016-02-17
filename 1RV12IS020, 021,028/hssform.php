
<html>
<head>
<title>HSS FORM</title>
<style type="text/css">
body {
	margin:0;
	padding: 0;
	 background:url("") no-repeat center center fixed;
  -webkit-backgroud-size:cover;
  -moz-background-size:cover;
  background-size:cover;
	
	font-family:Times New Roman, serif;
}
#content { margin: 100px 420px ;
	border:2px solid white;
	height:auto;
	position:center;
	opacity:0.9;
    filter:alpha(opacity=60);
    width:500px;
	border-radius:5px;





  background: white;

  opacity:0.9;
  filter:alpha(opacity=60);
  -webkit-box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);

	
	
	
	
	
}
#header {
		border:1px solid white;
		margin:0;
		width:500px;
		background-color:#999;	
		height:50px;
		border-bottom:2px solid white;
}
#footer {
		width:500px;
		background-color:#999;
		position:bottom;
		color:white;
		border-top:2px solid white;
		height:30px;
}
</style>
<?php
	session_start();
?>
</head>
<body bgcolor="gray">
<div id="content">
<div id="header">


<p><center><h2 style="color:white;">HSS Form</h2></center></p>


</div>
<form name="hssform" method="post" action="hss.php" onClick="checkinput"><br>
<table align="center">
<tr>
<td width="85" height="30">First Name <td width="15">:<td height="30"> <input type="text" name="fname" size="20" value="<?php echo $_SESSION['fname']; ?>" readonly>
</tr><tr></tr><tr>
<td height="30">Middle Name<td> :<td height="30"> <input type="text" name="mname" size="20" value="<?php echo $_SESSION['mname']; ?>" readonly ></tr><tr>
<td height="30">Last Name<td> :<td height="30"> <input type="text" name="lname" size="20" value="<?php echo $_SESSION['lname']; ?>" readonly></tr><tr>

<td height="30">USN<td> : <td height="30"><input type="text" name="usn" size="20" value="<?php echo $_SESSION['usn']; ?>" readonly r></tr><tr>
<td height="30">Sem<td>:<td height="30"><select name= "sem" >
	<option >2</option>
    <option>4</option>
    <option>6</option>
    <option>8</option></select>
    </tr><tr>
<td height="30">Event Name<td>:<td height="30"><input type="text" name="event" required></tr><tr>
<td height="30">Responsibilty<td>:<td height="30"><select name= "level" >
	<option >Volunteer</option>
    <option>Organizer</option>
    <option>Sports</option>
    <option>NCC</option>
    <option>Others</option></select></tr><tr>

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
</body>
</html>

