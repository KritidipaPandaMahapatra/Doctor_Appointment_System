<?php
session_start();
include 'connection.php';
if(isset($_POST['submit'])){
	$email = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";
	$query = mysqli_query($conn,$sql);

	$row = mysqli_fetch_array($query);
	if($row['email'] == $email && $row['password'] == $password){
		echo "login successfull";
		  $_SESSION['email'] = $email;
		  header('location:doctor.php');
	}else{
		echo " login failed";
		header('location:login.php');
	}
}
?>