


<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
    

<head>
    <title>Registation Form // Index</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
</head>
<style>
    .button{
        color:rgba(90,56,45,0.8);
        align-items:centre;
        margin:10px;
        margin-left:38%;
        box-shadow: 1px 2px 3px rgba(0,214, 51,0.5);
        border:none;
    }
    .button:hover{
        transform:scale(0.8);
        color:#c0c0c0;
    }
    .row.col-md-6.col-md-offset-3{
        margin:auto;
        
    }
   
</style>
<body>


    <div class="blockquote text-center">
        <h3>Dayalbagh Educational Institute</h3>
        <h4>(Deemed To Be University)</h4>
        <h4>Dayalbagh, Agra</h4>
        <h5>Assessment Criteria and Methodology Proforma for Promotion under CAS </h5>

    </div>
    <hr style="border-top: 1mm solid black ;">
    <div class="container" style="position:container;">
        <div class="row col-md-6 col-md-offset-3 ">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Registation Form</h1>
                </div>
                <div class="panel-body">
                   
                    <form action="#" class="form-group" method="post">

                        <label for="#"> First Name</label>
                        <input type=" text" class="form-control" name="fname" id="firstname">


                        <label for="#"> Last Name</label>
                        <input type=" text" class="form-control" name="lname" id="laststname">


<!-- 
                        <label for="#"> Gender</label>
                        <label for="male" class="radio-inline"> <input type="radio" name="gender" id="male"> Male
                        </label>
                        <label for="female" class="radio-inline"> <input type="radio" name="gender" id="female"> Female
                        </label>
                        <label for="others" class="radio-inline"> <input type="radio" name="gender" id="others"> Others
                        </label> -->
                           <br>
                        <label for="#">Phone Number</label>
                        <input type="" class="form-control" id="number" name='phone' required placeholder="">


                        <label for="#"> Email</label>
                        <input type="email" class="form-control" id="email" name='email' required placeholder="abc@gamil.com">



                        <label for="#"> Password</label>
                        <input type="password" class="form-control" id="password" name='password' required>


                        <label for="#"> Confirm Password</label>
                        <input type="password" class="form-control" id="cpwd" name='cpwd' required>
                        <div id='invalid'></div>

                        <div class="input_field">
                            <input type="submit" value="Register" name="register" class="button" id="register">
                        </div>




                    </form>
                </div>
                <div class="panel-footer">
                    <small>&copy; The First Registation Form </small>
                </div>
            </div>
        </div>
    </div>
    <?php
                      $showAlert= false;
                      if($_SERVER['REQUEST_METHOD']=='POST'){
                         $firstname =    $_POST['fname'];
                         $lastname = $_POST['lname'];
                         $phoneno =  $_POST['phone'];
                        $email =  $_POST['email'];
                        $password =  $_POST['password'];
                         $Cpassword = $_POST['cpwd'];
                     
                        //  $first_name =   mysql_real_escape_string( $_POST['fname']);
                        //  $last_name =    mysql_real_escape_string( $_POST['lname']);
                        //  $phone_no =  mysql_real_escape_string($_POST['phone']);
                        //  $email =  mysql_real_escape_string($_POST['email']);
                        //  $password =  mysql_real_escape_string($_POST['password']);
                        //  $Cpassword =  mysql_real_escape_string($_POST['cpwd']);
                       
                      if(($password==$Cpassword)){
                            echo"Post";
                            echo "<br>";
                            $query = "INSERT INTO `users` (`fname`,`lname`,`contact`,`email`,`password`,`cpassword`) VALUES ('$firstname','$lastname','$phoneno','$email','$password', '$Cpassword')"; 
                        //    $querryString =  implode($query);
                            echo $query;
                            $data = mysqli_query($conn,$query);
                            echo "<br>";
                            // $dataArray =  implode($data);
                            echo $data;
                       if($data)
                         $showAlert = true;
                       if($showAlert){
                        // echo" Data Inserted into db";
                        // echo"post";
                        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                              <strong> Successfully Submitted! </strong> 
                              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                              <span>&times;</span>
                            </button>
                        <div>";
                         
                       }  
                     else {
                        
                      echo "failed".mysqli_error($conn); }

                    } }
                   
?>
<script>

document.querySelector('.input_field').addEventListener('click', (e)=>{
    console.log(pwd.value);
    e.preventDefault();
    if((pwd.value)===(Cpwd.value)){
        e.preventDefault();
        document.querySelector('.alert').style.display ='block';
   
    }
    else
   {  document.querySelector('#invalid').innerHTML+=`<p>Invalid Credentials!</p>`;
     }
     
 });
 document.querySelector('button').addEventListener('click', (e)=>{
    e.preventDefault();
    document.querySelector('.alert').style.display ='none';
 });

</script>
<!-- <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
$(function(){
   $('#register').click(function(e){
   
   
    var valid = ths.form.checkValidity();

    if(valid){
        const fname =     $('#firstname').val();
        const lname =$('#lastname').val();
        const contact =$('#number').val();
        const email =$('#email').val();
        const password =$('#password').val();
        const cpassword = $('#cpwd').val();
       
        e.preventDefault();

        $.ajax({
            type: 'POST', -->
            <!-- // url: 'process.php', 
            // data : {fname: fname, lname: lname,contact: contact,email: email, password: password,cpassword: cpassword},
            // success: function(data){
            //     Swal.fire({
            //     'title': 'Successfully Submitted!',
            //     'text': 'Successfully registered.'
            //     'icon': 'success',
            //     'confirmButtonText': 'Ok',
            //     'type': 'success'
            //   })
            // },
            // error: function(data){
            //     Swal.fire({
            //     'title': 'Error has Occurred',
            //     'icon': 'error',
            //     'confirmButtonText': 'Ok',
            //     'type': 'error'
            //   })
            // }
//         });
//     }else{

//     }
    
//      });
// });

// </script> -->
</body>

</html>

