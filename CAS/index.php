<?php
$insert = false;
if(isset($_POST['un'])){
$server = "localhost";
$username = "root";
$password = "";
$database = "cas";
$con = mysqli_connect($server, $username, $password,$database);
 if (!$con) {
   die("connection Failed due to " . mysqli_connect_error());

 } 

 $username = $_POST['un'];
 $password = $_POST['pw'];
//  $query="select * from login where usrname='$username' and password='$password'";
//  $result=mysqli_query($con,$query);
//  $count=mysqli_num_rows($result);

$stmt=$con->prepare("select * from login where username =?");
$stmt->bind_param("s",$username);
$stmt->execute();
$stmt_result = $stmt->get_result();
if($stmt_result->num_rows >0){
    $data = $stmt_result->fetch_assoc();
    if($data["password"] === $password) {
       header("location:home.php?un=$username");
 } 
    } 
}



//  if($count > 0){
//     echo"Login Successfully";
//  }
// else{
//     echo" Login Not Sucessfull";
// }

 ?>
 <!DOCTYPE html>

 <html lang="en">
<link rel="stylesheet" href="css/bootstrap.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\<div class=" bd-brand-item inverse">

    <title>Sign in II Login</title>
</head>

<body>
    <div class="blockquote text-center">
        <h3>Dayalbagh Educational Institute</h3>
        <h4>(Deemed To Be University)</h4>
        <h4>Dayalbagh, Agra</h4>
        <h5>Assessment Criteria and Methodology Proforma for Promotion under CAS </h5>

    </div>
    
    <hr style="border-top: 1mm solid black ;">
    <div _ngcontent-tes-c107="" class="container-fluid" style="border: 2px ;">
        <div _ngcontent-tes-c107="" class="row">
            <nav _ngcontent-tes-c107="" class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
                <a href="registration.html"> <button _ngcontent-tes-c107="" mat-stroked-button="" color="accent"
                        class="mat-focus-indicator mt-5 mat-stroked-button mat-button-base mat-accent">
                        <span class="mat-button-wrapper">Click here for First Time Registration</span>
                        <span matripple="" class="mat-ripple mat-button-ripple"></span><span
                            class="mat-button-focus-overlay"></span></button>
                </a>
            </nav>
            <div _ngcontent-tes-c107="" class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                <div _ngcontent-tes-c107="" class="container login-container">
                    <div _ngcontent-tes-c107="" class="row login-form">
                        <h1 _ngcontent-tes-c107="" class="h3 mb-3 font-weight-normal">Please sign in</h1>

                        <?php
        if($insert == true){
            if($stmt_result->num_rows <= 0){ echo "<div class='submitMsg'>Invalid login</div>";
        }
    }
    ?>
                        <div _ngcontent-tes-c107="" class="col-md-12 col-sm-12 col-lg-12 col-xs-12 m-t-10 m-b-10">
                            <form class="form-signin ng-pristine ng-invalid ng-touched"  action="index.php" method="post" >
                                <div class="form-group m-t-10 m-b-10"><input name="un" placeholder="User Name"
                                        class="form-control form-control-sm ng-pristine ng-invalid ng-touched" required>
                                </div>

                                <div _ngcontent-tes-c107="" class="form-group m-t-10 m-b-10"><label
                                        _ngcontent-tes-c107="" for="inputPassword"
                                        class="sr-only">Password</label><input _ngcontent-tes-c107="" ngmodel=""
                                        name="pw" type="password" id="inputPassword"
                                        ng-change="onChange($event)" ng-model="myValue" placeholder="Password" required
                                        class="form-control form-control-sm ng-untouched ng-pristine ng-invalid"></div>

                                <div _ngcontent-tes-c107="" class="checkbox form-group m-t-10 m-b-10"><label
                                        _ngcontent-tes-c107=""><input _ngcontent-tes-c107="" type="checkbox"
                                            value="remember-me"> Remember me </label></div>
                                <div class="form-group m-t-10 m-b-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                                <p _ngcontent-tes-c107="" class="mt-5 mb-3 text-muted">© 2012-2023</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>