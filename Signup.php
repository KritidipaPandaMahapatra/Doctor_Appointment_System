<?php
require_once "header.php";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <title>Registration Page:</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <style type="text/css">
        body 
*[role="form"] {
    max-width: 1000px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 50px;
    font-weight: 600px;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 3px;
}

 </style>
 <script type="text/javascript">
        let nameCheck = ()=>{
       let name = document.getElementById('t1').value; 
       let nameRegex=/^[a-zA-Z]/;
       if(name =='' || name ==null)
         {
          document.getElementById('t1').classList.add('is-invalid');
          document.getElementById('errorName').innerHTML='Name is Required';
          document.getElementById('b1').disabled = true;
         }
         else if(name.length<3){
          document.getElementById('t1').classList.add('is-invalid');
          document.getElementById('errorName').innerHTML='Name must contains atleast 3 Chars.';
          document.getElementById('b1').disabled = true;
         }
          
         else{

           if(nameRegex.test(name)){
             document.getElementById('t1').classList.remove('is-invalid');
             document.getElementById('errorName').innerHTML='';
             document.getElementById('b1').disabled=false;  
           }else{
             document.getElementById('t1').classList.add('is-invalid');
             document.getElementById('errorName').innerHTML='Name should Contains Letters ...';
             document.getElementById('b1').disabled=true;
           }
         }

   };

   let phoneCheck = ()=>{
      let phone = document.getElementById('t2').value;
      if(phone =='' || phone ==null){
         document.getElementById('t2').classList.add('is-invalid');
         document.getElementById('errorPhone').innerHTML='Phone is Required';
         document.getElementById('b1').disabled = true; 
      }else{
        if(phone.length == 10){
          if(phone.substr(0,1)=='9' || phone.substr(0,1)=='8' || phone.substr(0,1)=='7' || phone.substr(0,1)=='6'){
            document.getElementById('t2').classList.remove('is-invalid'); 
            document.getElementById('errorPhone').innerHTML='';
            document.getElementById('b1').disabled = false; 
          }else{
           document.getElementById('t2').classList.add('is-invalid');  
           document.getElementById('errorPhone').innerHTML='Invalid Mobile No';
           document.getElementById('b1').disabled = true;
          }
        }
        else{
        document.getElementById('t2').classList.add('is-invalid');  
        document.getElementById('errorPhone').innerHTML='Mobile no must contains 10 Digit';
        document.getElementById('b1').disabled = true;
        }

      }
   };
   let emailCheck = ()=>{
    let email = document.getElementById('t3').value;
    let emailRegex =/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(email == '' || email == null){
       document.getElementById('t3').classList.add('is-invalid');
      document.getElementById('errorEmail').innerHTML='Email is Required.';
      document.getElementById('b1').disabled = true;
    }else{

    if(emailRegex.test(email)){
      document.getElementById('t3').classList.remove('is-invalid');
      document.getElementById('errorEmail').innerHTML='';
      document.getElementById('b1').disabled = false;
    }else{
      document.getElementById('t3').classList.add('is-invalid');
      document.getElementById('errorEmail').innerHTML='Invallid Email';
      document.getElementById('b1').disabled = true; 
    }
  }
   };

   let passCheck = ()=>{
    let pass1 = document.getElementById('p1').value;
    let passRegex =/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/;

    if(pass1 == '' || pass1==null){
      document.getElementById('p1').classList.add('is-invalid');
      document.getElementById('errorPass').innerHTML='Password is Madatory';
      document.getElementById('b1').disabled = true; 
    }else{

    if(passRegex.test(pass1)){
      document.getElementById('p1').classList.remove('is-invalid');
      document.getElementById('errorPass').innerHTML='';
      document.getElementById('b1').disabled = false; 
    }else{
      document.getElementById('p1').classList.add('is-invalid');
      document.getElementById('errorPass').innerHTML='Password Should contains Atleast <small><ul><li>One UpperCase</li><li>One LowerCase</li><li>One Digit</li><li>One Special Chars.</li><li>Min 8 to Max 15 Chars Long.</li></ul></small>';
      document.getElementById('b1').disabled = true;
    }
  }
   };

   let passMatch = ()=>{
      let pass1 = document.getElementById('p1').value;
      let pass2 = document.getElementById('p2').value;

      if(pass2 == '' || pass2 == null){
          document.getElementById('p2').classList.add('is-invalid');
          document.getElementById('errorPass2').innerHTML='Confirm Password is Required'
          document.getElementById('b1').disabled=true; 
      }else{
          if(pass1 == pass2){
             document.getElementById('p2').classList.remove('is-invalid');
          document.getElementById('errorPass2').innerHTML=''
          document.getElementById('b1').disabled=false;  
          } else{
          document.getElementById('p2').classList.add('is-invalid');
          document.getElementById('errorPass2').innerHTML='Password Mismatched.'
          document.getElementById('b1').disabled=true;
          } 
      }
   };
   let togglePass = ()=>{
    let pass1 = document.getElementById('p1');
    let pass2 = document.getElementById('p2');
    let ch1   = document.getElementById('ch1');
    if(ch1.checked){
     pass1.type = pass2.type ='text';
    }else{
     pass1.type = pass2.type ='password'; 
    }
   }
 </script>
</head>
<body style="background-color: pink">

     
<!------ Include the above in your HEAD tag ---------->

<div class="container">
            <form class="form-horizontal" role="form" method="post" action="signup_php.php" enctype="multipart/form-data">
                <h2>Registration</h2>

                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Name:</label>
                    <div class="col-sm-9">
                        <input type="text" id="t1" placeholder="Full Name" class="form-control" autofocus name="name" required onkeyup="nameCheck()">
                  <section id="errorName" class="text-danger"></section>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email: </label>
                    <div class="col-sm-9">
                        <input type="email" id="t3" placeholder="Email" class="form-control" name= "email" required onkeyup="emailCheck()" required="required">
                         <section id="errorEmail" class="text-danger"></section>
                    </div>
                   
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone Number:</label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" id="t2" placeholder="Phone number" name="phone" class="form-control" required onkeyup="phoneCheck()">
                            <section id="errorPhone" class="text-danger"></section>
                       </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Address:</label>
                    <div class="col-sm-9">
                        <textarea cols="90" rows="2" name="address"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password:</label>
                    <div class="col-sm-9">
                        <input type="password" id="p1" name="password" required placeholder="Password" class="form-control" onkeyup="passCheck()">
                        <section class="text-danger" id="errorPass"></section>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password:</label>
                    <div class="col-sm-9">
                        <input type="password" id="p2" name="confirmpassword" placeholder="Confirm Password" required  class="form-control" onkeyup="passMatch()">
                        <section class="text-danger" id="errorPass2"></section>
                
                    </div>
                </div>
                  <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Upload Image:</label>
                    <div class="col-sm-9">
                      <input type="file" name="image">
                
                    </div>
                </div>

                    <input type="checkbox" name="ch1" id="ch1" onchange="togglePass()">Show/Hide
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   <a href="login.php"> Already Registered ? Login Here</a>
                  <br><br>
               
                <button type="submit" id="b1"class="btn btn-primary btn-block" name="register">Register</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->
    </body>
    </html>
    <?php
require_once "footer.php";
?>