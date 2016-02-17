
<html>
<head>
<title>EXAM-FORM></title>
<style type="text/css">
body {
	margin:0;
	padding: 0;
	 background:url("exam.jpg") no-repeat center center fixed;
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


<p><center><h2 style="color:white;">Exam-Registration Form</h2></center></p>


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

<td height="30">USN<td> : <td height="30"><input type="text" style = "text-transform:uppercase" name="usn" size="20" value="<?php echo $_SESSION['usn']; ?>" readonly></tr><tr>
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
    <td height="30">Sem<td>:<td height="30"><select name= "sem" >
	<option >1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option></select>
    </tr><tr>

    <td width="85" height="30">Suject-Codes<td width="8">:<td height="30"> <input type="text" name="s1" size="20" required><td><input type="text" name="s2" size="20"></tr><tr>
<td width="85" height="30"><td width="8">:<td height="30"> <input type="text" name="s3" size="20"><td><input type="text" name="s4" size="20"></tr><tr>
<td width="85" height="30"><td width="8">:<td height="30"> <input type="text" name="s5" size="20" ><td><input type="text" name="s6" size="20"></tr><tr>
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
</body>
</html>

