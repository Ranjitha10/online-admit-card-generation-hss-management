<?php 
			$hostname="localhost"; 
			$username="root"; 
			$password="root"; 
			$database="ereges";
			session_start();
			$dbhandle = mysql_connect($hostname, $username, $password) 
  				or die("Unable to connect to MySQL");
            
			$selected = mysql_select_db("ereges",$dbhandle) 
  				or die("Could not select examples");
				echo '<tr>';
echo '<td width="85" height="30">First Name <td width="15">:<td height="30"> <input type="text" name="fname" size="20"  value='.$_SESSION["fname"].' >';
echo '</tr><tr>';
echo '<td height="30">Middle Name<td> :<td height="30"> <input type="text" name="mname" size="20"  value='.$_SESSION["mname"].'></tr><tr>';
echo '<td height="30">Last Name<td> :<td height="30"> <input type="text" name="lname" size="20"  value='.$_SESSION["lname"].'></tr><tr>';
echo '<td height="30">ID<td> : <td height="30"><input type="text" name="id" size="20" style= "text-transform:uppercase" value='.$_SESSION["cid"].'></tr><tr>';
echo '<td height="30">Password<td>: <td height="30"><input type="password" name="pass1"  placeholder="Old/New Passowrd" required></tr><tr>';
echo '<td height="30">Department<td>: <td height="30"><input type= "text" name="dept" required></tr><tr>';
echo '<td height="30">Gender<td>:<td height="30"> <select name= "gender" >';
	echo '<option>M</option>';
    echo '<option>F</option></select></tr><tr>';
echo '<td height="30">Email<td>:<td height="30"> <input type="text" name="email" size="20" required></tr><tr>';
echo '<td height="30">Mobile<td>:<td height="30"> <input type="text" name="phone_no" size="20" required></tr><tr>';
echo '<td height="30">Designation<td>:<td height="30"> <input type="text" name="desig" size="20"></tr><tr>';
echo '<td height="30"><input name="Submit" type="submit" name="submit"  value="Submit" align="center" /></tr><tr>';
echo '</table>';
echo '</form>';
echo '<form action="delproc.php">';
echo '<p align="center"><input name="delete" type="submit" align="top" value="Delete Profile"/></p>';
echo '</form>';
?>
?>
