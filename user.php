  <?php
session_start();
$name = $_SESSION['email'];
include 'connection.php';
?>
<html>
<head>
  <title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style type="text/css">
	.wrapper{
			display: flex;
			position: relative;
			margin-top: 70px;

		}
		.wrapper .sidebar{
			position: fixed;
			width: 250px;
			height: 100%;
			background-color:#C1CEFB;
			padding: 30px 0;
			margin-top: -70px;
		}
		.wrapper .sidebar h2{
			color: #fff;
			text-decoration: uppercase;
			text-align: center;
			margin-bottom: 30px;
		}
		.wrapper .sidebar ul li{
			padding: 15px;
			border-bottom: 1px solid rgba(0,0,0,0.05);
			border-top: 1px solid rgba(225,225,225,0.05);
			list-style-type: none;
		}
		.wrapper .sidebar ul li a{
			color: #fff;
			display: block;
			text-decoration: none;
		}
		.wrapper .sidebar ul li:hover a{
			color: #fff;
			background-color: #A6B9FB;
			padding: 15px;
			transition: all 0.4s ease-in-out;
		}
		.wrapper .sidebar ul li:hover ul.dropdown{
			display: block;
		}
</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand text-light" href="#">Doctor Appointment System</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link text-light" href="Home.php">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link text-light" href=""><?php echo $name ?>&#9662;</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="Logout.php">LogOut</a>
      </li>
    </ul>
  </div>

    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
 
</nav>
     
  <div class="wrapper">
	<div class="sidebar">
		<ul class="menu1">
			<li><a href="user.php"><strong> Dashboard</strong></a></li>
			
			<li><a href="doctor.php">List Of Doctors &#9662;</a></li>
			<li><a href="user_appoinment.php">Appoinment History &#9662;</a></li>
			<li><a href="user_passchange.php">Change PassWord &#9662;</a></li>
			 
			
		</ul>
	</div>
</div>



 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

  <script>
    $(function () {
      $('[data-toggle="popover"]').popover()
    })

  </script>

</body>
</html>
