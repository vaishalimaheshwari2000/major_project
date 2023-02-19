                                      <!-- PERFECTLY WORKING FILE -->
<!-- 
$insert = false;
if(isset($_POST['Title1'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
 if (!$con) {
   die("connection Failed due to " . mysqli_connect_error());

 }
//  echo "<h1>Successfully inserted</h1>";
//         variables for tb1
//  $Title1 = $_POST['Title1'];
 $Journal1 = $_POST['Journal1'];
 $ISSN1 = $_POST['ISSN1'];
 $Impact1 = $_POST['Impact1'];
 $co_authors1 = $_POST['co_authors1'];
 $main_author1 = $_POST['main_author1'];
 $Score1 = $_POST['Score1'];

 $Title2 = $_POST['Title2'];
 $Journal2 = $_POST['Journal2'];
 $ISSN2 = $_POST['ISSN2'];
 $Impact2 = $_POST['Impact2'];
 $co_authors2 = $_POST['co_authors2'];
 $main_author2 = $_POST['main_author2'];
 $Score2= $_POST['Score2'];

 $Title3 = $_POST['Title3'];
 $Journal3 = $_POST['Journal3'];
 $ISSN3 = $_POST['ISSN3'];
 $Impact3 = $_POST['Impact3'];
 $co_authors3 = $_POST['co_authors3'];
 $main_author3 = $_POST['main_author3'];
 $Score3 = $_POST['Score3'];

 $Total_Score = $_POST['Total_Score'];

//         variables for tb2
 $Chapter1 = $_POST['Chapter1'];
 $Book1 = $_POST['Book1'];
 $ISBN1 = $_POST['ISBN1'];
 $Authors1 = $_POST['Authors1'];
 $MainA1 = $_POST['MainA1'];
 $National1 = $_POST['National1'];
 $S1 = $_POST['S1'];

 $Chapter2 = $_POST['Chapter2'];
 $Book2 = $_POST['Book2'];
 $ISBN2 = $_POST['ISBN2'];
 $Authors2 = $_POST['Authors2'];
 $MainA2 = $_POST['MainA2'];
 $National2 = $_POST['National2'];
 $S2 = $_POST['S2'];

 $Chapter3 = $_POST['Chapter3'];
 $Book3 = $_POST['Book3'];
 $ISBN3 = $_POST['ISBN3'];
 $Authors3 = $_POST['Authors3'];
 $MainA3 = $_POST['MainA3'];
 $National3 = $_POST['National3'];
 $S3 = $_POST['S3'];

 $TS = $_POST['TS'];
//         variables for tb3
 $Chapter4 = $_POST['Chapter4'];
 $Book4 = $_POST['Book4'];
 $ISBN4 = $_POST['ISBN4'];
 $Authors4 = $_POST['Authors4'];
 $MainA4 = $_POST['MainA4'];
 $National4 = $_POST['National4'];
 $S4 = $_POST['S4'];

 $Chapter5 = $_POST['Chapter5'];
 $Book5 = $_POST['Book5'];
 $ISBN5 = $_POST['ISBN5'];
 $Authors5 = $_POST['Authors5'];
 $MainA5 = $_POST['MainA5'];
 $National5 = $_POST['National5'];
 $S5 = $_POST['S5'];

 $Chapter6 = $_POST['Chapter6'];
 $Book6 = $_POST['Book6'];
 $ISBN6 = $_POST['ISBN6'];
 $Authors6 = $_POST['Authors6'];
 $MainA6 = $_POST['MainA6'];
 $National6 = $_POST['National6'];
 $S6 = $_POST['S6'];
 $TS1 = $_POST['TS1'];

 //         variables for tb4
 $Publication1 = $_POST['Publication1'];
 $Course1 = $_POST['Course1'];
 $Sc1 = $_POST['Sc1'];
 $Publication2 = $_POST['Publication2'];
 $Course2 = $_POST['Course2'];
 $Sc2 = $_POST['Sc2'];
 $TS2 = $_POST['TS2'];

 //         variables for tb5
 $Publication4 = $_POST['Publication4'];
 $Course4 = $_POST['Course4'];
 $Score4 = $_POST['Score4'];
 $Publication5 = $_POST['Publication5'];
 $Course5 = $_POST['Course5'];
 $Score5 = $_POST['Score5'];
 $Publication6 = $_POST['Publication6'];
 $Course6 = $_POST['Course6'];
 $Score6 = $_POST['Score6'];
 $Publication7 = $_POST['Publication7'];
 $Course7 = $_POST['Course7'];
 $Score7 = $_POST['Score7'];
 $TS3 = $_POST['TS3'];
//  $ = $_POST[''];
 //         variables for tb6

 $Publication8 = $_POST['Publication8'];
 $Course8 = $_POST['Course8'];
 $Score8 = $_POST['Score8'];
 $Publication9 = $_POST['Publication9'];
 $Course9 = $_POST['Course9'];
 $Score9 = $_POST['Score9'];
 $Publication10 = $_POST['Publication10'];
 $Course10 = $_POST['Course10'];
 $Score10 = $_POST['Score10'];
 $Publication11 = $_POST['Publication11'];
 $Course11 = $_POST['Course11'];
 $Score11 = $_POST['Score11'];
 $TS4 = $_POST['TS4'];

 //         variables for tb7
 $number1 = $_POST['number1'];
 $thesis1 = $_POST['thesis1'];
 $degree1 = $_POST['degree1'];
 $score12 = $_POST['score12'];

 $number2 = $_POST['number2'];
 $thesis2 = $_POST['thesis2'];
 $degree2 = $_POST['degree2'];
 $score13 = $_POST['score13'];
 $TS5 = $_POST['TS5'];
 //         variables for tb8

 $title1 = $_POST['title1'];
 $agency1 = $_POST['agency1'];
 $period1 = $_POST['period1'];
 $grant1 = $_POST['grant1'];
 $score14 = $_POST['score14'];

 $title2 = $_POST['title2'];
 $agency2 = $_POST['agency2'];
 $period2 = $_POST['period2'];
 $grant2 = $_POST['grant2'];
 $score15 = $_POST['score15'];

 $title3 = $_POST['title3'];
 $agency3 = $_POST['agency3'];
 $period3 = $_POST['period3'];
 $grant3 = $_POST['grant3'];
 $score16 = $_POST['score16'];
 $TS6 = $_POST['TS6'];
 //         variables for tb9

 $title4 = $_POST['title4'];
 $agency4 = $_POST['agency4'];
 $period4 = $_POST['period4'];
 $grant4 = $_POST['grant4'];
 $score17 = $_POST['score17'];

 $title5 = $_POST['title5'];
 $agency5 = $_POST['agency5'];
 $period5 = $_POST['period5'];
 $grant5 = $_POST['grant5'];
 $score18 = $_POST['score18'];

 $title6 = $_POST['title6'];
 $agency6 = $_POST['agency6'];
 $period6 = $_POST['period6'];
 $grant6 = $_POST['grant6'];
 $score19 = $_POST['score19'];
 $TS7 = $_POST['TS7'];
 //         variables for tb10

 $title7 = $_POST['title7'];
 $agency7 = $_POST['agency7'];
 $period7 = $_POST['period7'];
 $grant7 = $_POST['grant7'];
 $score20 = $_POST['score20'];

 $title8 = $_POST['title8'];
 $agency8 = $_POST['agency8'];
 $period8 = $_POST['period8'];
 $grant8 = $_POST['grant8'];
 $score21 = $_POST['score21'];

 $title9 = $_POST['title9'];
 $agency9 = $_POST['agency9'];
 $period9 = $_POST['period9'];
 $grant9 = $_POST['grant9'];
 $score22 = $_POST['score22'];
 $TS8 = $_POST['TS8'];
 //         variables for tb11

 $title10 = $_POST['title9'];
 $agency10 = $_POST['agency9'];
 $period10 = $_POST['period9'];
 $international1 = $_POST['international1'];
 $grant10 = $_POST['grant9'];
 $score23 = $_POST['score22'];

 $title11 = $_POST['title11'];
 $agency11 = $_POST['agency11'];
 $period11 = $_POST['period11'];
 $international2 = $_POST['international2'];
 $grant11 = $_POST['grant11'];
 $score24 = $_POST['score24'];
 $TS9 = $_POST['TS9'];
 //         variables for tb12

 $title12 = $_POST['title12'];
 $agency12 = $_POST['agency12'];
 $period12 = $_POST['period12'];
 $international3 = $_POST['international3'];
 $grant12 = $_POST['grant12'];
 $score25 = $_POST['score25'];

 $title13 = $_POST['title13'];
 $agency13 = $_POST['agency13'];
 $period13 = $_POST['period13'];
 $international4 = $_POST['international4'];
 $grant13 = $_POST['grant13'];
 $score26 = $_POST['score26'];
 $TS10 = $_POST['TS10'];
 //          $ = $_POST[''];
 //         variables for tb13

  $title14 = $_POST['title14'];
  $international5 = $_POST['international5'];
  $score27 = $_POST['score27'];
  $title15 = $_POST['title15'];
  $international6 = $_POST['international6'];
  $score28 = $_POST['score28'];
  $TS11 = $_POST['TS11'];
 //         variables for tb14
 $title16 = $_POST['title16'];
 $international7 = $_POST['international7'];
 $score29 = $_POST['score29'];
 $title17 = $_POST['title17'];
 $international8 = $_POST['international8'];
 $score30 = $_POST['score30'];
 $TS12 = $_POST['TS12'];
 
 //         variables for tb15
 $title18 = $_POST['title18'];
 $international9 = $_POST['international9'];
 $score31 = $_POST['score31'];
 $title19 = $_POST['title19'];
 $international10 = $_POST['international10'];
 $score32 = $_POST['score32'];
 $title20 = $_POST['title20'];
 $international11 = $_POST['international11'];
 $score33 = $_POST['score33'];
 $title21 = $_POST['title21'];
 $international12 = $_POST['international12'];
 $score34 = $_POST['score34'];
 //         variables for tb15

$Enclosures1 = $_POST['Enclosures1'];
$Enclosures2 = $_POST['Enclosures2'];
$Enclosures3 = $_POST['Enclosures3'];
$Enclosures4 = $_POST['Enclosures4'];
$Enclosures5 = $_POST['Enclosures5'];
$Enclosures6 = $_POST['Enclosures6'];
$Enclosures7 = $_POST['Enclosures7'];
$Enclosures8 = $_POST['Enclosures8'];
$Enclosures9 = $_POST['Enclosures9'];
$Enclosures10 = $_POST['Enclosures10'];




 $sql = "INSERT INTO `cas`.`casb21` (`1`, `2`, `3`, `4`) VALUES ('$Title1,$Journal1,$ISSN1,$Impact1,$co_authors1,$main_author1,$Score1','$Title2,$Journal2,$ISSN2,$Impact2,$co_authors2,$main_author2,$Score2','$Title3,$Journal3,$ISSN3,$Impact3,$co_authors3,$main_author3,$Score3','$Total_Score');" ;

 $sql1 = "INSERT INTO `cas`.`casb22` (`1`, `2`, `3`, `4`) VALUES ('$Chapter1,$Book1,$ISBN1,$Authors1,$MainA1,$National1,$S1','$Chapter2,$Book2,$ISBN2,$Authors2,$MainA2,$National2,$S2','$Chapter3,$Book3,$ISBN3,$Authors3,$MainA3,$National3,$S3','$TS');" ;

 $sql2 = "INSERT INTO `cas`.`casb23` (`1`, `2`, `3`, `4`) VALUES ('$Chapter4,$Book4,$ISBN4,$Authors4,$MainA4,$National4,$S4','$Chapter5,$Book5,$ISBN5,$Authors5,$MainA5,$National5,$S5','$Chapter6,$Book6,$ISBN6,$Authors6,$MainA6,$National6,$S6','$TS1');" ;
 
 $sql3 = "INSERT INTO `cas`.`casb24` (`1`, `2`, `3`) VALUES ('$Publication1,$Course1,$Sc1','$Publication2,$Course2,$Sc2','$TS2' );" ;

 $sql4 = "INSERT INTO `cas`.`casb25` (`1`, `2`, `3`,`4`,`5`) VALUES ('$Publication4,$Course4,$Score4','$Publication5,$Course5,$Score5','$Publication6,$Course6,$Score6','$Publication7,$Course7,$Score7','$TS3' );" ;

 $sql5 = "INSERT INTO `cas`.`casb26` (`1`, `2`, `3`,`4`,`5`) VALUES ('$Publication8,$Course8,$Score8','$Publication9,$Course9,$Score9','$Publication10,$Course10,$Score10','$Publication11,$Course11,$Score11','$TS4' );" ;

 $sql6 = "INSERT INTO `cas`.`casb27` (`1`, `2`,`3`) VALUES ('$number1,$thesis1,$degree1,$score12','$number2,$thesis2,$degree2,$score13','$TS5');" ;

 $sql7 = "INSERT INTO `cas`.`casb28` (`1`, `2`,`3`,`4`) VALUES ('$title1,$agency1,$period1,$grant1,$score14','$title2,$agency2,$period2,$grant2,$score15','$title3,$agency3,$period3,$grant3,$score16','$TS6');" ;

 $sql8 = "INSERT INTO `cas`.`casb29` (`1`, `2`,`3`,`4`) VALUES ('$title4,$agency4,$period4,$grant4,$score17','$title5,$agency5,$period5,$grant5,$score18','$title6,$agency6,$period6,$grant6,$score19','$TS7');" ;
   
 $sql9 = "INSERT INTO `cas`.`casb210` (`1`, `2`,`3`,`4`) VALUES ('$title7,$agency7,$period7,$grant7,$score20','$title8,$agency8,$period8,$grant8,$score21','$title9,$agency9,$period9,$grant9,$score22','$TS8');" ;
//  INSERT INTO `tb10` (`sno`, `1`, `2`, `3`, `4`) VALUES ('1', '7', '7', '7', '7');

 $sql10 = "INSERT INTO `cas`.`casb211` (`1`, `2`,`3`) VALUES ('$title10,$agency10,$period10,$international1,$grant10,$score23','$title11,$agency11,$period11,$international2,$grant11,$score24','$TS9');" ;

 $sql11 = "INSERT INTO `cas`.`casb212` (`1`, `2`,`3`) VALUES ('$title12,$agency12,$period12,$international3,$grant12,$score25','$title13,$agency13,$period13,$international4,$grant13,$score26','$TS10');" ;

 $sql12 = "INSERT INTO `cas`.`casb213` (`1`, `2`,`3`) VALUES ('$title14,$international5,$score27','$title15,$international6,$score28','$TS11');" ;

 $sql13 = "INSERT INTO `cas`.`casb214` (`1`, `2`,`3`) VALUES ('$title16,$international7,$score29','$title17,$international8,$score30','$TS12');" ;

 $sql14 = "INSERT INTO `cas`.`casb215` (`1`, `2`,`3`,`4`) VALUES ('$title18,$international9,$score31','$title19,$international10,$score32','$title20,$international11,$score33','$title21,$international12,$score34');" ;

 $sql15 = "INSERT INTO `cas`.`casb216` (`1`, `2`,`3`,`4`,`5`) VALUES ('$Enclosures1,$Enclosures2','$Enclosures3,$Enclosures4','$Enclosures5,$Enclosures6','$Enclosures7,$Enclosures8','$Enclosures9,$Enclosures10');" ;

//  $con->query($sql.$sql1.)

  if($con->query($sql) == true){
    echo "<h1></h1>";}
  if($con->query($sql1) == true){
    echo "";}
  if($con->query($sql2) == true){
    echo "";}
  if($con->query($sql3) == true){
    echo "";}
  if($con->query($sql4) == true){
    echo "";}
  if($con->query($sql5) == true){
    echo "";}
  if($con->query($sql6) == true){
    echo "";}
  if($con->query($sql7) == true){
    echo "";}
  if($con->query($sql8) == true){
    echo "";}
  if($con->query($sql9) == true){
    echo "";}
  if($con->query($sql10) == true){
    echo "";}
  if($con->query($sql11) == true){
    echo "";}
  if($con->query($sql12) == true){
    echo "";}
  if($con->query($sql13) == true){
    echo "";}
  if($con->query($sql14) == true){
    echo "";}
  if($con->query($sql15) == true){
    echo "";}
 



    $con->close();
  } 
    
?>  -->

<?php include("connection.php");  ?>

<?php
    //  $showAlert = false;

//    if($_SERVER['REQUEST_METHOD'] == "POST")
//     { 
    // if(isset($_POST['submit-1'])){
    //     $titleNo = $_POST["title"];
    //     $date = $_POST["date"];
    //     $issnNo = $_POST["issn"];
    //     $review = $_POST["review"];
    //     $noAuth = $_POST["noAuth"];
    //     $score = $_POST["score"];
    //     $main = $_POST["main"];

    //     $query = "INSERT INTO `researchpaper` (`Title with Page Nos`, `Journal & Date of Publication`, `ISSN / ISBN No. of Publication`, `Whether Peer Reviewed Impact Factor, if any`, `No. of co-authors`,`Whether you are the main author`, `Score author`) VALUES ('$titleNo', '$date', '$issnNo', '$review', '$noAuth', '$main','$score')";
    //     echo $query;
        //  $data = mysqli_query($conn, $query);
        //  $data_array = array();
         

        //   if($data)
        //   {$showAlert = true;
            //  while($rows = mysqli_fetch_assoc($data))
            //      $data_array = $rows;

    //     }
    //     if($showAlert){
    //      echo" Data Inserted into db";
    //     } 
    //   else {
         
    //    echo "failed".mysqli_error($conn); }

    //  }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="script.js"> </script>
    <title>CAS Proforma Part B| II</title>
</head>

<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    #submit{
       border:none;
       border-radius:3px;
       margin-left:auto;
       text-align:centre;
      
        
    }


    .submit{
        align-items:center;
        padding:2px;
       display:flex;
       justify-content:center;
    }
    .input_field> input{
        margin:10px;
        padding: 7.1px;
        border: none;
        border-radius:3px;
        background-color: rgb(124, 223, 236);
        margin-left:40%;
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="#" class="navbar-brand"> <img class="svg" src="logo.jpeg" alt="Bootstrap" width="40" height="40"
                    loading="lazy"></a>
            <a class="navbar-brand" href="https://www.dei.ac.in/dei/">DEI Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://admission.dei.ac.in:8085/cms_new/">DEI CMS<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="https://www.dei.ac.in/dei/files/IQAC/2022/CAS_GUIDELINES_2018.pdf">CAS
                            GUIDELINES<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">

                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" formaction="index.html">Log
                        Out</button>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"
                        formaction="home.html">Back</button>
                </form>
            </div>
        </nav>
        <br>
        <form action="#" method="post" enctype="multipart/form-data" autocomplete="off">
      
        <h4 style="text-decoration:underline; text-align: center;">PART B: ASSESSMENT OF PERFORMANCE</h4>
        <h5 style="text-decoration:underline; text-align: center;"> Information for the Year <input type="text"
                maxlength="4" style="width: 80px;">to<input type="text" maxlength="4"
                style="width:80px; text-decoration: underline;">.</h5>
        <div style="margin-left: 100px; margin-right: 100px;">
            <div>

                <b> <label for="#" ; style="text-decoration:underline;">Category II: Research, Publications and Academic
                        Contributions</label>
                </b> <br>
                <label for="#" ;> <b>1. &nbsp Research Papers published in Peer Reviewed or UGC listed Journals:
                        (With Evidences)
                    </b> </label><br>
                    <label for="#"> Title with Page Nos</label>
                        <input type=" text" name='title' class="form-control" id="title"><br>


                        <label for="#"> Journal & Date of Publication</label>
                        <input type=" text" name='date' class="form-control" id="date"><br>
                        <label for="#">ISSN / ISBN No. of Publication</label>
                        <input type=" text" name='issn' class="form-control" id="issn"><br>
                        <label for="#"> Whether Peer Reviewed Impact
                            Factor,
                            if any</label>
                        <input type=" text" name='review' class="form-control" id="review"><br>
                       
                       
                        <label for="#"> No. of co-authors</label>
                        <input type=" text" class="form-control" name='noAuth' id="noAuth"><br>
                        <label for="#"> Whether you are the main author</label>
                        <input type=" text" class="form-control" name='main' id="main"><br>
                        <label for="#"> Score,
                            (Please refer
                            Table 2: Appendix II) author</label>
                        <input type=" text" class="form-control" name='score' id="score"><br>

                        

                        <!-- <label for="#"> Gender</label>
                        <label for="male" class="radio-inline"> <input type="radio" name="gender" id="male"> Male
                        </label>
                        <label for="female" class="radio-inline"> <input type="radio" name="gender" id="female"> Female
                        </label>
                        <label for="others" class="radio-inline"> <input type="radio" name="gender" id="others"> Others
                        </label>
                           <br>
                        <label for="#">Phone Number</label>
                        <input type="" class="form-control" id="number" required placeholder="">


                        <label for="#"> Email</label>
                        <input type="email" class="form-control" id="email" required placeholder="abc@gamil.com">



                        <label for="#"> Password</label>
                        <input type="password" class="form-control" id="password" required>


                        <label for="#"> Confirm Password</label>
                        <input type="password" class="form-control" id="password" required> -->



                        <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                            Submit
                        </a> -->
                        <div class="input_field">
                            <input type="submit" value="Submit" name="submit-1" class="button" id="submit">
                            <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                                Export
                            </a>
                        </div>
                         
                    <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      

                   <table class="researchTable">
                    <!-- <thead> -->
                        <tr>
                            <th>Title with Page Nos</th>
                            <th>Journal & Date of Publication</th>
                            <th>ISSN / ISBN No. of Publication</th>
                            <th>Whether Peer Reviewed Impact Factor, if any</th>
                            <th>No. of co-authors</th>
                            <th>Whether you are the main author</th>
                            <th>Score (Please refer Table 2: Appendix II) author</th>
                        </tr>
                    <!-- </thead> -->
                     <tbody>
                    
                <?php
                // session_start();
                 $showAlert = false;
                //  $showData = '';
                 $data_array = array();
                //  $data_array= '';
                 $data = '';
                 //    if($_SERVER['REQUEST_METHOD'] == "POST")
                 //     { 
                     if(isset($_POST['submit-1']) )
// {                             $_SESSION['form_submitted'] = true;
  {
                         $titleNo = $_POST["title"];
                         $date = $_POST["date"];
                         $issnNo = $_POST["issn"];
                         $review = $_POST["review"];
                         $noAuth = $_POST["noAuth"];
                         $score = $_POST["score"];
                         $main = $_POST["main"];
                 
                         $query = "INSERT INTO `researchpaper` (`Title with Page Nos`, `Journal & Date of Publication`, `ISSN / ISBN No. of Publication`, `Whether Peer Reviewed Impact Factor, if any`, `No. of co-authors`,`Whether you are the main author`, `Score author`) VALUES ('$titleNo', '$date', '$issnNo', '$review', '$noAuth', '$main','$score')";
                       
                          $data = mysqli_query($conn, $query);
                          
                        
                          $sql = "SELECT * FROM `researchpaper` order by `Journal & Date of Publication` DESC";
                          $dataArray = mysqli_query($conn, $sql);
                          mysqli_close($conn);

  }
                        //   $sql = "SELECT * FROM `researchpaper` order by `Journal & Date of Publication` DESC";
                        //   $dataArray = mysqli_query($conn, $sql);
                       

?>
<?php
                        // mysqli_open($conn);
                      
                        
                           if($data)
                           { $showAlert = true;
                              while($rows = mysqli_fetch_assoc($dataArray))
                                 { $data_array[] = $rows; }
                                 
                 
                         }
                        
                         if($showAlert){
                        //    header("Locat+000477ion:CASpartB2.php");

                        //   echo" Data Inserted into db";
                         } 
                       else {
                          
                        echo "failed".mysqli_error($conn); }
                 ?>
                      

                      <!-- mysqli_close($conn); ?> -->
                      
                    <!-- //   if($showAlert){
                    // //   header('Location: CASpartB2.php');
                    //   exit(); } -->
            
                  <?php     foreach($data_array as $showData){ ?>

                          <tr>
                            <td><?php echo $showData ['Title with Page Nos']; ?></td>
                            <td><?php echo $showData ['Journal & Date of Publication']; ?></td>
                            <td><?php echo $showData ['ISSN / ISBN No. of Publication']; ?></td>
                            <td><?php echo $showData ['Whether Peer Reviewed Impact Factor, if any']; ?></td>
                            <td><?php echo $showData ['No. of co-authors']; ?></td>
                            <td><?php echo $showData ['Whether you are the main author']; ?></td>
                            <td><?php echo $showData ['Score author']; ?></td>
                          </tr>
                        <?php }
                        
                        // $insertQuery = "INSERT INTO `researchpaper`(`Title with Page Nos`, `Journal & Date of Publication`, `ISSN / ISBN No. of Publication`, `Whether Peer Reviewed Impact Factor, if any`, `No. of co-authors`, `Whether you are the main author`, `Score author`) VALUES ('','','','','','','');
                       
                        
                        
                        ?>
                     </tbody>

                   </table>
                  
<!-- <table frame="box">
                    <tr class="table">
                        <td align="center">
                            S.N.
                        </td>
                        <td align="center">Title with <br> Page Nos.</td>
                        <td align="center">Journal & Date <br> of Publication</td>
                        <td align="center">ISSN/ <br>
                            ISBN No.
                        </td>
                        <td align="center">Whether Peer <br> Reviewed Impact <br>
                            Factor,
                            if any
                        </td>
                        <td align="center">No. of <br> co-authors</td>
                        <td align="center">Whether you <br> are the main <br> author</td>
                        <td align="center">Score
                            (Please <br> refer
                            Table 2:<br> Appendix II)
                        </td>
                    </tr>
                    <tr>

                        <td> <input type="text" required style="width: 70px; text-align: center;"></td>
                        <td> <input type="text" name="Title1" required style="width: 140px; text-align: center;"></td>
                        <td> <input type="text" name="Journal1" required style="width: 140px; text-align: center;"></td>
                        <td> <input type="text" name="ISSN1" required style="width: 140px; text-align: center;"></td>
                        <td> <input type="text" name="Impact1" required style="width: 140px; text-align: center;"></td>
                        <td> <input type="text" name="co_authors1" required style="width: 140px; text-align: center;"></td>
                        <td> <select name="main_author1" style="width:140px; text-align: center;" class="combobox"  size="1" required>
                                <option value="">--Yes/No--</option>
                                <option value="o1">Yes</option>
                                <option value="02">No</option>
                            </select></td>
                        <td> <input type="text" name="Score1" required style="width: 140px; text-align: center;"></td>
                    </tr> -->
                    <!-- <tr>

                        <td> <input type="text" required style="width: 70px; text-align: center;"></td>
                        <td> <input type="text" name="Title2" required style="width: 140px; text-align: center;"></td>
                        <td> <input type="text" name="Journal2" required style="width: 140px; text-align: center;"></td>
                        <td> <input type="text" name="ISSN2" required style="width: 140px; text-align: center;"></td>
                        <td> <input type="text" name="Impact2" required style="width: 140px; text-align: center;"></td>
                        <td> <input type="text" name="co_authors2" required style="width: 140px; text-align: center;"></td>
                        <td> <select  name="main_author2" style="width:140px; text-align: center;" class="combobox"  required>
                                <option value="">--Yes/No--</option>
                                <option value="o1">Yes</option>
                                <option value="02">No</option>
                            </select></td>
                        <td> <input type="text" name="Score2" required style="width: 140px; text-align: center;"></td>
                    </tr> -->
                    <!-- <tr>

                        <td> <input type="text" required style="width: 70px; text-align: center;"></td>
                        <td> <input type="text" name="Title3" required style="width: 140px; text-align: center;"></td>
                        <td> <input type="text" name="Journal3" required style="width: 140px; text-align: center;"></td>
                        <td> <input type="text" name="ISSN3" required style="width: 140px; text-align: center;"></td>
                        <td> <input type="text" name="Impact3" required style="width: 140px; text-align: center;"></td>
                        <td> <input type="text" name="co_authors3" required style="width: 140px; text-align: center;"></td>
                        <td> <select  name="main_author3" style="width:140px; text-align: center;" class="combobox"  size="1" required>
                                <option value="">--Yes/No--</option>
                                <option value="o1">Yes</option>
                                <option value="02">No</option>
                            </select></td>
                        <td> <input type="text" name="Score3" required style="width: 140px; text-align: center;"></td>
                    </tr> -->
                    <!-- <tr> -->
                        <!-- <td colspan="7" style="text-align:center" ;>Total Score</td> -->
                       <!-- <input type='submit' value='Submit' > -->
                       <!-- <td colspan="7" style="text-align: center;"> Total Score</td>
                        <td><input type="text" name="TS" required style="width: 140px;"></td> -->
                        
                    <!-- </tr>
                    <tr>
                    <td>
                        <div class="submit">
                   <input type='submit' class= 'container btn btn-primary' value='Submit' name='submit' id='submit' >
                </div>   
                </td>
                    </tr>
                </table> -->





























                <!-- <br>
                <label for="#"> <b> 2. Publications (other than Research Papers):(With Evidences) </b></label>
                <br>
                <label for="#">2(a). Books authored which are published by International/National Publishers, Chapter in
                    Edited Book, Editor of Book by International/ National Publisher</label>
                <table frame="box">
                    <tr>
                        <td align="center">S.No.</td>
                        <td align="center">Chapter Title with page nos. <br> & year of Publication</td>
                        <td align="center">Book Title, editor <br> & publisher</td>
                        <td align="center">ISSN/
                            ISBN No.
                        </td>
                        <td align="center">No. of
                            co-authors
                        </td>
                        <td align="center">Are you Main <br> Author</td>
                        <td align="center">National / <br> International</td>
                        <td align="center">Score
                            (Please <br> refer
                            Table 2:<br> Appendix II)
                        </td>
                    <tr>
                        <td><input type="text" required style="width: 70px;"></td>
                        <td><input type="text" name="Chapter1" required style="width: 200px;"></td>
                        <td><input type="text" name="Book1" required style="width: 140px;"></td>
                        <td><input type="text" name="ISBN1" required style="width: 140px;"></td>
                        <td><input type="text" name="Authors1" required style="width: 140px;"></td>
                        <td><input type="text" name="MainA1" required style="width: 140px;"></td>
                        <td><input type="text" name="National1" required style="width: 140px;"></td>
                        <td><input type="text" name="S1" required style="width: 140px;"></td>
                    </tr>
                     -->





























                    <!-- <tr>
                        <td><input type="text" required style="width: 70px;"></td>
                        <td><input type="text" name="Chapter2" required style="width: 200px;"></td>
                        <td><input type="text" name="Book2" required style="width: 140px;"></td>
                        <td><input type="text" name="ISBN2" required style="width: 140px;"></td>
                        <td><input type="text" name="Authors2" required style="width: 140px;"></td>
                        <td><input type="text" name="MainA2" required style="width: 140px;"></td>
                        <td><input type="text" name="National2" required style="width: 140px;"></td>
                        <td><input type="text" name="S2" required style="width: 140px;"></td>
                    </tr> -->
                    <!-- <tr>
                        <td><input type="text" required style="width: 70px;"></td>
                        <td><input type="text" name="Chapter3" required style="width: 200px;"></td>
                        <td><input type="text" name="Book3" required style="width: 140px;"></td>
                        <td><input type="text" name="ISBN3" required style="width: 140px;"></td>
                        <td><input type="text" name="Authors3" required style="width: 140px;"></td>
                        <td><input type="text" name="MainA3" required style="width: 140px;"></td>
                        <td><input type="text" name="National3" required style="width: 140px;"></td>
                        <td><input type="text" name="S3" required style="width: 140px;"></td>
                    </tr> -->
                 
                 
                 
                 
                 
                 
<!--                  
                 
                 
                    <tr>
                        <td colspan="7" style="text-align: center;"> Total Score</td>
                        <td><input type="text" name="TS" required style="width: 140px;"></td>
                    </tr>
                    

                    </tr>
                    <tr>
                    <td>
                        <div class="submit">
                   <input type='submit' class= 'container btn btn-primary' value='Submit' name='submit' id='submit' >
                </div>   
                </td>
                    </tr> -->
                   
                   
                   
                   
                   
                   
                   
                   
                   
                    <!-- </tr> -->




<!-- 



                </table>
                <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

                 <input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
                 </div>      
                <br>
                <label for="#">2(b). Translation works in Indian and Foreign Languages by Qualified Faculties</label>
                <table frame="box">
                    <tr>
                        <td align="center">S.No.</td>
                        <td align="center">Chapter or Research Paper <br> or Book with Title, Page <br> Nos. &Year of
                            Publication</td>
                        <td align="center">Chapter/Research <br> Paper/Book <br> Editor & publisher
                        </td>
                        <td align="center">ISSN/
                            ISBN No.
                        </td>
                        <td align="center">No. of
                            co-authors
                        </td>
                        <td align="center">Are you Main Author</td>
                        <td align="center">National / <br> International</td>
                        <td align="center">Score (Please <br> refer
                            Table 2: <br> Appendix II)
                        </td>
                        <tr>
                            <td><input type="text" required style="width: 70px;"></td>
                            <td><input type="text" name="Chapter4" required style="width: 200px;"></td>
                            <td><input type="text" name="Book4" required style="width: 140px;"></td>
                            <td><input type="text" name="ISBN4" required style="width: 140px;"></td>
                            <td><input type="text" name="Authors4" required style="width: 140px;"></td>
                            <td><input type="text" name="MainA4" required style="width: 140px;"></td>
                            <td><input type="text" name="National4" required style="width: 140px;"></td>
                            <td><input type="text" name="S4" required style="width: 140px;"></td>
                        </tr>
                        <tr>
                            <td><input type="text" required style="width: 70px;"></td>
                            <td><input type="text" name="Chapter5" required style="width: 200px;"></td>
                            <td><input type="text" name="Book5" required style="width: 140px;"></td>
                            <td><input type="text" name="ISBN5" required style="width: 140px;"></td>
                            <td><input type="text" name="Authors5" required style="width: 140px;"></td>
                            <td><input type="text" name="MainA5" required style="width: 140px;"></td>
                            <td><input type="text" name="National5" required style="width: 140px;"></td>
                            <td><input type="text" name="S5" required style="width: 140px;"></td>
                        </tr>
                        <tr>
                            <td><input type="text" required style="width: 70px;"></td>
                            <td><input type="text" name="Chapter6" required style="width: 200px;"></td>
                            <td><input type="text" name="Book6" required style="width: 140px;"></td>
                            <td><input type="text" name="ISBN6" required style="width: 140px;"></td>
                            <td><input type="text" name="Authors6" required style="width: 140px;"></td>
                            <td><input type="text" name="MainA6" required style="width: 140px;"></td>
                            <td><input type="text" name="National6" required style="width: 140px;"></td>
                            <td><input type="text" name="S6" required style="width: 140px;"></td>
                        </tr>
                    <tr>
                        <td colspan="7" style="text-align:center ;"> Total Score</td>
                        <td> <input type="text" name="TS1" required style="width: 140px;" name="" id=""></td>
                    </tr>
                    </tr>
                </table>
                <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                <br>
                <label for="#"> <b> 3(a&b). Creation of ICT Mediated Teaching Learning Pedagogy and content development
                        of new
                        and innovative courses and curricula:</b> </label>
                <table frame="box">
                    <thead>
                        <tr>
                            <td align="center">
                                S.No.
                            </td>
                            <td align="center"> Activity
                                (Attach Evidences)
                            </td>
                            <td align="center">Publication Details
                            </td>
                            <td align="center">No. of Course(s)</td>
                            <td align="center">Score(Refer <br> Table 2: Appendix II)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">(a)</td>
                            <td>Development of Innovative Pedagogy</td>
                            <td><input type="text" name="Publication1" required style="width: 140px;"></td>
                            <td><input type="text" name="Course1" required style="width: 140px;"></td>
                            <td><input type="text" name="Sc1" required style="width: 140px;"></td>
                        </tr>
                        <tr>
                            <td align="center">(b)</td>
                            <td>Design of New Curricula and Courses</td>
                            <td><input type="text" name="Publication2" required style="width: 140px;"></td>
                            <td><input type="text" name="Course2" required style="width: 140px;"></td>
                            <td><input type="text" name="Sc2" required style="width: 140px;"></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: center;"> &nbsp; &nbsp; &nbsp; Total Score</td>
                            <td><input type="text" name="TS2" required style="width: 140px;"></td>
                        </tr>
                    </tbody>

                </table>
                <br>
                <label for="#">3(c) <b> MOOCs: </b></label>
                <table frame="box">
                    <thead>
                        <tr>
                            <td align="center">
                                S.No.
                            </td>
                            <td align="center"> Activity
                                (Attach Evidences)
                            </td>
                            <td align="center">Publication Details
                            </td>
                            <td align="center">No. of Course(s)</td>
                            <td align="center">Score
                                (Refer Table 2: Appendix II)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Development of complete MOOCs in 4 Quadrants (4 credit course)
                                (In case of MOOCs of lesser credits: 05 marks/credit)
                            </td>
                            <td><input name="Publication4" type="text"></td>
                            <td><input name="Course4" type="text"></td>
                            <td><input name="Score4" type="text"></td>
                        </tr>
                        <tr>
                            <td>(b)</td>
                            <td>MOOCs (developed in 4 Quadrants) per module/lecture</td>
                            <td><input name="Publication5" type="text"></td>
                            <td><input name="Course5" type="text"></td>
                            <td><input name="Score5" type="text"></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Content writer/subject matter expert for each module of MOOCs
                                (at least 1 quadrant)
                            </td>
                            <td><input name="Publication6" type="text"></td>
                             <td><input name="Course6" type="text"></td>
                            <td><input name="Score6" type="text"></td>
                        </tr>
                        <tr>
                            <td>(b)</td>
                            <td>Course Coordinator for MOOCs
                                (4 credit course) (In case of MOOCs of lesser credits: 02 marks/credit)
                            </td>
                            <td><input name="Publication7" type="text"></td>
                            <td><input name="Course7" type="text"></td>
                            <td><input name="Score7" type="text"></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: center;"> Total Score</td>
                            <td> <input name="TS3" type="text"></td>
                        </tr>
                    </tbody>

                </table>
                <br>
                <label for="#">3(d) <b>e-Content </b></label>
                <table frame="box">
                    <thead>
                        <tr>
                            <td align="center">
                                S.No.
                            </td>
                            <td align="center"> Activity
                                (Attach Evidences)
                            </td>
                            <td align="center">Publication Details
                            </td>
                            <td align="center">No. of Course(s)</td>
                            <td align="center">Score
                                (Refer Table 2: <br> Appendix II)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Developmentof e-Contentin4 Quadrants for a complete course/e-book
                            </td>
                            <td><input name="Publication8" type="text"></td>
                            <td><input name="Course8" type="text"></td>
                            <td><input name="Score8" type="text"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>MOOCs (developed in 4 Quadrants) per module/lecture</td>
                            <td><input name="Publication9" type="text"></td>
                            <td><input name="Course9" type="text"></td>
                            <td><input name="Score9" type="text"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Contribution to development of e-content module in complete course/paper/e-book (at
                                least
                                one quadrant)
                            </td>
                            <td><input name="Publication10" type="text"></td>
                            <td><input name="Course10" type="text"></td>
                            <td><input name="Score10" type="text"></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Editor of e-content for complete course/ paper /e-book
                            </td>
                            <td><input name="Publication11" type="text"></td>
                            <td><input name="Course11" type="text"></td>
                            <td><input name="Score11" type="text"></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: center;"> Total Score</td>
                            <td> <input name="TS4" type="text"></td>
                        </tr>
                    </tbody>

                </table>
                <br>
                <label for="#">4(a) <b>Research Guidance:(With Evidences) </b></label>
                <table frame="box">
                    <thead>
                        <tr>
                            <td align="center">
                                S.No.
                            </td>
                            <td align="center">Dissertation
                            </td>
                            <td align="center">Number Enrolled
                            </td>
                            <td align="center">Thesis Submitted</td>
                            <td align="center">Degree awarded with <br> year of award
                            </td>
                            <td align="center">Score
                                (Please refer <br> Table 2: Appendix II)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">1</td>
                            <td>M. Phil/PG
                            </td>
                            <td><input name="number1" type="text"></td>
                            <td><input name="thesis1" type="text"></td>
                            <td><input name="degree1" type="text"></td>
                            <td><input name="score12" type="text"></td>
                        </tr>
                        <tr>
                            <td align="center">2</td>
                            <td>Ph.D. or Equivalent</td>
                            <td><input name="number2" type="text"></td>
                            <td><input name="thesis2" type="text"></td>
                            <td><input name="degree2" type="text"></td>
                            <td><input name="score13" type="text"></td>

                        </tr>
                        <tr>
                            <td colspan="5" style="text-align: center;"> Total Score</td>
                            <td> <input name="TS5" type="text"></td>
                        </tr>
                    </tbody>

                </table>
                <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

                 <input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                <br>
                <label for="#">4(b) <b>Research Projects Completed: (With Evidences)</b></label>
                <table frame="box">

                    <tbody></tbody>

                    <tr>
                        <td>
                            S.No.
                        </td>
                        <td>Title
                        </td>
                        <td>Agency
                        </td>
                        <td>Period</td>
                        <td>Grant/Amount (Rs.in Lakh)
                        </td>
                        <td>Score
                            (Please refer Table 2: <br> Appendix II)
                        </td>
                    </tr>

                    <tbody>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title1" type="text"></td>
                            <td><input name="agency1" type="text"></td>
                            <td><input name="period1" type="text"></td>
                            <td><input name="grant1" type="text"></td>
                            <td><input name="score14" type="text"></td>
                        </tr>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title2" type="text"></td>
                            <td><input name="agency2" type="text"></td>
                            <td><input name="period2" type="text"></td>
                            <td><input name="grant2" type="text"></td>
                            <td><input name="score15" type="text"></td>

                        </tr>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title3" type="text"></td>
                            <td><input name="agency3" type="text"></td>
                            <td><input name="period3" type="text"></td>
                            <td><input name="grant3" type="text"></td>
                            <td><input name="score16" type="text"></td>

                        </tr>

                        <tr>
                            <td colspan="5" style="text-align: center;"> Total Score</td>
                            <td> <input name="TS6" type="text"></td>
                        </tr>
                    </tbody>

                </table>
                <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                <br>
                <label for="#"> <b>Note: </b> More than 10 Lakh: 10 score &nbsp &nbsp Less than 10 Lakh: 5 score
                </label>
                <br>
                <label for="#">4(c) <b>Research Projects Ongoing: (With Evidences)</b></label>
                <table frame="box">
                    <tbody>
                        <tr>
                            <td>
                                S.No.
                            </td>
                            <td>Title
                            </td>
                            <td>Agency
                            </td>
                            <td>Period</td>
                            <td>Grant/Amount (Rs.in Lakh)
                            </td>
                            <td>Score
                                (Please refer Table 2: <br> Appendix II)
                            </td>
                        </tr>

                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title4" type="text"></td>
                            <td><input name="agency4" type="text"></td>
                            <td><input name="period4" type="text"></td>
                            <td><input name="grant4" type="text"></td>
                            <td><input name="score17" type="text"></td>
                        </tr>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title5" type="text"></td>
                            <td><input name="agency5" type="text"></td>
                            <td><input name="period5" type="text"></td>
                            <td><input name="grant5" type="text"></td>
                            <td><input name="score18" type="text"></td>
                        </tr>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title6" type="text"></td>
                            <td><input name="agency6" type="text"></td>
                            <td><input name="period6" type="text"></td>
                            <td><input name="grant6" type="text"></td>
                            <td><input name="score19" type="text"></td>
                        </tr>

                        <tr>
                            <td colspan="5" style="text-align: center;"> Total Score</td>
                            <td> <input name="TS7" type="text"></td>
                        </tr>
                    </tbody>

                </table>
                <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                <br>
                <label for="#"> <b>Note: </b> More than 10 Lakh: 10 score &nbsp &nbsp Less than 10 Lakh: 5 score
                </label>
                <br>
                <br>
                <label for="#">4(d) <b>Consultancy (With Evidences)</b></label>
                <table frame="box">
                    <thead>
                        <tr>
                            <td>
                                S.No.
                            </td>
                            <td>Title
                            </td>
                            <td>Agency
                            </td>
                            <td>Period</td>
                            <td>Grant/Amount (Rs.in Lakh)
                            </td>
                            <td>Score
                                (Please refer Table 2: <br> Appendix II)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title7" type="text"></td>
                            <td><input name="agency7" type="text"></td>
                            <td><input name="period7" type="text"></td>
                            <td><input name="grant7" type="text"></td>
                            <td><input name="score20" type="text"></td>
                        </tr>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title8" type="text"></td>
                            <td><input name="agency8" type="text"></td>
                            <td><input name="period8" type="text"></td>
                            <td><input name="grant8" type="text"></td>
                            <td><input name="score21" type="text"></td>
                        </tr>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title9" type="text"></td>
                            <td><input name="agency9" type="text"></td>
                            <td><input name="period9" type="text"></td>
                            <td><input name="grant9" type="text"></td>
                            <td><input name="score22" type="text"></td>
                        </tr>

                        <tr>
                            <td colspan="5" style="text-align: center;"> Total Score</td>
                            <td> <input name="TS8" type="text"></td>
                        </tr>
                    </tbody>

                </table>
                <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                <br>
                <label for="#">5(a) <b>Patents: (With Evidences)</b></label>
                <table frame="box">
                    <thead>
                        <tr>
                            <td>
                                S.No.
                            </td>
                            <td>Title
                            </td>
                            <td>Agency
                            </td>
                            <td>Period</td>
                            <td>National/ International
                            </td>
                            <td>Grant/Amount (Rs. in Lakh)</td>
                            <td>Score
                                (Please refer Table 2: Appendix II)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title10" type="text"></td>
                            <td><input name="agency10" type="text"></td>
                            <td><input name="period10" type="text"></td>
                            <td><input name="international1" type="text"></td>
                            <td><input name="grant10" type="text"></td>
                            <td><input name="score23" type="text"></td>
                        </tr>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title11" type="text"></td>
                            <td><input name="agency11" type="text"></td>
                            <td><input name="period11" type="text"></td>
                            <td><input name="international2" type="text"></td>
                            <td><input name="grant11" type="text"></td>
                            <td><input name="score24" type="text"></td>
                        </tr>

                        <tr>
                            <td colspan="6" style="text-align: center;"> Total Score</td>
                            <td> <input name="TS9" type="text"></td>
                        </tr>
                    </tbody>

                </table>
                <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                <br>
                <label for="#">5(b) <b>Policy Document (Submitted to an Internationalbody/ Organisation, like
                        UNO/UNESCO/World Bank/International Monetary Fund etc. or Central Government/ State Government)
                        (Attach Evidences)</b></label>
                <table frame="box">
                    <thead>
                        <tr>
                            <td>
                                S.No.
                            </td>
                            <td>Title
                            </td>
                            <td>Agency
                            </td>
                            <td>Date of submission</td>
                            <td>State/National/ International
                            </td>
                            <td>Grant/Amount (Rs. in Lakh)</td>
                            <td>Score
                                (Please refer Table 2: Appendix II)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title12" type="text"></td>
                            <td><input name="agency12" type="text"></td>
                            <td><input name="period12" type="text"></td>
                            <td><input name="international3" type="text"></td>
                            <td><input name="grant12" type="text"></td>
                            <td><input name="score25" type="text"></td>
                        </tr>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title13" type="text"></td>
                            <td><input name="agency13" type="text"></td>
                            <td><input name="period13" type="text"></td>
                            <td><input name="international4" type="text"></td>
                            <td><input name="grant13" type="text"></td>
                            <td><input name="score26" type="text"></td>
                        </tr>

                        <tr>
                            <td colspan="6" style="text-align: center;"> Total Score</td>
                            <td> <input name="TS10" type="text"></td>
                        </tr>
                    </tbody>

                </table>
                <br>
                <label for="#">5(c) <b>Awards/Fellowships: (With Evidences)</b></label>
                <table frame="box">
                    <thead>
                        <tr>
                            <td>
                                S.No.
                            </td>
                            <td>Award/Fellowship
                            </td>
                            <td>National/ International
                            </td>
                            <td>Score
                                (Please refer Table 2: <br> Appendix II)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                           
                                <td><input name="title14" type="text"></td>
                                <td><input name="international5" type="text"></td>
                                <td><input name="score27" type="text"></td>
    
                        </tr>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title15" type="text"></td>
                            <td><input name="international6" type="text"></td>
                            <td><input name="score28" type="text"></td>
                        </tr>

                        <tr>
                            <td colspan="3" style="text-align: center;"> Total Score</td>
                            <td> <input name="TS11" type="text"></td>
                        </tr>
                    </tbody>

                </table>
                <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                <br>
                <label for="#">6. <b>Invited lectures /Resource Person/paper presentation in Seminars/Conferences/full
                        paper
                        in Conferences proceedings (Paper presented in Seminars/ Conferences and also published as full
                        paper in Conference Proceedings will be counted only once)</b></label>
                <div class="container">
                    <div class="row col-md-6 col-md-offset-3 ">

                        <table frame="box" style="width: 100%;">
                            <thead>
                                <tr>
                                    <td>
                                        S.No.
                                    </td>
                                    <td>Activity
                                        (Attach Evidences)

                                    </td>
                                    <td>International (Abroad)/International (within Country)/ National/
                                        State/University
                                    </td>
                                    <td>Score
                                        (Please refer Table 2: Appendix II)
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" style="width:70px ;"></td>
                                    <td><input name="title16" type="text"></td>
                                    <td><input name="international7" type="text"></td>
                                    <td><input name="score29" type="text"></td>

                                </tr>
                                <tr>
                                    <td><input type="text" style="width:70px ;"></td>
                                    <td><input name="title17" type="text"></td>
                                    <td><input name="international8" type="text"></td>
                                    <td><input name="score30" type="text"></td>
                                </tr>

                                <tr>
                                    <td colspan="3" style="text-align: center;"> Total Score</td>
                                    <td> <input name="TS12" type="text"></td>
                                </tr>
                            </tbody>

                        </table>
                        <label for="#"> <b> Grand Total-Category II </b>(Sum of 1 to 6) &nbsp &nbsp &nbsp <input
                                type="text"></label>
                    </div>
                </div>
                <br>
                <br>
                <h5 style="text-decoration:underline ;text-align: center;">SUMMARY OF GRADING & SCORE</h5>

                <table class="table" frame="box" style="width: 100%;">
                    <thead>
                        <tr>
                            <td>
                                Category
                            </td>
                            <td>Criteria</td>
                            <td>Overall Grading*
                                (Category I)
                                (1A and 1B) </td>
                            <td>Name of Activity attended
                                (As per Clause 6.4 of Regulations
                                for Category I-1C)

                            </td>
                            <td>Total Score (Category II)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> I</td>
                            <td colspan="4"><b>Teaching, Learning and Evaluation related Activities: </b></td>
                        </tr>
                        <tr>
                            <td>1A</td>
                            <td> Teaching</td>
                            <td><input name="title18" type="text"></td>
                            <td><input name="international9" type="text"></td>
                            <td><input name="score31" type="text"></td>
                        </tr>
                        <tr>
                            <td>1B</td>
                            <td>Examination, Evaluation Activities & Administrative Support & Participation in Students’
                                Co-curricular & Extra-curricular Activities</td>
                                <td><input name="title19" type="text"></td>
                                <td><input name="international10" type="text"></td>
                                <td><input name="score32" type="text"></td>
                        </tr>
                        <tr>
                            <td>1C</td>
                            <td>Personal Development related to Teaching and Research Activities:</td>
                            <td><input name="title20" type="text"></td>
                            <td><input name="international11" type="text"></td>
                            <td><input name="score33" type="text"></td>

                        </tr>
                        <tr>
                            <td>II</td>
                            <td><b>Research, Publication and Academic Contribution.</b></td>
                            <td><input name="title21" type="text"></td>
                            <td><input name="international12" type="text"></td>
                            <td><input name="score34" type="text"></td>
                        </tr>
                    </tbody>

                </table>


                <p>
                    &nbsp <b>*Overall Grading:</b>
                    <br>
                    <b>Good:</b> &nbsp Good in Teaching (1A of Category I) and Satisfactory or Good in Activity in 1B of
                    Category I, or
                    <br>
                    <b>Satisfactory:</b> &nbsp Good in Teaching (1A of Category I) and Satisfactory or Good in Activity
                    in
                    1B of Category I, or
                    <br>
                    <b>Not Satisfactory:</b> &nbsp If neither Good nor Satisfactory in Overall Grading.
                    <br>
                    <b>List of Enclosures:</b> &nbsp (Please attach, copies of certificates, sanction orders, papers
                    etc.
                    wherever necessary)
                    <br>
                </p>
                <table>
                    <tr>
                        <td>1</td>
                        <td><input name="Enclosures1" type="text"></td>
                        <td>6</td>
                        <td><input name="Enclosures2" type="text"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input name="Enclosures3" type="text"></td>
                        <td>7</td>
                        <td><input name="Enclosures4" type="text"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><input name="Enclosures5" type="text"></td>
                        <td>8</td>
                        <td><input name="Enclosures6" type="text"></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><input name="Enclosures7" type="text"></td>
                        <td>9</td>
                        <td><input name="Enclosures8" type="text"></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><input name="Enclosures9" type="text"></td>
                        <td>10</td>
                        <td><input name="Enclosures10" type="text"></td>
                    </tr>

                </table>
            </div>
        </div>
        <div style="margin-left: 100px; margin-right: 100px;">
            <label for="#">I certify that the information provided is correct as per records available with the
                university and/or documents enclosed along with the duly filled Assessment Criteria and Methodology
                proforma.</label>



            <br> &nbsp
            <br> &nbsp
            <br>
            <br> &nbsp
            <br> &nbsp

            <label for="#">Signature of the Faculty Member <br>
                Designation, Place and Date</label>
            <label for="#">Certified that the information submitted by Prof./ Dr. __________________________ is verified
                and
                I recommend his / her promotion to next level as he / she has completed all necessary requirements
                stipulated and being enforced as on today, by UGC.

            </label>
            <br> &nbsp
            <br> &nbsp
            <br>
            <p style="text-align:right ;">Signatures of HoD with Stamp</p>
            <label for="#">Verified and recommended for promotion to next level.</label>
            </label>
            <br> &nbsp
            <br> &nbsp
            <br>
            <p style="text-align:right ;">Signatures of Dean with Stamp</p>
            <label for="#">N.B.: The Dean and Head will assure that the information submitted by the faculty member is
                correct on the basis of evidences submitted and by signing above; they are verifying information and
                recommending the faculty member for promotion.</label>

        </div>

        <br>
        <br>
        <div class="container"> <button type="submit"class="btn btn-primary">Save</button>
        </div>
        <br>
        <br> -->
    </form>
 

<script>


// const tiltle = document.querySelector("#tiltle");
// const date = document.querySelector("#date");
// const issn = document.querySelector("#issn");
// const review = document.querySelector("#review");
// const noAuth = document.querySelector("#noAuth");
// const main = document.querySelector("#main");
// const score = document.querySelector("#score");



</script> 


   

</body>

</html>