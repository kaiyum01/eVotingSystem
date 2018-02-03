<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
			<link href="../css/login_style.css" rel="stylesheet" type="text/css"  media="all" />
</head>
<body>

<div class="header_bar">
<div class="header_bar_left">Admin Panel</div>
</div>
	<div class="header_name">
	<div class="header_name_mid">Traveling Bangladesh</div>
	</div>
<div class="login_div">

<form method="post" name="login" action="login.php">

	<table>
		<tr><td>ADMIN NAME: </td> <td><input type="text" name="username" id="userid" required="required" /><br />
</td></tr>
		<tr><td>admin_password: </td><td><input type="admin_password" name="admin_password" id="passid" required="required"  /><br />
</td></tr>
		<tr><td><td><input type="submit" name="submit" id="submit" value="ENTER" /></td></tr>
	</table>
	</form>
</div>

</body>

</html>