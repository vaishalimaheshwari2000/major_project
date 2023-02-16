<?php include("connection.php"); ?>

<?php
     clearstatcache();
     $login = false;
     $showError = false;
     if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email = $_POST['emailid'];
        $password = $_POST['password'];
        // $query = "Select * from users where email = '$email' and password='$password'";
        // echo $query;
        // echo "<br>";
        // $result = mysqli_query($conn, $query);
        // $num = mysqli_num_rows($result);
      
        // $display = implode(mysqli_fetch_assoc($result));
        // echo $display;
        // if($num==1){
        //     $login = true;
        //     $display = implode(mysqli_fetch_assoc($result));
        //     echo $display;
        //     echo "<br>";
        //     echo $email;
        //     echo "<br>";
        //     echo $password;
        //     echo "<br>";
        // }
        // else {
        //     $showError = "Invalid Credentials!";
        //     $display = implode(mysqli_fetch_assoc($result));
        //     echo $display;
        //     echo "<br>";
        //     echo $email;
        //     echo "<br>";
        //     echo $password;
        //     echo "<br>";
        // }

        $stmt = $conn->prepare("select * from users where email=? and password=?");

        $stmt->bind_param("ss",$email,$password);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            echo "data:  " ;
            echo implode($data);
            if($data["password"] === $password) {
            echo"successful!";
           
         }
        
            }
        
}

   
     
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/png" href="dayalbagh-educational-institute-distance-education-logo.png">
<title>Author Login</title>
<link rel="stylesheet" type="text/css" href="css/authorlogincss.css">
</head>
<style>
    *{
        margin:0;
        padding:0;
        top:0;
        left:0;
        /* margin-bottom:2%; */
    }

    .btn {
       
    /* display: flex; */
    background-color: #b5efef; 
  
    height: 35px;
    
   
} 

button.close {
    /* padding: 2px;
    height: 30px; */
    /* flex-direction: row; */
    /* margin: 5px; */
    /* margin-top: -2px; */
    
    background-color:#b5efef;
    border:none;
    font-size: 30px;
    font-style: bold;
} 

#logo_head{
    display:flex;
    align-items:centre;
   
}
#logo_head h2{
    margin:auto;
    font-size:2vw;
    text-align:centre;
   
}

#logo_head img{
    width:100px;
    display:flex;
    padding:15px;
}
table{
    margin:auto;
    padding-left:100px;
}


    </style>



<?php

if($login){
    // echo" Data Inserted into db";
    // echo"post";
    // echo $
    echo "<div class='alert alert-warning alert-dismissible fade show btn' role='alert'>
    <strong>Login Successfully! </strong> 
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>";
    echo $display. "\n";
    
}
if($showError){
    // echo" Data Inserted into db";
    // echo"post";
    echo "<div class='alert alert-warning alert-dismissible fade show btn' role='alert'>
    <strong>Error! </strong>".$showError."<br>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
        </button>
    </div>";
    // echo $display. "\n";
    
}
?>

<body>


    <table cellspacing="0" width="500px" class="tle" >
	<tr>

    <div id="logo_head">
        <a href="#"><img src="dayalbagh-educational-institute-distance-education-logo.png" id='logo'/> </a>
        <h2>DayalBagh Educational Institute</h2>
    </div>
	</tr>
    <tr>
		<td colspan="2" align="center" class="journaltitle">SCIENTIFIC DEVELOPMENT AND RESEARCH PUBLICATIONS</br> DEVELOPMENT RESEARCH
		
		</br></br>
		
		<a href="https://ugcnet.nta.nic.in/"> About UGC </a> 
		</td>
	</tr>
    
     <tr>
		<td colspan="2" align="center" class="logintitle">Login to Author's Home</td>
	</tr>
    <tr>
		<td colspan="2">



    





        <form class="form-3" action="#" method="post">
    <span color="#89CFF0" style="font:Arial, Helvetica, sans-serif; font-size:12px; text-align:center"></span>
        
    <p align="center">
        <label for="login">Email ID</label></br>
        <input type="text" name="emailid" id="email" placeholder="Author's Mail ID">
    </p>
    <p align="center">
        <label for="password">Password</label>
        <input type="password" name="password" id="registrationid" placeholder="Password"> 
    </p>
    <p color="#89CFF0" style="margin-left:25px;margin-right:auto;display:block;margin-top:3%;margin-bottom:3%">
        <input type="submit" name="submit" value="Sign in" id="smt">
    </p>       
</form>
        
        </td>
	</tr>
    <tr>
    <td colspan="2">
    <div align="center">
        <table class="socialnet">
        	<tr>
            <td colspan="5" class="socialnet" align="center">
            <p>Follow us on Social Networking sites</p>
            </td>
            </tr>
            <tr>
            <td width="40px"><a href="https://www.facebook.com/Dayalbagh.agra/"><img src="facebook.png"></a></td>
            <td width="40px"><a href="https://www.linkedin.com/school/dayalbagh-educational-institute/?originalSubdomain=in"><img src="linkedin.png"></a>
            <td width="40px"><a href="https://twitter.com/deidayalbagh?lang=en"><img src="twitter.png"></a></td>
            </tr>
        </table>
        </div>
    
    </td>
    </tr>
    </table>
    
    
    <script>
    document.querySelector('.alert').style.display ='none';
    document.querySelector('button').addEventListener('click', (e)=>{
        e.preventDefault();
        setTimeout("location.reload(true);");
        // document.querySelector('.alert').style.display ='none';
    });    
    document.querySelector('#smt').addEventListener('click', (e)=>{
        e.preventDefault();
        document.querySelector('.alert').style.display ='block';

    });    

 
</script>
    


</body>
</html>