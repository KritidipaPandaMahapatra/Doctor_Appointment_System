<?php
include'user.php';



$uid=$_REQUEST['ep'];
$sql=mysqli_query($conn,"SELECT * FROM doctor WHERE id='$uid' ");
$sql_fetch=mysqli_fetch_assoc($sql);


$sqld=mysqli_query($conn,"SELECT * FROM `signup`  WHERE email='$name' ");
    $sqlfetchname= mysqli_fetch_assoc($sqld);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	</style>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<!-- <h1 class="text-danger text-uppercase text-center">aJAX CRUD OPERATION.</h1> -->
		<!-- <div class="d-flex justify-content-end"> -->
      
      	<div  align="center">
			<button  type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal" >
  			Make An Appinment To Doctor
			</button>
		</div>
		

		<!-- <h2 class="text-primary">ALL RECORDS</h2> -->
		<div id="records_contant">
			
		</div>
		 <!-- The Modal  -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">


      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Doctor Appoinment</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>



      <!-- Modal body -->
      <div class="modal-body">
       	<div class="form-group">
       		
       		<input type="text" name="" id="pname"  value=" <?php  echo $sqlfetchname['name']; ?>"class="form-control" hidden="hidden";>
       	</div>
       	<div class="form-group">
       		
       		<input type="email" name="" id="pmail"  value=" <?php  echo $sqlfetchname['email']; ?>"class="form-control" hidden="hidden"; >
       	</div>
       	<div class="form-group">
       		<label>Doctor Name:</label>
       		<input type="text" name="" id="dname" value="<?php echo $sql_fetch['dname'] ?>" class="form-control" >
       	</div>
       	<div class="form-group">
       		<label>Doctor Category:</label>
          <input type="text" name="" id="dcategory" value="<?php echo $sql_fetch['dcategory'] ?>" class="form-control" >
       		<!-- <select class="form-control" name="" id="dcategory">
       			<option >Select Doctor Category</option>
       			<option value="select">select</option>
       			<option value="General Physician">General Physician</option>
            <option value="MD">MD</option>
            <option value="MS">MS</option>
       			<option value="Physician">Physician</option>
       			<option value="Dentist">Dentist</option>
            <option value="Pediatrician">Pediatrician</option>
            <option value="Psychiatrist">Psychiatrist</option>
            <option value="Podiatrician">Podiatrician</option>
            <option value="Endocrinologist">Endocrinologist</option>
            <option value="surgeon">surgeon</option>
       		</select> -->
       	</div>
       	<div class="form-group">
       		<label>Appoinment Date:</label>
       		<input type="date" name="" id="ddate" class="form-control" >
       	</div>
          <div class="form-group">
          <label>Appoinment Description:</label>
           <textarea cols="55" rows="2" name="" id="des"></textarea>
        </div>

       	<!-- <div class="form-group">
       		<label>Email:</label>
       		<input type="text" name="" id="email" class="form-control" placeholder="Email">
       	</div>
       	<div class="form-group">
       		<label>Mobile:</label>
       		<input type="text" name="" id="mobile" class="form-control" placeholder="Mobile Number">
       	</div>
       	<div class="form-group">
       		<label>Password:</label>
       		<input type="text" name="" id="password" class="form-control" placeholder="Password">
       	</div>

 -->
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addRecord()">Save</button> 
     
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</div>

<script type="text/javascript">
	 function readRecords(){
	 	var readRecord="readRecord";

	 	$.ajax({

			url:"backend.php",
			type:"POST",
			data:{readRecord:readRecord
				},
				success:function(data,status){
					$('#records_contant').html(data);
				}
		});

	 }
	function addRecord(){
		var pname=$ ("#pname").val();
		var pmail=$ ("#pmail").val();
    var dname=$ ("#dname").val();
		var dcategory=$ ("#dcategory").val();
		var ddate=$ ("#ddate").val();
    var des=$ ("#des").val();

		$.ajax({
			url:"backend.php",
			type:"POST",
			data:{pname:pname,
						pmail:pmail,
            dname:dname,
				  dcategory:dcategory,
				  ddate:ddate,
				 des:des,
				},
				success:function(data,status){
					readRecords();
				},
		});
	}
	
</script>

</body>
</html>