---
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
<meta name="robots" content="noindex,follow" />

</head>
<body>
 <?php
			if(isset($_GET['error']))
			{
				if($_GET['error']== 5)
				{
					echo "<html><head>";
					echo "<body>";
					echo "<script>function myfunction(){ window.alert('Profile Deleted');}myfunction();</script>";
                   echo "</body></head></html>";

				}
				if($_GET['error']== 3)
				{
					echo "<html><head>";
					echo "<body>";
					echo "<script>function myfunction(){ window.alert('USN ALREADY EXITS');}myfunction();</script>";
                   echo "</body></head></html>";

				}
				if($_GET['error'] == 4)
				{
					echo "<html><head>";
					echo "<body>";
					echo "<script>function myfunction(){ window.alert('ID ALREADY EXITS');}myfunction();</script>";
				echo "</body></head></html>";
			}
			}
			
			?>
<div class="main">

  <center><img src="rvlo.jpg" style="width:90px;height:90px"></center><br><center>ONLINE ADMIT-CARD AND HSS MANAGEMENT</center>

</div>
<div class="container">
    <div class="login">
   
      <h1>Login</h1>
      <form method="post" action="check.php">
      	<p>Login As:
      	<input type="radio" name="type" value="student" checked>Student
        <input type="radio" name="type" value="counsellor">Counsellor
		<input type="radio" name="type" value="admin">Administrator<br></p>
        <p><input type="text" name="usn" value="" placeholder="USN/ID" style = "text-transform:uppercase" required></p>
        <p><input type="password" name="pass1" value="" placeholder="Password" required></p>
        <br>
        <?php
			if(isset($_GET['error']))
			{
				if($_GET['error']==1)
				
					echo'<span style="color:RED;">INCORRECT PASSWORD!</span>';
				if($_GET['error']==2)
					echo '<span style="color:RED;">USN DOES NOT EXIST</span>';
				if($_GET['error']==6)
					echo '<span style="color:RED;">ID DOES NOT EXIST</span>';
			}
		?>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer<br>
             
          </label>
        </p>
        
        <p class="submit"><input type="submit" name="commit" onClick="p1()"></p>
            </form>
     
     <br>
      <p>Register!??<br><br>
        <a href="sform.html">Click here if you are Student</a>.<br>
         <a href="cform.html">  Click here if you are Counsellor</a>.<br>
         <a href="aform.html">  Click here if you are Administrator</a>.</p>
      
     </div>
  </div>
  
</body>
</html>
