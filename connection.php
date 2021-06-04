<?php
$conn=mysqli_connect('localhost','root','','docregistration') OR die(mysqli_error());
if($conn){
	//echo"Database Connected";
}
else{
	echo 'Error Establishing a Database Connection';
}
?>