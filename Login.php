<?php
require_once "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to login form</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="background-color:pink">
	<h2><center>Login Here</center></h2>
	<div class ="login">
		<hr width="30%">

	<br><br>
		<table cellspacing="4" align="center" cellpadding="7" border="0">
			<form method="post" action="login_php.php">
			<tr>
				<td><b>Enter User Name :</b></td>
				<td><input type="text" name="username" id="email" placeholder="Enter user name here" ></td>
				</tr>
				
				<tr>
				<td><b>Enter Password :</b></td>
				<td><input type="password" name="password" id="pwd" placeholder="Enter password here" ></td>
			    </tr>

			    <tr>
			    <td></td>
			    <td>
			    <input type="reset" value="Reset" />
			    <input type="submit" value="Login" name="submit" /></td>
			    </tr>
			    <tr><td colspan="2" align="center">
			    	  <a href="Signup.php"> If you Not user ? Signup Here</a>
			    </td></tr>
			</form> -->
			<!-- <form  method="post" action="login_php.php">
				<tr>
				<td><b>Enter User Name :</b></td>
				<td><input type="email" name="username" id="email" placeholder="Enter user name here" ></td>
				</tr>
				
				<tr>
				<td><b>Enter Password :</b></td>
				<td><input type="password" name="password" id="pwd" placeholder="Enter password here" ></td>
			    </tr>
			    <tr>
				<td><b>Submit:</b></td>
				<td><input type="submit" name="submit" >Submit</td>
			    </tr>
			</form> -->
			    </table>
			    </div>
			   
		</body>
		</html>
		<br>
		<br><br><br><br>
		<?php
require_once"footer.php";
?>