<?php
//include "connection.php";
require_once 'user.php';

?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.ss{
			margin-left: 100px;
		}
	</style>
</head>
<body>

</body>
</html>
<form method="post" action="user_passchange_action.php">
<div align="center">
	<label><h4>Update PassWord</h4></label>
	<input type="text" name="pass">
	<div class="ss">
		<input type="submit" name="submit">
	</div>
</div>
</form>