
<html>
<head>
<title><center>REGISTRATION</center></title>
<style type="text/css">
body {
	margin:0;
	padding: 0;
	background:url("Teacher.jpg") no-repeat center center fixed;
  -webkit-backgroud-size:cover;
  -moz-background-size:cover;
  background-size:cover;
	background-color:#F8F8FF;
	font-family:Times New Roman, serif;
}
#content {
	 margin: 80px 420px ;
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
		border:1px solid blue;
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
</head>

<body bgcolor="gray">
<?php
	session_start();
	?>
<div id="content">
<div id="header">


<p><center><h2 style="color:white;">Counsellor Form</h2></center></p>


</div>
<form name="form2" method="post" action="cupdate.php" onClick="checkinput"><br>
<table align="center">
<tr>
<td width="85" height="30">First Name <td width="15">:<td height="30"> <input type="text" name="fname" size="20"  value=<?php echo $_SESSION["fname"] ?> required>
</tr><tr>
<td height="30">Middle Name<td> :<td height="30"> <input type="text" name="mname" size="20"  value=<?php echo $_SESSION["mname"] ?>></tr><tr>
<td height="30">Last Name<td> :<td height="30"> <input type="text" name="lname" size="20"  value=<?php echo $_SESSION["lname"]?>      required></tr><tr>
<td height="30">ID<td> : <td height="30"><input type="text" name="id" size="20" style= "text-transform:uppercase" value= <?php echo $_SESSION["cid"] ?> ></tr><tr>
<td height="30">Password<td>: <td height="30"><input type="password" name="pass1"  placeholder="Old/New Passowrd" required></tr><tr>
<td height="30">Department<td>: <td height="30"><input type= "text" name="dept" required></tr><tr>
<td height="30">Gender<td>:<td height="30"> <select name= "gender" >
	<option>M</option>
    <option>F</option></select></tr><tr>
<td height="30">Email<td>:<td height="30"> <input type="text" name="email" size="20" required></tr><tr>
<td height="30">Mobile<td>:<td height="30"> <input type="text" name="phone_no" size="20" required></tr><tr>
<td height="30">Designation<td>:<td height="30"> <input type="text" name="desig" size="20"></tr><tr>
<td height="30"><input name="Submit" type="submit" name="submit"  value="Submit" align="center" /></tr><tr>
</table>
</form>
<form action="delproc.php">
<p align="center"><input name="delete" type="submit" align="top" value="Delete Profile"/></p>
</form>
<!--Click here to go <a href="file:///C|/Users/Karan/Desktop/test/home1.html">BACK</a>-->
<div id="footer">
<center>&copy; Copyright. All Rights Reserved</center>
</div>
</div>
</body>
</html>

