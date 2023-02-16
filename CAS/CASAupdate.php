<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script>
    function setBillingAddress() {
      document.getElementById("inputPAddress").value = document.getElementById("inputAddress").value;
      document.getElementById("inputPCity").value = document.getElementById("inputCity").value;
      document.getElementById("inputPState").value = document.getElementById("inputState").value;
      document.getElementById("inputPZip").value = document.getElementById("inputZip").value;

    }
  </script>
  <title>CAS Proforma Part-A </title>
</head>

<body>

  <div class="blockquote text-center">
    <h3>Dayalbagh Educational Institute</h3>
    <h4>(Deemed To Be University)</h4>
    <h4>Dayalbagh, Agra</h4>
    <h5>Assessment Criteria and Methodology Proforma for Promotion under CAS </h5>

  </div>
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

        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" formaction="index.html">Log Out</button>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" formaction="home.html">Back</button>
      </form>
    </div>
  </nav>
  &nbsp
  <!--for space between two tags-->
  <hr style="border-top: 1mm solid black ;">
  <h4 style="text-decoration:underline; text-align: center;"> PART A: GENERAL INFORMATION AND ACADEMIC BACKGROUND</h4>

  <form action="CASpartA.php" method="post">
    <div class="container">
     <div class="row col-md-6 col-md-offset-3 ">
     <!--
              $query = "SELECT * FROM casa2 WHERE username = '$username' ";
              $query_run = mysqli_query($conn , $query);
              if(mysqli_num_rows($query_run) > 0) {
              foreach($query_run as $row)
              {$matrix = $row['LocalAddress']; -->
       <?php
       include_once('CASconn.php');
       if(isset($_GET['un']))  {
       $username = $_GET['un'];
{
      $query1 = "SELECT * FROM casa1 WHERE username = '$username'";
      $query2 = "SELECT * FROM casa2 WHERE username = '$username'";
      $result1 = mysqli_query($conn,$query1);
      $result2 = mysqli_query($conn,$query2);
      $row = mysqli_fetch_assoc($result1);
      $row1 = mysqli_fetch_assoc($result2);

       ?>
        <div class="container panel-body">
          <form action="home.html">
            <div class="form-group">
              <label for="#">1. Name (in Block Letters):</label>
              <input type="text" name="name" class="form-control" value="<?= $row['name']; ?>"id="firstname" required>
            </div>
            <div class="form-group">
              <label for="#">2. Father’s Name/Mother’s Name:</label>
              <input type=" text" name="Fname" class="form-control"value="<?= $row['Fname']; ?>" id="laststname" required>
            </div>
            <div class="form-group">
              <label for="#">3. Department:</label>
              <input type=" text" name="Department" class="form-control"value="<?= $row['Department']; ?>" id="firstname" required>
            </div>
            <div class="form-group">
              <label for="#">4. Current Designation & Level in Pay Matrix:</label>
              <input type=" text" name="CDLPM" class="form-control" value="<?= $row['CDLPM']; ?>"id="laststname" required>
            </div>
            <div class="form-group">
              <label for="#">5. Date of last Promotion:</label>
              <input type="date" name="DLP" class="form-control"value="<?= $row['DLP']; ?>" id="firstname" required>
            </div>
            <div class="form-group">
              <label for="#">6. Which position and Level are you an applicant under CAS?</label>
              <input type=" text" name="Position"value="<?= $row['Position']; ?>" class="form-control" id="laststname" required>
            </div>
            <div class="form-group">
              <label for="#">7. Date of eligibility for promotion:</label>
              <input type="date" name="DEP" class="form-control"value="<?= $row['DEP']; ?>" id="firstname" required>
            </div>
            <div class="form-group">
              <label for="#">8. Date and Place of Birth:</label>
              <input type=" text" name="POB" class="form-control"value="<?= $row['POB']; ?>" id="laststname" placeholder="Place" required>

              <input type="date" name="DOB" class="form-control"value="<?= $row['DOB']; ?>" id="laststname" required>
            </div>
            <br>

            <div class="form-group">
              <label for="#">9. Gender:</label>
              <div class="form-control">
                <select name="Gender" id="sex" style="border: solid white ;" required>
                  <option value="<?= $row['Gender']; ?>"> <?php echo $row['Gender']; ?> </option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Others">Others</option>
                 </select>
              </div>
            </div>
            <div class="form-group">
              <label for="#">10. Marital status:</label>
              <div class="form-control">
                <select name="MaritalStatus" id="sex" style="border: solid white ;" required>
                  
                  <option value="<?php echo $row['MaritalStatus']; ?>"> <?php echo $row['MaritalStatus']; ?> </option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="#"> &nbsp 11. Nationality:</label>
              <div class="form-control">
                <select name="Nationality" style="border: 0px white;" required>
                  <option value="<?= $row['Nationality']; ?>"> <?=  $row['Nationality']; ?> </option>
                  <option value="afghan">Afghan</option>
                  <option value="albanian">Albanian</option>
                  <option value="algerian">Algerian</option>
                  <option value="american">American</option>
                  <option value="andorran">Andorran</option>
                  <option value="angolan">Angolan</option>
                  <option value="antiguans">Antiguans</option>
                  <option value="argentinean">Argentinean</option>
                  <option value="armenian">Armenian</option>
                  <option value="australian">Australian</option>
                  <option value="austrian">Austrian</option>
                  <option value="azerbaijani">Azerbaijani</option>
                  <option value="bahamian">Bahamian</option>
                  <option value="bahraini">Bahraini</option>
                  <option value="bangladeshi">Bangladeshi</option>
                  <option value="barbadian">Barbadian</option>
                  <option value="barbudans">Barbudans</option>
                  <option value="batswana">Batswana</option>
                  <option value="belarusian">Belarusian</option>
                  <option value="belgian">Belgian</option>
                  <option value="belizean">Belizean</option>
                  <option value="beninese">Beninese</option>
                  <option value="bhutanese">Bhutanese</option>
                  <option value="bolivian">Bolivian</option>
                  <option value="bosnian">Bosnian</option>
                  <option value="brazilian">Brazilian</option>
                  <option value="british">British</option>
                  <option value="bruneian">Bruneian</option>
                  <option value="bulgarian">Bulgarian</option>
                  <option value="burkinabe">Burkinabe</option>
                  <option value="burmese">Burmese</option>
                  <option value="burundian">Burundian</option>
                  <option value="cambodian">Cambodian</option>
                  <option value="cameroonian">Cameroonian</option>
                  <option value="canadian">Canadian</option>
                  <option value="cape verdean">Cape Verdean</option>
                  <option value="central african">Central African</option>
                  <option value="chadian">Chadian</option>
                  <option value="chilean">Chilean</option>
                  <option value="chinese">Chinese</option>
                  <option value="colombian">Colombian</option>
                  <option value="comoran">Comoran</option>
                  <option value="congolese">Congolese</option>
                  <option value="costa rican">Costa Rican</option>
                  <option value="croatian">Croatian</option>
                  <option value="cuban">Cuban</option>
                  <option value="cypriot">Cypriot</option>
                  <option value="czech">Czech</option>
                  <option value="danish">Danish</option>
                  <option value="djibouti">Djibouti</option>
                  <option value="dominican">Dominican</option>
                  <option value="dutch">Dutch</option>
                  <option value="east timorese">East Timorese</option>
                  <option value="ecuadorean">Ecuadorean</option>
                  <option value="egyptian">Egyptian</option>
                  <option value="emirian">Emirian</option>
                  <option value="equatorial guinean">Equatorial Guinean</option>
                  <option value="eritrean">Eritrean</option>
                  <option value="estonian">Estonian</option>
                  <option value="ethiopian">Ethiopian</option>
                  <option value="fijian">Fijian</option>
                  <option value="filipino">Filipino</option>
                  <option value="finnish">Finnish</option>
                  <option value="french">French</option>
                  <option value="gabonese">Gabonese</option>
                  <option value="gambian">Gambian</option>
                  <option value="georgian">Georgian</option>
                  <option value="german">German</option>
                  <option value="ghanaian">Ghanaian</option>
                  <option value="greek">Greek</option>
                  <option value="grenadian">Grenadian</option>
                  <option value="guatemalan">Guatemalan</option>
                  <option value="guinea-bissauan">Guinea-Bissauan</option>
                  <option value="guinean">Guinean</option>
                  <option value="guyanese">Guyanese</option>
                  <option value="haitian">Haitian</option>
                  <option value="herzegovinian">Herzegovinian</option>
                  <option value="honduran">Honduran</option>
                  <option value="hungarian">Hungarian</option>
                  <option value="icelander">Icelander</option>
                  <option value="indian">Indian</option>
                  <option value="indonesian">Indonesian</option>
                  <option value="iranian">Iranian</option>
                  <option value="iraqi">Iraqi</option>
                  <option value="irish">Irish</option>
                  <option value="israeli">Israeli</option>
                  <option value="italian">Italian</option>
                  <option value="ivorian">Ivorian</option>
                  <option value="jamaican">Jamaican</option>
                  <option value="japanese">Japanese</option>
                  <option value="jordanian">Jordanian</option>
                  <option value="kazakhstani">Kazakhstani</option>
                  <option value="kenyan">Kenyan</option>
                  <option value="kittian and nevisian">Kittian and Nevisian</option>
                  <option value="kuwaiti">Kuwaiti</option>
                  <option value="kyrgyz">Kyrgyz</option>
                  <option value="laotian">Laotian</option>
                  <option value="latvian">Latvian</option>
                  <option value="lebanese">Lebanese</option>
                  <option value="liberian">Liberian</option>
                  <option value="libyan">Libyan</option>
                  <option value="liechtensteiner">Liechtensteiner</option>
                  <option value="lithuanian">Lithuanian</option>
                  <option value="luxembourger">Luxembourger</option>
                  <option value="macedonian">Macedonian</option>
                  <option value="malagasy">Malagasy</option>
                  <option value="malawian">Malawian</option>
                  <option value="malaysian">Malaysian</option>
                  <option value="maldivan">Maldivan</option>
                  <option value="malian">Malian</option>
                  <option value="maltese">Maltese</option>
                  <option value="marshallese">Marshallese</option>
                  <option value="mauritanian">Mauritanian</option>
                  <option value="mauritian">Mauritian</option>
                  <option value="mexican">Mexican</option>
                  <option value="micronesian">Micronesian</option>
                  <option value="moldovan">Moldovan</option>
                  <option value="monacan">Monacan</option>
                  <option value="mongolian">Mongolian</option>
                  <option value="moroccan">Moroccan</option>
                  <option value="mosotho">Mosotho</option>
                  <option value="motswana">Motswana</option>
                  <option value="mozambican">Mozambican</option>
                  <option value="namibian">Namibian</option>
                  <option value="nauruan">Nauruan</option>
                  <option value="nepalese">Nepalese</option>
                  <option value="new zealander">New Zealander</option>
                  <option value="ni-vanuatu">Ni-Vanuatu</option>
                  <option value="nicaraguan">Nicaraguan</option>
                  <option value="nigerien">Nigerien</option>
                  <option value="north korean">North Korean</option>
                  <option value="northern irish">Northern Irish</option>
                  <option value="norwegian">Norwegian</option>
                  <option value="omani">Omani</option>
                  <option value="pakistani">Pakistani</option>
                  <option value="palauan">Palauan</option>
                  <option value="panamanian">Panamanian</option>
                  <option value="papua new guinean">Papua New Guinean</option>
                  <option value="paraguayan">Paraguayan</option>
                  <option value="peruvian">Peruvian</option>
                  <option value="polish">Polish</option>
                  <option value="portuguese">Portuguese</option>
                  <option value="qatari">Qatari</option>
                  <option value="romanian">Romanian</option>
                  <option value="russian">Russian</option>
                  <option value="rwandan">Rwandan</option>
                  <option value="saint lucian">Saint Lucian</option>
                  <option value="salvadoran">Salvadoran</option>
                  <option value="samoan">Samoan</option>
                  <option value="san marinese">San Marinese</option>
                  <option value="sao tomean">Sao Tomean</option>
                  <option value="saudi">Saudi</option>
                  <option value="scottish">Scottish</option>
                  <option value="senegalese">Senegalese</option>
                  <option value="serbian">Serbian</option>
                  <option value="seychellois">Seychellois</option>
                  <option value="sierra leonean">Sierra Leonean</option>
                  <option value="singaporean">Singaporean</option>
                  <option value="slovakian">Slovakian</option>
                  <option value="slovenian">Slovenian</option>
                  <option value="solomon islander">Solomon Islander</option>
                  <option value="somali">Somali</option>
                  <option value="south african">South African</option>
                  <option value="south korean">South Korean</option>
                  <option value="spanish">Spanish</option>
                  <option value="sri lankan">Sri Lankan</option>
                  <option value="sudanese">Sudanese</option>
                  <option value="surinamer">Surinamer</option>
                  <option value="swazi">Swazi</option>
                  <option value="swedish">Swedish</option>
                  <option value="swiss">Swiss</option>
                  <option value="syrian">Syrian</option>
                  <option value="taiwanese">Taiwanese</option>
                  <option value="tajik">Tajik</option>
                  <option value="tanzanian">Tanzanian</option>
                  <option value="thai">Thai</option>
                  <option value="togolese">Togolese</option>
                  <option value="tongan">Tongan</option>
                  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                  <option value="tunisian">Tunisian</option>
                  <option value="turkish">Turkish</option>
                  <option value="tuvaluan">Tuvaluan</option>
                  <option value="ugandan">Ugandan</option>
                  <option value="ukrainian">Ukrainian</option>
                  <option value="uruguayan">Uruguayan</option>
                  <option value="uzbekistani">Uzbekistani</option>
                  <option value="venezuelan">Venezuelan</option>
                  <option value="vietnamese">Vietnamese</option>
                  <option value="welsh">Welsh</option>
                  <option value="yemenite">Yemenite</option>
                  <option value="zambian">Zambian</option>
                  <option value="zimbabwean">Zimbabwean</option>
                </select>

              </div>
            </div>
            <div class="form-group">
              <label for="#">12. Category</label>
              <div class="form-control">
                <select name="Category" id="sex" style="border: 0px;" required>
                  <option value="">General</option>
                  <option value="male">OBC</option>
                  <option value="female">SC</option>
                  <option value="others">ST</option>
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">13. Email</label>
                <input type="email" name="Email" class="form-control"value="<?= $row['Email']; ?>" id="inputEmail4" placeholder="Email" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">14. Mobile Ph. No.:</label>
                <input type="text" name="Mob" class="form-control"value="<?= $row['Mob']; ?>" id="inputPassword4" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">15. Address for correspondence (with Pin code)</label>
              <?php  $locadd= $row['LocalAddress']; 
                    $local = explode(',',$locadd);
                    ?>
              <input type="text" class="form-control"value="<?= $local[0].','.$local[1].','.$local[2]; ?>" name="inputAddress" id="inputAddress" placeholder="1234 Main St" required>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control"value="<?= $local[3]; ?>" name="inputCity" id="inputCity" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" name="inputState" class="form-control" required>
                  <option value="<?= $local[4]; ?>" ><?= $local[4]; ?></option>
                  <option value="AP">Andhra Pradesh</option>
                  <option value="AR">Arunachal Pradesh</option>
                  <option value="AS">Assam</option>
                  <option value="BR">Bihar</option>
                  <option value="CT">Chhattisgarh</option>
                  <option value="GA">Gujarat</option>
                  <option value="HR">Haryana</option>
                  <option value="HP">Himachal Pradesh</option>
                  <option value="JK">Jammu and Kashmir</option>
                  <option value="GA">Goa</option>
                  <option value="JH">Jharkhand</option>
                  <option value="KA">Karnataka</option>
                  <option value="KL">Kerala</option>
                  <option value="MP">Madhya Pradesh</option>
                  <option value="MH">Maharashtra</option>
                  <option value="MN">Manipur</option>
                  <option value="ML">Meghalaya</option>
                  <option value="MZ">Mizoram</option>
                  <option value="NL">Nagaland</option>
                  <option value="OR">Odisha</option>
                  <option value="PB">Punjab</option>
                  <option value="RJ">Rajasthan</option>
                  <option value="SK">Sikkim</option>
                  <option value="TN">Tamil Nadu</option>
                  <option value="TG">Telangana</option>
                  <option value="TR">Tripura</option>
                  <option value="UT">Uttarakhand</option>
                  <option value="UP">Uttar Pradesh</option>
                  <option value="WB">West Bengal</option>
                  <option value="AN">Andaman and Nicobar Islands</option>
                  <option value="CH">Chandigarh</option>
                  <option value="DN">Dadra and Nagar Haveli</option>
                  <option value="DD">Daman and Diu</option>
                  <option value="DL">Delhi</option>
                  <option value="LD">Lakshadweep</option>
                  <option value="PY">Puducherry</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Pin Code</label>
                <input type="tel" class="form-control"value="<?= $local[5]; ?>" name="inputZip" id="inputZip" required>
              </div>
            </div>

            <div class="form-group">
              <label for="inputAddress">16. Permanent Address(with Pin code)</label>
              <!--   Check box   -->
              <?php  $peradd= $row['PermanentAddress']; 
                    $per = explode(',',$peradd);
                    ?>

              <div class="form-check">

                <label class="form-check-label" for="flexCheckDefault"> &nbsp
                  <input class="form-check-input" type="checkbox" onclick="setBillingAddress()" id="flexCheckDefault">
                  Same as Above:
                </label>
              </div>
              <br>
              <input type="text" class="form-control"value="<?= $per[0].','.$per[1].','.$per[2]; ?>" name="inputAddress" id="inputAddress" placeholder="1234 Main St" required>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control"value="<?= $per[3]; ?>" name="inputCity" id="inputCity" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" name="inputState" class="form-control" required>
                  <option value="<?= $per[4]; ?>" ><?= $per[4]; ?></option>
                  <option value="AP">Andhra Pradesh</option>
                  <option value="AR">Arunachal Pradesh</option>
                  <option value="AS">Assam</option>
                  <option value="BR">Bihar</option>
                  <option value="CT">Chhattisgarh</option>
                  <option value="GA">Gujarat</option>
                  <option value="HR">Haryana</option>
                  <option value="HP">Himachal Pradesh</option>
                  <option value="JK">Jammu and Kashmir</option>
                  <option value="GA">Goa</option>
                  <option value="JH">Jharkhand</option>
                  <option value="KA">Karnataka</option>
                  <option value="KL">Kerala</option>
                  <option value="MP">Madhya Pradesh</option>
                  <option value="MH">Maharashtra</option>
                  <option value="MN">Manipur</option>
                  <option value="ML">Meghalaya</option>
                  <option value="MZ">Mizoram</option>
                  <option value="NL">Nagaland</option>
                  <option value="OR">Odisha</option>
                  <option value="PB">Punjab</option>
                  <option value="RJ">Rajasthan</option>
                  <option value="SK">Sikkim</option>
                  <option value="TN">Tamil Nadu</option>
                  <option value="TG">Telangana</option>
                  <option value="TR">Tripura</option>
                  <option value="UT">Uttarakhand</option>
                  <option value="UP">Uttar Pradesh</option>
                  <option value="WB">West Bengal</option>
                  <option value="AN">Andaman and Nicobar Islands</option>
                  <option value="CH">Chandigarh</option>
                  <option value="DN">Dadra and Nagar Haveli</option>
                  <option value="DD">Daman and Diu</option>
                  <option value="DL">Delhi</option>
                  <option value="LD">Lakshadweep</option>
                  <option value="PY">Puducherry</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Pin Code</label>
                <input type="tel" class="form-control"value="<?= $per[5]; ?>" name="inputZip" id="inputZip" required>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">17. Academic Qualifications (Matric till post-graduation): </label>
              <!--  TABLE FOR COMPONENTS STARTS HERE-->
              <table cellspacing="5px" cellpadding="5px" width="100%">
 
              
                <tbody>
                  <tr align="left">
                    <td style="width: 450px;text-align:left;">Examination </td>

                    <td align="center">Name of Board <br>/University</td>
                    <td align="center">Year of Passing </td>
                    <td align="center"> Percentage of Marks Obtained </td>
                    <td align="center"> Division/Class <br>/Grade <br> </td>
                    <td align="center">Subjects</td>

                  </tr>

                  <tr>
                    <td>High School/Matrix </td>
                    <?php $matrix = $row1['Matrix']; 
                    $mat = explode(',',$matrix);
                    ?>
                    <td align="center">

                      <select name="Matrixboards" style="width:150px;" class="combobox" size="1" required>
                        <option value="<?=$mat[0] ?>"><?=$mat[0] ?>
                        </option>
                        <option value="4">ABSE GUWAHATI </option>
                        <option value="09">AHSEC GUWAHATI </option>
                        <option value="06">APBIE Hyderabad </option>
                        <option value="07">APBSE HYDERABAD </option>
                        <option value="08">APOSS HYDERABAD </option>
                        <option value="11">BIEC PATNA </option>
                        <option value="12">BSEB PATNA </option>
                        <option value="13">BSSB PATNA </option>
                        <option value="02">C.B.S.E </option>
                        <option value="14">CHBSE RAIPUR </option>
                        <option value="51">CISCE NEW DELHI </option>
                        <option value="15">GBSHSE GOA </option>
                        <option value="16">GSHSEB GANDHINAGAR </option>
                        <option value="17">HBE BHIWANI </option>
                        <option value="18">HOS BHIWANI </option>
                        <option value="19">HPBSE DHARAMSHALA </option>
                        <option value="01">I.C.S.E </option>
                        <option value="52">INDIAN SCHOOL CERTIFICATE
                        </option>
                        <option value="22">JHAC RANCHI </option>
                        <option value="20">JKSBSE JAMMU </option>
                        <option value="21">JKSOS SRINAGAR </option>
                        <option value="27">KBHSE THIRUVANANTHPURAM
                        </option>
                        <option value="26">KBPE THIRUVANANTHPURAM
                        </option>
                        <option value="23">KBPUE BANGALORE </option>
                        <option value="25">KOS MYSORE </option>
                        <option value="24">KSEEB BANGALORE </option>
                        <option value="28">KSOS THIRUVANANTHPURAM
                        </option>
                        <option value="33">MBSE IMPHAL </option>
                        <option value="35">MBSEC AIZAWL </option>
                        <option value="32">MCHSE IMPHAL </option>
                        <option value="34">MEBSE MEGHALAYA </option>
                        <option value="30">MPBSE BHOPAL </option>
                        <option value="31">MPSOS BHOPAL </option>
                        <option value="29">MSBSHSE PUNE </option>
                        <option value="36">NBSE KOHIMA </option>
                        <option value="50">NIOS NEW DELHI </option>
                        <option value="38">OBSE CUTTACK </option>
                        <option value="37">OCHSE BHUBANESWAR </option>
                        <option value="04">Others </option>
                        <option value="39">PSEB MOHALI </option>
                        <option value="40">RBSE AJMER </option>
                        <option value="41">RSOS JAIPUR </option>
                        <option value="43">TNBHSE CHENNAI </option>
                        <option value="42">TNBSE CHENNAI </option>
                        <option value="44">TRBSE TRIPURA WEST </option>
                        <option value="53">TSBIE </option>
                        <option value="54">TSBSE </option>
                        <option value="03">U.P Board </option>
                        <option value="45">USEPP NANITAL </option>
                        <option value="49">WBBME </option>
                        <option value="46">WBBSE CALCUTTA </option>
                        <option value="47">WBCHSE CALCUTTA </option>
                        <option value="48">WBCROS </option>
                        <option value="05">DAYALBAGH
                          EDUCATIONAL INSTITUTE </option>
                      </select>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" maxlength="4"value="<?=$mat[1] ?>"  name="MatrixpassingYears" style="width:100px;"
                         required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off"value="<?=$mat[2] ?>" name="Matrixpercentile" style="width:100px;"
                         required>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" name="Matrixdivision"value="<?=$mat[3] ?>" style="width:100px;"  required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" value="<?= $mat[4] ?>" name="Matrixsubjects" style="width:100px;" required>
                    </td>
                  </tr>

                  <tr>
                    <td>Intermediate</td>
                    <?php $inter = $row1['Intermediate']; 
                    $int = explode(',',$inter);
                    ?>
                    <td align="center">
                      <!-- <input type="hidden" name="brdUnivRequired" value="Y" required>
                      <input type="hidden" name="universityNeeded" value="N" required> -->
                      <select name="Interboards" style="width:150px;" class="combobox" size="1" required>
                        <option value="<?=$int[0] ?>"><?=$int[0] ?>
                        </option>
                        <option value="10">ABSE GUWAHATI </option>
                        <option value="09">AHSEC GUWAHATI </option>
                        <option value="06">APBIE Hyderabad </option>
                        <option value="07">APBSE HYDERABAD </option>
                        <option value="08">APOSS HYDERABAD </option>
                        <option value="11">BIEC PATNA </option>
                        <option value="12">BSEB PATNA </option>
                        <option value="13">BSSB PATNA </option>
                        <option value="02">C.B.S.E </option>
                        <option value="14">CHBSE RAIPUR </option>
                        <option value="51">CISCE NEW DELHI </option>
                        <option value="15">GBSHSE GOA </option>
                        <option value="16">GSHSEB GANDHINAGAR </option>
                        <option value="17">HBE BHIWANI </option>
                        <option value="18">HOS BHIWANI </option>
                        <option value="19">HPBSE DHARAMSHALA </option>
                        <option value="01">I.C.S.E </option>
                        <option value="52">INDIAN SCHOOL CERTIFICATE
                        </option>
                        <option value="22">JHAC RANCHI </option>
                        <option value="20">JKSBSE JAMMU </option>
                        <option value="21">JKSOS SRINAGAR </option>
                        <option value="27">KBHSE THIRUVANANTHPURAM
                        </option>
                        <option value="26">KBPE THIRUVANANTHPURAM
                        </option>
                        <option value="23">KBPUE BANGALORE </option>
                        <option value="25">KOS MYSORE </option>
                        <option value="24">KSEEB BANGALORE </option>
                        <option value="28">KSOS THIRUVANANTHPURAM
                        </option>
                        <option value="33">MBSE IMPHAL </option>
                        <option value="35">MBSEC AIZAWL </option>
                        <option value="32">MCHSE IMPHAL </option>
                        <option value="34">MEBSE MEGHALAYA </option>
                        <option value="30">MPBSE BHOPAL </option>
                        <option value="31">MPSOS BHOPAL </option>
                        <option value="29">MSBSHSE PUNE </option>
                        <option value="36">NBSE KOHIMA </option>
                        <option value="50">NIOS NEW DELHI </option>
                        <option value="38">OBSE CUTTACK </option>
                        <option value="37">OCHSE BHUBANESWAR </option>
                        <option value="04">Others </option>
                        <option value="39">PSEB MOHALI </option>
                        <option value="40">RBSE AJMER </option>
                        <option value="41">RSOS JAIPUR </option>
                        <option value="43">TNBHSE CHENNAI </option>
                        <option value="42">TNBSE CHENNAI </option>
                        <option value="44">TRBSE TRIPURA WEST </option>
                        <option value="53">TSBIE </option>
                        <option value="54">TSBSE </option>
                        <option value="03">U.P Board </option>
                        <option value="45">USEPP NANITAL </option>
                        <option value="49">WBBME </option>
                        <option value="46">WBBSE CALCUTTA </option>
                        <option value="47">WBCHSE CALCUTTA </option>
                        <option value="48">WBCROS </option>
                        <option value="05">DAYALBAGH EDUCATIONAL INSTITUTE </option>
                      </select>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" maxlength="4" name="InterpassingYears" style="width:100px;"
                        value="<?=$int[1] ?>" required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" name="Interpercentile" style="width:100px;"
                        value="<?=$int[2] ?>" required>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" name="Interdivision" style="width:100px;" value="<?=$int[3] ?>" required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" name="Intersubjects" style="width:100px;"
                        value="<?=$int[4] ?>" required>
                    </td>
                  </tr>


                  <tr>
                    <td>B.A/B.Sc/B.Com/B.Tech </td>
                    <?php $gra = $row1['Graduation']; 
                    $gr = explode(',',$gra);
                    ?>
                    <td align="center">
                      <!-- <input type="hidden" name="brdUnivRequired" value="Y" required>
                      <input type="hidden" name="universityNeeded" value="N" required> -->
                      <select name="Bachelorboards" style="width:150px;" class="combobox" size="1" required>
                        <option value="<?=$gr[0] ?>"><?=$gr[0] ?>
                        </option>
                        <option value="10">ABSE GUWAHATI </option>
                        <option value="09">AHSEC GUWAHATI </option>
                        <option value="06">APBIE Hyderabad </option>
                        <option value="07">APBSE HYDERABAD </option>
                        <option value="08">APOSS HYDERABAD </option>
                        <option value="11">BIEC PATNA </option>
                        <option value="12">BSEB PATNA </option>
                        <option value="13">BSSB PATNA </option>
                        <option value="02">C.B.S.E </option>
                        <option value="14">CHBSE RAIPUR </option>
                        <option value="51">CISCE NEW DELHI </option>
                        <option value="15">GBSHSE GOA </option>
                        <option value="16">GSHSEB GANDHINAGAR </option>
                        <option value="17">HBE BHIWANI </option>
                        <option value="18">HOS BHIWANI </option>
                        <option value="19">HPBSE DHARAMSHALA </option>
                        <option value="01">I.C.S.E </option>
                        <option value="52">INDIAN SCHOOL CERTIFICATE
                        </option>
                        <option value="22">JHAC RANCHI </option>
                        <option value="20">JKSBSE JAMMU </option>
                        <option value="21">JKSOS SRINAGAR </option>
                        <option value="27">KBHSE THIRUVANANTHPURAM
                        </option>
                        <option value="26">KBPE THIRUVANANTHPURAM
                        </option>
                        <option value="23">KBPUE BANGALORE </option>
                        <option value="25">KOS MYSORE </option>
                        <option value="24">KSEEB BANGALORE </option>
                        <option value="28">KSOS THIRUVANANTHPURAM
                        </option>
                        <option value="33">MBSE IMPHAL </option>
                        <option value="35">MBSEC AIZAWL </option>
                        <option value="32">MCHSE IMPHAL </option>
                        <option value="34">MEBSE MEGHALAYA </option>
                        <option value="30">MPBSE BHOPAL </option>
                        <option value="31">MPSOS BHOPAL </option>
                        <option value="29">MSBSHSE PUNE </option>
                        <option value="36">NBSE KOHIMA </option>
                        <option value="50">NIOS NEW DELHI </option>
                        <option value="38">OBSE CUTTACK </option>
                        <option value="37">OCHSE BHUBANESWAR </option>
                        <option value="04">Others </option>
                        <option value="39">PSEB MOHALI </option>
                        <option value="40">RBSE AJMER </option>
                        <option value="41">RSOS JAIPUR </option>
                        <option value="43">TNBHSE CHENNAI </option>
                        <option value="42">TNBSE CHENNAI </option>
                        <option value="44">TRBSE TRIPURA WEST </option>
                        <option value="53">TSBIE </option>
                        <option value="54">TSBSE </option>
                        <option value="03">U.P Board </option>
                        <option value="45">USEPP NANITAL </option>
                        <option value="49">WBBME </option>
                        <option value="46">WBBSE CALCUTTA </option>
                        <option value="47">WBCHSE CALCUTTA </option>
                        <option value="48">WBCROS </option>
                        <option value="05">DAYALBAGH EDUCATIONAL INSTITUTE </option>
                      </select>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" maxlength="4" name="BachelorpassingYears" style="width:100px;"
                        value="<?=$gr[1] ?>" required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" name="Bachelorpercentile" style="width:100px;"
                        value="<?=$gr[2] ?>" required>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" name="Bachelordivision" style="width:100px;" value="<?=$gr[3] ?>" required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" name="Bachelorsubjects" style="width:100px;"
                        value="<?=$gr[4] ?>" required>
                    </td>
                  </tr>
                  <tr>
                    <td>M.A/M.Sc/M.Com </td>
                    <?php $postgr = $row1['PostGraduation']; 
                    $pgr = explode(',',$postgr);
                    ?>
                    <td align="center">
                      <!-- <input type="hidden" name="brdUnivRequired" value="Y" required>
                      <input type="hidden" name="universityNeeded" value="N" required> -->
                      <select name="Mastersboards" style="width:150px;" class="combobox" size="1" required>
                        <option value="<?=$pgr[0] ?>"><?=$pgr[0] ?> </option>
                        <option value="10">ABSE GUWAHATI </option>
                        <option value="09">AHSEC GUWAHATI </option>
                        <option value="06">APBIE Hyderabad </option>
                        <option value="07">APBSE HYDERABAD </option>
                        <option value="08">APOSS HYDERABAD </option>
                        <option value="11">BIEC PATNA </option>
                        <option value="12">BSEB PATNA </option>
                        <option value="13">BSSB PATNA </option>
                        <option value="02">C.B.S.E </option>
                        <option value="14">CHBSE RAIPUR </option>
                        <option value="51">CISCE NEW DELHI </option>
                        <option value="15">GBSHSE GOA </option>
                        <option value="16">GSHSEB GANDHINAGAR </option>
                        <option value="17">HBE BHIWANI </option>
                        <option value="18">HOS BHIWANI </option>
                        <option value="19">HPBSE DHARAMSHALA </option>
                        <option value="01">I.C.S.E </option>
                        <option value="52">INDIAN SCHOOL CERTIFICATE
                        </option>
                        <option value="22">JHAC RANCHI </option>
                        <option value="20">JKSBSE JAMMU </option>
                        <option value="21">JKSOS SRINAGAR </option>
                        <option value="27">KBHSE THIRUVANANTHPURAM
                        </option>
                        <option value="26">KBPE THIRUVANANTHPURAM
                        </option>
                        <option value="23">KBPUE BANGALORE </option>
                        <option value="25">KOS MYSORE </option>
                        <option value="24">KSEEB BANGALORE </option>
                        <option value="28">KSOS THIRUVANANTHPURAM
                        </option>
                        <option value="33">MBSE IMPHAL </option>
                        <option value="35">MBSEC AIZAWL </option>
                        <option value="32">MCHSE IMPHAL </option>
                        <option value="34">MEBSE MEGHALAYA </option>
                        <option value="30">MPBSE BHOPAL </option>
                        <option value="31">MPSOS BHOPAL </option>
                        <option value="29">MSBSHSE PUNE </option>
                        <option value="36">NBSE KOHIMA </option>
                        <option value="50">NIOS NEW DELHI </option>
                        <option value="38">OBSE CUTTACK </option>
                        <option value="37">OCHSE BHUBANESWAR </option>
                        <option value="04">Others </option>
                        <option value="39">PSEB MOHALI </option>
                        <option value="40">RBSE AJMER </option>
                        <option value="41">RSOS JAIPUR </option>
                        <option value="43">TNBHSE CHENNAI </option>
                        <option value="42">TNBSE CHENNAI </option>
                        <option value="44">TRBSE TRIPURA WEST </option>
                        <option value="53">TSBIE </option>
                        <option value="54">TSBSE </option>
                        <option value="03">U.P Board </option>
                        <option value="45">USEPP NANITAL </option>
                        <option value="49">WBBME </option>
                        <option value="46">WBBSE CALCUTTA </option>
                        <option value="47">WBCHSE CALCUTTA </option>
                        <option value="48">WBCROS </option>
                        <option value="05">DAYALBAGH
                          EDUCATIONAL INSTITUTE </option>
                      </select>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" maxlength="4" name="MasterspassingYears" style="width:100px;"
                        value="<?=$pgr[1] ?>" required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" name="Masterspercentile" style="width:100px;"
                        value="<?=$pgr[2] ?>" required>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" name="Mastersdivision" style="width:100px;" value="<?=$pgr[3] ?>" required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" name="Masterssubjects" style="width:100px;"
                        value="<?=$pgr[4] ?>" required>
                    </td>
                  </tr>
                  <tr>

                    <td>Other,if any </td>
                    <?php  $other = $row1['Other']; 
                    $oth = explode(',',$other);
                    ?>
                    <td align="center">
                      <!-- <input type="hidden" name="brdUnivRequired" value="Y" required>
                      <input type="hidden" name="universityNeeded" value="N" required> -->
                      <select name="Otherboards" style="width:150px;" class="combobox" size="1" required>
                        <option value="<?= $oth[0] ?>"><?= $oth[0] ?>
                        </option>
                        <option value="10">ABSE GUWAHATI </option>
                        <option value="09">AHSEC GUWAHATI </option>
                        <option value="06">APBIE Hyderabad </option>
                        <option value="07">APBSE HYDERABAD </option>
                        <option value="08">APOSS HYDERABAD </option>
                        <option value="11">BIEC PATNA </option>
                        <option value="12">BSEB PATNA </option>
                        <option value="13">BSSB PATNA </option>
                        <option value="02">C.B.S.E </option>
                        <option value="14">CHBSE RAIPUR </option>
                        <option value="51">CISCE NEW DELHI </option>
                        <option value="15">GBSHSE GOA </option>
                        <option value="16">GSHSEB GANDHINAGAR </option>
                        <option value="17">HBE BHIWANI </option>
                        <option value="18">HOS BHIWANI </option>
                        <option value="19">HPBSE DHARAMSHALA </option>
                        <option value="01">I.C.S.E </option>
                        <option value="52">INDIAN SCHOOL CERTIFICATE
                        </option>
                        <option value="22">JHAC RANCHI </option>
                        <option value="20">JKSBSE JAMMU </option>
                        <option value="21">JKSOS SRINAGAR </option>
                        <option value="27">KBHSE THIRUVANANTHPURAM
                        </option>
                        <option value="26">KBPE THIRUVANANTHPURAM
                        </option>
                        <option value="23">KBPUE BANGALORE </option>
                        <option value="25">KOS MYSORE </option>
                        <option value="24">KSEEB BANGALORE </option>
                        <option value="28">KSOS THIRUVANANTHPURAM
                        </option>
                        <option value="33">MBSE IMPHAL </option>
                        <option value="35">MBSEC AIZAWL </option>
                        <option value="32">MCHSE IMPHAL </option>
                        <option value="34">MEBSE MEGHALAYA </option>
                        <option value="30">MPBSE BHOPAL </option>
                        <option value="31">MPSOS BHOPAL </option>
                        <option value="29">MSBSHSE PUNE </option>
                        <option value="36">NBSE KOHIMA </option>
                        <option value="50">NIOS NEW DELHI </option>
                        <option value="38">OBSE CUTTACK </option>
                        <option value="37">OCHSE BHUBANESWAR </option>
                        <option value="04">Others </option>
                        <option value="39">PSEB MOHALI </option>
                        <option value="40">RBSE AJMER </option>
                        <option value="41">RSOS JAIPUR </option>
                        <option value="43">TNBHSE CHENNAI </option>
                        <option value="42">TNBSE CHENNAI </option>
                        <option value="44">TRBSE TRIPURA WEST </option>
                        <option value="53">TSBIE </option>
                        <option value="54">TSBSE </option>
                        <option value="03">U.P Board </option>
                        <option value="45">USEPP NANITAL </option>
                        <option value="49">WBBME </option>
                        <option value="46">WBBSE CALCUTTA </option>
                        <option value="47">WBCHSE CALCUTTA </option>
                        <option value="48">WBCROS </option>
                        <option value="05">DAYALBAGH
                          EDUCATIONAL INSTITUTE </option>
                      </select>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" maxlength="4" name="OtherpassingYears" style="width:100px;"
                        value="<?=$oth[1] ?>" required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" name="Otherpercentile" style="width:100px;"
                        value="<?=$oth[2] ?>" required>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" name="Otherdivision" style="width:100px;" value="<?=$oth[3] ?>" required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" name="Othersubjects" style="width:100px;"
                        value="<?=$oth[4] ?>" required>
                    </td>
                  </tr>


                </tbody>
              </table>
              </td>
              </tr>
            </div>
            <div class="form-group">
              <label for="#">18. Research Degree(s)</label>
              <?php  $researchm = $row1['Research(Masters)']; 
                    $resm = explode(',',$researchm);
                    ?>
              <table cellspacing="5px" cellpadding="5px" width="100%" border="0 ">
                <thead>
                  <tr>
                    <td>Degrees</td>
                    <td>Title</td>
                    <td>Date of Award</td>
                    <td>University</td>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>M.Phil./M.Tech</td>
                    <td> <input type="text" autocomplete="off" name="Mtitle" style="width:150px;" value="<?= $resm[0]; ?>" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Mdate" style="width:150px;" value="<?= $resm[1]; ?>" required></td>
                    <td> <input type="text" autocomplete="off" name="Muniversity" style="width:150px;" value="<?= $resm[2]; ?>"
                        required></td>
                  </tr>
                  <tr>
                    <td>Ph.D./D.Phil.</td>
                    <?php  $researchPhd = $row1['Research(PhD/DPhil)']; 
                    $resp = explode(',',$researchPhd);
                    ?>
                    <td> <input type="text" autocomplete="off" name="Dtitle" style="width:150px;" value="<?= $resp[0]; ?>" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Ddate" style="width:150px;" value="<?= $resp[1]; ?>" required></td>
                    <td> <input type="text" autocomplete="off" name="Duniversity" style="width:150px;" value="<?= $resp[2]; ?>"
                        required></td>
                  </tr>
                  <tr>
                    <td>D.Sc/D.Litt.</td>
                    <?php  $researchDsc = $row1['Research(DSc/DLitt)']; 
                    $resD = explode(',',$researchDsc);
                    ?>
                    <td> <input type="text" autocomplete="off" name="DDtitle" style="width:150px;" value="<?= $resD[0]; ?>" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="DDdate" style="width:150px;" value="<?= $resD[1]; ?>" required></td>
                    <td> <input type="text" autocomplete="off" name="DDuniversity" style="width:150px;" value="<?= $resD[2]; ?>"
                        required></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="form-group">
              <label for="#">19. Appointment held prior to joining this Institution</label>
              <?php  $PP1= $row1['PreviousPost1']; 
                    $pre1 = explode(',',$PP1);
                    ?>
              <table cellspacing="5px" cellpadding="5px" width="100%" border="0 ">
                <thead>
                  <tr>
                    <td>Designation</td>
                    <td>Name of Employer</td>
                    <td>Date of Joining</td>
                    <td>Date of Leaving</td>
                    <td>Salary with Grade</td>
                    <td>Reason of leaving</td>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> <input type="text" autocomplete="off" name="Designation1" style="width:150px;" value="<?= $pre1[0]; ?>" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="NOE1" style="width:150px;" value="<?= $pre1[1]; ?>" required></td>
                    <td> <input type="text" autocomplete="off" name="DOJ1" style="width:150px;" value="<?= $pre1[2]; ?>"
                        required></td>
                    <td> <input type="text" autocomplete="off" name="DOL1" style="width:150px;" value="<?= $pre1[3]; ?>" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Salary1" style="width:150px;" value="<?= $pre1[4]; ?>" required></td>
                    <td> <input type="text" autocomplete="off" name="ROL1" style="width:150px;" value="<?= $pre1[5]; ?>" required>
                    </td>
                  </tr>
                  <?php  $PP2= $row1['PreviousPost2']; 
                    $pre2 = explode(',',$PP2);
                    ?>
                  <tr>
                    <td> <input type="text" autocomplete="off" name="Designation2" style="width:150px;" value="<?= $pre2[0]; ?>" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="NOE2" style="width:150px;" value="<?= $pre2[1]; ?>" required></td>
                    <td> <input type="text" autocomplete="off" name="DOJ2" style="width:150px;" value="<?= $pre2[2]; ?>"
                        required></td>
                    <td> <input type="text" autocomplete="off" name="DOL2" style="width:150px;" value="<?= $pre2[3]; ?>" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Salary2" style="width:150px;" value="<?= $pre2[4]; ?>" required></td>
                    <td> <input type="text" autocomplete="off" name="ROL2" style="width:150px;" value="<?= $pre2[5]; ?>" required>
                    </td>
                  </tr>
                  <?php  $PP3= $row1['PreviousPost3']; 
                    $pre3 = explode(',',$PP3);
                    ?>
                  <tr>
                    <td> <input type="text" autocomplete="off" name="Designation2" style="width:150px;" value="<?= $pre3[0]; ?>" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="NOE2" style="width:150px;" value="<?= $pre3[1]; ?>" required></td>
                    <td> <input type="text" autocomplete="off" name="DOJ2" style="width:150px;" value="<?= $pre3[2]; ?>"
                        required></td>
                    <td> <input type="text" autocomplete="off" name="DOL2" style="width:150px;" value="<?= $pre3 [3]; ?>" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Salary2" style="width:150px;" value="<?= $pre3[4]; ?>" required></td>
                    <td> <input type="text" autocomplete="off" name="ROL2" style="width:150px;" value="<?= $pre3[5]; ?>" required>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="form-group">
              <label for="#">20. Posts held after appointment at this Institute:</label>
              <?php  $AP1= $row1['AfterPost1']; 
                    $af1 = explode(',',$AP1);
                    ?>
              <table cellspacing="5px" cellpadding="5px" width="100%" border="0 ">
                <thead>
                  <tr>
                    <td>Designation</td>
                    <td>Department</td>
                    <td>Date of Actual Joining (from)</td>
                    <td>Date of Actual Joining (to)</td>
                    <td>Grade/Level</td>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> <input type="text" autocomplete="off" name="Desig1" style="width:150px;" value="<?= $af1[0]; ?>" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Department1" style="width:150px;" value="<?= $af1[1]; ?>" required></td>
                    <td> <input type="text" autocomplete="off" name="DOJ(from)1" style="width:150px;" value="<?= $af1[2]; ?>"
                        required></td>
                    <td> <input type="text" autocomplete="off" name="DOJ(to)1" style="width:150px;" value="<?= $af1[3]; ?>" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Grade1" style="width:150px;" value="<?= $af1[4]; ?>" required></td>
                  </tr>
                  <tr>
                  <?php  $AP2 = $row1['AfterPost2']; 
                    $af2 = explode(',',$AP2);
                    ?>
                    <td> <input type="text" autocomplete="off" name="Desig1" style="width:150px;" value="<?= $af2[0]; ?>" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Department1" style="width:150px;" value="<?= $af2[1]; ?>" required></td>
                    <td> <input type="text" autocomplete="off" name="DOJ(from)1" style="width:150px;" value="<?= $af2[2]; ?>"
                        required></td>
                    <td> <input type="text" autocomplete="off" name="DOJ(to)1" style="width:150px;" value="<?= $af2[3]; ?>" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Grade1" style="width:150px;" value="<?= $af2[4]; ?>" required></td>
                  </tr>
                  <tr>
                  <?php  $AP3= $row1['AfterPost3']; 
                    $af3 = explode(',',$AP3);
                    ?>
                    <td> <input type="text" autocomplete="off" name="Desig1" style="width:150px;" value="<?= $af3[0]; ?>" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Department1" style="width:150px;" value="<?= $af3[1]; ?>" required></td>
                    <td> <input type="text" autocomplete="off" name="DOJ(from)1" style="width:150px;" value="<?= $af3[2]; ?>"
                        required></td>
                    <td> <input type="text" autocomplete="off" name="DOJ(to)1" style="width:150px;" value="<?= $af3[3]; ?>" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Grade1" style="width:150px;" value="<?= $af3[4]; ?>" required></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="form-group">
              <label for="#">21. Period of teaching experience:</label><br>
              <?php  $TE= $row1['TeachingExperience(PG,UG)']; 
                    $teaexp = explode(',',$TE);
                    ?>
              <table>
                <tr>
                  <td>P.G. (in years):</td>
                  <td>U.G. (in years):</td>
                </tr>
                <tr>
                  <td> <input type="number" autocomplete="off" name="PGexperience" style="width:100px;" value="<?= $teaexp[0]; ?>" required>
                  </td>
                  <td> <input type="number" autocomplete="off" name="UGexperience" style="width:100px;" value="<?= $teaexp[1]; ?>" required></td>
                </tr>

              </table>
            </div>
            <div class="form-group">
              <label for="#">22. Research Experience excluding years spent in M.Phil./ Ph.D. (In years): </label>
              <input type="number" autocomplete="off" name="ResearchExp" style="width:100px;" value="<?= $row1['ResearchExperience'];?>" required>

            </div>
            <div class="form-group">
              <label for="#">23. Fields of Specialization under the Subject/Discipline </label>
              <input type="text" autocomplete="off" name="Specialization" style="width:100px;" value="<?= $row1['Specialization'];?>" required>

            </div>
            <hr>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
        <br>
        <br>
           <?php
           }
       }
       

  
       ?>
      </div>
    </div>

  </form>

  <script src="CASpartA.php">
  </script>

</body>

</html>