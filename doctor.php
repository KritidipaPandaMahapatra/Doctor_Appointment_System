<?php
//include "connection.php";
require_once 'user.php';


/*Calculating Offset Code*/
$limit=5;
if(isset($_GET['page'])){
  $page=$_GET['page'];
}else{
  $page=1;
}
$offset=($page-1)*$limit;
$sql="SELECT * from doctor LIMIT {$offset},{$limit}";
$result=mysqli_query($conn,$sql) or die("query failed");
?>

<head>
	

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            function create_list(data){
                var table = $('#table');
                table.html('');
                
                for(var x in data){
                    var tr = $('<tr>');
                    tr.append($('<td>').text(data[x].id));
                    tr.append($('<td>').text(data[x].dname));
                    tr.append($('<td>').text(data[x].dcategory));
                    tr.append($('<td>').text(data[x].dphone));
                    tr.append($('<td>').text(data[x].demail));
                    tr.append($('<td>').text(data[x].dfees));
                    table.append(tr);
                };
            }
            $.ajax({
                url:'fetch.php?filter=all',
                type:'GET',
                success:function(data){
                    var d = JSON.parse(data);
                    create_list(d);
                }
            })
            $('#filter').on('change',function(){
                var filter = $(this).val();
                $.ajax({
                url:'fetch.php?filter='+filter,
                type:'GET',
                success:function(data){
                    var d = JSON.parse(data);
                    create_list(d);
                }
            })
            })
        })
    </script>



	<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>



<style type="text/css">
	.marginn{
		margin-left: 330px;
		margin-right: 30px;
	}
</style>
</head>

	<h1 style="color:red" align="center">List Of Doctors</h1>
	<div class="marginn">
	<div class="form-group">
   <input id="myInput" type="text" placeholder="Search All Possible Way." onkeyup="myFunction()">
 </div>
</div>
<div class="marginn">

	<table class="table table-striped w-auto"  style="width: 90px; height: 70px"  class="container" class="table">
       

<?php 
		
$sqlq=mysqli_query($conn,"SELECT dcategory FROM doctor");

      
?>



        
        <div  align="center">
          <tr>
           <th>Doctor Id</th>
           <th>Doctor Name</th>
           
           <th id="filters">
      <select name="fetchval" id="fetchval">
        
        <option>Doctor Category</option>
        <?php 
        foreach ($sqlq as $row){//Array or records stored in $row

        echo "<option value='$row[dcategory]'>$row[dcategory]</option>"; 

/* Option values are added by looping through the array */ 

}

 ?>   
<!-- 

  <script>
  $(document).ready(function(){
    $("#fetchval").on('change',function(){
      var value=$(this).val();
      $ajax({
        url:"fetch.php",
        type:"POST",
        data:'request='+value;
        beforeSend:function(){
          $(".container").html("<span>Working..</span");
        };
        success:function(data){
          $(".conatainer").html(data);
        }
      });
    });
  });
  </script>
 -->

      </select>
    </th>
      
            <th>Mobile</th>
             <th>Email</th>

      <th>Fees
            <select id="filter">
                
                <option value="all" name="" >All </option>
                <option value="150">150</option>
                <option value="200">200</option>
                <option value="250">250</option>
                <option value="300">300</option>
                <option value="350">350</option>
                <option value="400">400</option>
                <option value="450">450</option>
                <option value="500">500</option>
                <option value="550">550</option>
                <option value="600">600</option>
            </select>
        </th>
         <th>Book</th>
       </tr>
     </div>
  
         <!-- <div >
            <table class="table table-striped w-auto"  style="width: 90px; height: 70px"  id="table">
            </table>
        </div>  -->
       
      

     
   <?php

while($sql_fetch=mysqli_fetch_assoc($result)) { ?> 
 <tbody id="myTable" id="table">
	<tr scope="row">
		
		<td><?php echo $sql_fetch['id'] ?></td>
		<td><?php echo $sql_fetch['dname'] ?></td>
		<td id="mytable"><?php echo $sql_fetch['dcategory'] ?></td>
		<td><?php echo $sql_fetch['dphone'] ?></td>
		<td><?php echo $sql_fetch['demail'] ?></td>
		<td><?php echo $sql_fetch['dfees'] ?></td>
		<td class="btn btn-sm btn-warning"><a href="index1.php?ep=<?php echo $sql_fetch['id'] ?>">Book </a></td>
		</tr>
	</tbody>
<?php } ?>		
</table>
</div>

<!-- Pagination-->
<?php
$sql1=mysqli_query($conn,"SELECT * from doctor");
if(mysqli_num_rows($sql1)>0){
	$total_records=mysqli_num_rows($sql1);
	$limit=5;
	$total_page=ceil($total_records/$limit);
    echo '<nav aria-label="Page navigation example">';
	echo '<ul class="pagination justify-content-center">';
	echo '<li class="page-item disabled">';
	echo '<a class="page-link" href="#" tabindex="-1">Previous</a>';
	echo '</li>';
     for($n=1;$n<=$total_page;$n++){
     echo '<li class="page-item"><a class="page-link" href="doctor.php?page='.$n.'">'.$n.'</a></li>';
	}
	echo '<li class="page-item">';
	echo '<a class="page-link" href="#">Next</a>';
	echo '</li>';
	echo '</ul>';
	echo '</nav>';
}
?>

  
	<!--Search -->

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>



