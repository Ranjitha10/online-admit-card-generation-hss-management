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
<script>
	function work(){
		
         var x = document.getElementById("ty").value;
		 if(x == "Admin")
				document.getElementById("usn").placeholder = x + " ID";
		if(x == "Counsellor")
				document.getElementById("usn").placeholder = x + " ID";
		if(x == "Student")
				document.getElementById("usn").placeholder = "USN";
		 }
	
	
</script>
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
		
      	<select  id="ty" name = "type" onchange="work()" >
        <option value = "Student">Student</option>
		<option value = "Counsellor">Counsellor</option>
		<option value = "Admin">Admin</option></select></p>
		
        <input type="text" id="usn" name="usn" value=""  style = "text-transform:uppercase" required>
        <p><input type="password" name="pass1" value="" placeholder="Password" required></p>
        <br>
        <?php
			if(isset($_GET['error']))
			{
				if($_GET['error']==1)
				
					echo'<span style="color:RED;">INCORRECT PASSWORD!</span>';
				if($_GET['error']==2)
					echo '<span style="color:RED;">User Does Not Exist</span>';
				if($_GET['error']==6)
					echo '<span style="color:RED;">User Does Not Exist</span>';
			}
		?>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer<br>
             
          </label>
        </p>
        
        <p class="submit"><input type="submit" name="commit" ></p>
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
