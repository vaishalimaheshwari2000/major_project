<?php
   // session_start();
        $servername = "localhost";
        $username="root";
        $password="";
        $dbname = "registerUser";
        $conn = mysqli_connect($servername,$username,$password,$dbname);            
        

        if(!$conn)
           die("Sorry we failed to connect: ". mysqli_connect_error());
        
        else
         echo "successfully connected\n";

?>