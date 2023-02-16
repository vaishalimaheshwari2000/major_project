<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script>
        function percent1() {
          num = document.getElementById("classAssigned").value;
          haught = document.getElementById("classTaught").value;
          document.getElementById("percentage").value = (haught / num) * 100;
    
        }
        function percent2() {
          num = document.getElementById("a2").value;
          haught = document.getElementById("b2").value;
          document.getElementById("pr1").value = (haught / num) * 100;
    
        }
        function percent3() {
          num = document.getElementById("a3").value;
          haught = document.getElementById("b3").value;
          document.getElementById("pr2").value = (haught / num) * 100 ;
    
        }
        function percent4() {
          num = document.getElementById("a4").value;
          haught = document.getElementById("b4").value;
          document.getElementById("pr3").value = (haught / num) * 100 ;
    
        }
        function percent5() {
          num = document.getElementById("a5").value;
          haught = document.getElementById("b5").value;
          document.getElementById("pr4").value = (haught / num) * 100 ;
    
        }
        function percent6() {
          num = document.getElementById("a6").value;
          haught = document.getElementById("b6").value;
          document.getElementById("pr5").value = (haught / num) * 100;
    
        }
        function grading0() {
          let G10 = document.getElementById("percentage").value;
          let G;
          if (G10 >= 80) {
            G = "Good";
          }
          else if (G10 >= 70) {
            G = "Satisfactory";
          }
          else {
            G = "Not satisfactory";
          }
          document.getElementById("grade0").value = G;
        } 
        function grading1() {
          let G11 = document.getElementById("pr1").value;
          let H;
          if (G11 >= 80) {
            H = "Good";
          }
          else if (G11 >= 70) {
            H = "Satisfactory";
          }
          else {
            H = "Not satisfactory";
          }
          document.getElementById("grade1").value = H;
        } 
        function grading2() {
          let G12 = document.getElementById("pr2").value;
          let I;
          if (G12 >= 80) {
            I = "Good";
          }
          else if (G12 >= 70) {
            I = "Satisfactory";
          }
          else {
            I = "Not satisfactory";
          }
          document.getElementById("grade2").value = I;
        } 
        function grading3() {
          let G13 = document.getElementById("pr3").value;
          let J;
          if (G13 >= 80) {
            J = "Good";
          }
          else if (G13 >= 70) {
            J = "Satisfactory";
          }
          else {
            J = "Not satisfactory";
          }
          document.getElementById("grade3").value = J;
        } 
        function grading4() {
          let G14 = document.getElementById("pr4").value;
          let K;
          if (G14 >= 80) {
            K = "Good";
          }
          else if (G14 >= 70) {
            K = "Satisfactory";
          }
          else {
            K = "Not satisfactory";
          }
          document.getElementById("grade4").value = K;
        } 
        function grading5() {
          let G15 = document.getElementById("pr5").value;
          let L;
          if (G15 >= 80) {
            L = "Good";
          }
          else if (G15 >= 70) {
            L = "Satisfactory";
          }
          else {
            L = "Not satisfactory";
          }
          document.getElementById("grade5").value = L;
        } 
      </script>
    <title>CAS Proforma Part-B</title>
</head>

<body>
    <div class="blockquote text-center">
        <h3>Dayalbagh Educational Institute</h3>
        <h4>(Deemed To Be University)</h4>
        <h4>Dayalbagh, Agra</h4>
        <h5>Assessment Criteria and Methodology Proforma for Promotion under CAS </h5>

    </div>
    <hr style="border-top: 1mm solid black ;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="#" class="navbar-brand"> <img class="svg" src="logo.jpeg" alt="Bootstrap" width="40" height="40" loading="lazy"></a>
        <a class="navbar-brand" href="https://www.dei.ac.in/dei/">DEI Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://admission.dei.ac.in:8085/cms_new/">DEI CMS<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="https://www.dei.ac.in/dei/files/IQAC/2022/CAS_GUIDELINES_2018.pdf">CAS GUIDELINES<span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
           
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" formaction="index.html">Log Out</button>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" formaction="home.html">Back</button>
          </form>
        </div>
      </nav>
      <br>
    <h4 style="text-decoration:underline; text-align: center;">PART B: ASSESSMENT OF PERFORMANCE</h4>
    <h5 style="text-decoration:underline; text-align: center;"> Information for the Year <input type="text"
            maxlength="4" style="width: 80px; border: 0ch;" required>to<input type="text" maxlength="4"
            style="width:80px; border: 0ch; text-decoration: underline;" required>.</h5>
    
            <form action="CASpartB.php" method="post">
    
    
            <div class="container">
        <div class="row col-md-6 col-md-offset-3 ">
            
                <b> <label for="#" ; style="text-decoration:underline;">Category I:Teaching, Learning and Evaluation
                        Related
                        Activates</label>
                </b>

                <label for="#" ;> <b> 1A: <u> Teaching: (Classes taught include sessions, tutorials, lab., and other
                            teaching related activities) </u> </b> <br>
                    (Regularity and punctuality in classes, remedial teaching, clarifying doubts, counseling, mentoring,
                    additional teaching etc.)
                </label>
                <table frame="box">
                    <tr class="table">
                      <td align="center">
                        S.N.
                      </td>
                      <td align="center"> Course/Paper (Attach Evidences)</td>
                      <td align="center">No. of Classes Assigned</td>
                      <td align="center">No. of Classes Thaught</td>
                      <td align="center">Percentage of Classes Taught</td>
                      <td align="center">Grade (Please refer Table 1: Appendix II)</td>
                    </tr>
                    <tr class="table">
                      <td colspan="6" align="center"> Semester 1:(July-Dec)Year</td>
            
                    </tr>
                    <tr>
                      <td> <input type="text" required style="width: 70px; text-align: center;"></td>
                      <td> <input type="text"  required name="course1" id="course" style="width: 250px; text-align: center;"></td>
                      <td> <input type="text"  required name="a1" id="classAssigned" style="width: 140px; text-align: center;">
                      </td>
                      <td> <input type="text" required  name="b1" id="classTaught" style="width: 140px; text-align: center;"></td>
                      <td> <input type="text" required  name="pr1" maxlength="4"  onclick="percent1()" id="percentage" readonly style="width: 140px; text-align: center;" /></td>
                      <td> <input type="text" required  name="grade1" onclick="grading0()" id="grade0" style="width: 140px; text-align: center;">
                      </td>
                    </tr>
                    <tr>
                      <td> <input type="text" required name="" style="width: 70px; text-align: center;"></td>
                      <td> <input type="text" required name="course2"  style="width: 250px; text-align: center;"></td>
                      <td> <input type="text" required name="a2" id="a2" style="width: 140px; text-align: center;"></td>
                      <td> <input type="text" required name="b2"  id="b2" style="width: 140px; text-align: center;"></td>
                      <td> <input type="text" required name="pr2"  onclick="percent2()" maxlength="4"id="pr1" readonly style="width: 140px; text-align: center;" />
                      </td>
                      <td> <input type="text" onclick="grading1()" name="grade2" id="grade1" style="width: 140px; text-align: center;"></td>
                    </tr>
                    <tr>
                      <td> <input type="text" required name=""  style="width: 70px; text-align: center;"></td>
                      <td> <input type="text" required name="course3"  style="width: 250px; text-align: center;"></td>
                      <td> <input type="text"  required name="a3" id="a3" style="width: 140px; text-align: center;"></td>
                      <td> <input type="text"  required name="b3" id="b3" style="width: 140px; text-align: center;"></td>
                      <td> <input type="text" required name="pr3"  onclick="percent3()" id="pr2" readonly style="width: 140px; text-align: center;" />
                      </td>
                      <td> <input type="text" required name="grade3"  onclick="grading2()" id="grade2" style="width: 140px; text-align: center;"></td>
                    </tr>
                    <tr class="table">
                      <td colspan="6" style="text-align:center" ;> Semester 2:(Jan-May)Year</td>
            
                    </tr>
                    <tr>
                      <td> <input type="text" required name=""  style="width: 70px; text-align: center;"></td>
                      <td> <input type="text" required name="course4"  style="width: 250px; text-align: center;"></td>
                      <td> <input type="text" required name="a4"  id="a4" style="width: 140px; text-align: center;"></td>
                      <td> <input type="text" required name="b4"  id="b4" style="width: 140px; text-align: center;"></td>
                      <td> <input type="text" required name="pr4"  onclick="percent4()" id="pr3" readonly style="width: 140px; text-align: center;" />
                      </td>
                      <td> <input type="text" required name="grade4"  onclick="grading3()" id="grade3" style="width: 140px; text-align: center;"></td>
                    </tr>
                    <tr>
                      <td> <input type="text" required name="" style="width: 70px; text-align: center;"></td>
                      <td> <input type="text" required name="course5" style="width: 250px; text-align: center;"></td>
                      <td> <input type="text" required name="a5" id="a5" style="width: 140px; text-align: center;"></td>
                      <td> <input type="text" required name="b5" id="b5" style="width: 140px; text-align: center;"></td>
                      <td> <input type="text" required name="pr5" onclick="percent5()" id="pr4" readonly style="width: 140px; text-align: center;" />
                      </td>
                      <td> <input type="text" required onclick="grading4()" name="grade5" id="grade4" style="width: 140px; text-align: center;"></td>
                    </tr>
                    <tr>
                      <td> <input type="text" required name="" style="width: 70px; text-align: center;"></td>
                      <td> <input type="text" required name="course6" style="width: 250px; text-align: center;"></td>
                      <td> <input type="text" required name="a6" id="a6" style="width: 140px; text-align: center;"></td>
                      <td> <input type="text" required name="b6" id="b6" style="width: 140px; text-align: center;"></td>
                      <td> <input type="text" required name="pr6" onclick="percent6()" id="pr5" readonly style="width: 140px; text-align: center;" />
                      </td>
                      <td> <input type="text" required name="grade6" onclick="grading5()" id="grade5" style="width: 140px; text-align: center;"></td>
                    </tr>
            

                  </table>

                <table> 
                    <tr>
                        <th colspan="2"> * <u> Grading Criteria </u> </th>
                    </tr>
                    <tr>
                        <td> 80% & above</td>
                        <td> -Good</td>
                    </tr>
                    <tr>
                        <td>Below 80% but 70% & above </td>
                        <td>-Satisfactory</td>
                    </tr>
                    <tr>
                        <td> Less then 70% </td>
                        <td>-Not satisfactory</td>
                    </tr>
                </table>
                <label for="#" ;> <b> 1B: <u> Examination, Evaluation Activities, Administrative Support and
                            Participation
                            in Students Co-curricular & Extra-curricular Activities </u> </b> </label> <br>
                <table frame="box">
                    <tr class="table">
                        <td align="center">S.N. </td>
                        <td align="center">Activities involved out of the activities listed <br> below(Attach
                            Evidences) </td>
                        <td align="center">Grade (Please refer <br> Table 1: Appendix II)</td>
                    </tr>
                    <tr class="table">
                        <td colspan="3" align="center"> Semester 1:(July-Dec)Year</td>

                    </tr>
                    <tr>
                        <td> <input type="text" name = "" required style="width: 70px;"></td>
                        <td> <input type="text" name = "Activitie1" required style="width: 500px;"></td>
                        <td> <input type="text" name = "gr1" required style="width: 160px;"></td>
                    </tr>
                    <tr>
                        <td> <input type="text" name = "" required style="width: 70px;"></td>
                        <td> <input type="text" name = "Activitie2" required style="width: 500px;"></td>
                        <td> <input type="text" name = "gr2" required style="width: 160px;"></td>
                    </tr>
                    <tr>
                        <td> <input type="text" name = "" required style="width: 70px;"></td>
                        <td> <input type="text" name = "Activitie3" required style="width: 500px;"></td>
                        <td> <input type="text" name = "gr3" required style="width: 160px;"></td>
                    </tr>
                    <tr class="table">
                        <td colspan="3" style="text-align:center" ;> Semester 2:(Jan-May)Year</td>

                    </tr>
                    <tr>
                        <td> <input type="text" name = "" required style="width: 70px;"></td>
                        <td> <input type="text" name = "Activitie4" required style="width: 500px;"></td>
                        <td> <input type="text" name = "gr4" required style="width: 160px;"></td>
                    </tr>
                    <tr>
                        <td> <input type="text" required style="width: 70px;"></td>
                        <td> <input type="text" name = "Activitie5" required style="width: 500px;"></td>
                        <td> <input type="text" name = "gr5" required style="width: 160px;"></td>
                    </tr>
                    <tr>
                        <td> <input type="text" required style="width: 70px;"></td>
                        <td> <input type="text" name = "Activitie6" required style="width: 500px;"></td>
                        <td> <input type="text" name = "gr6" required style="width: 160px;"></td>
                    </tr>
                    <tr>
                        <td> <input type="text" required style="width: 70px;"></td>
                        <td> <input type="text" name = "Activitie7" required style="width: 500px;"></td>
                        <td> <input type="text" name = "gr7" required style="width: 160px;"></td>
                    </tr>

                </table>

                <table>
                    <tr>
                        <th colspan="2"> * <u> Grading Criteria </u> </th>
                    </tr>
                    <tr>
                        <td>Involved in at least 3 activities </td>
                        <td> -Good</td>
                    </tr>
                    <tr>
                        <td>Involved in 1 to 2 activities </td>
                        <td>-Satisfactory</td>
                    </tr>
                    <tr>
                        <td>Not involved/undertaken any of the activities </td>
                        <td>-Not satisfactory</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <b>Note:</b> Number of activities can be within or across the broad categories of
                            activities.
                        </td>
                    </tr>
                </table>
                <label for="#" ;> <b> 1C: <u>Personal Development Related to Teaching and Research Activities: </u>
                    </b> </label> <br>
                <table frame="box">
                    <tr class="table">
                        <td align="center">S.N. </td>
                        <td align="center"> Activities attended*
                            (Please mention the <br> activities involved out of the activities listed below)
                            <br>
                            (AttachEvidences)
                        </td>
                    </tr>
                    <tr class="table">
                        <td colspan="2" align="center"> Semester 1:(July-Dec)Year</td>

                    </tr>
                    <tr>
                        <td> <input type="text" style="width: 70px;" required></td>
                        <td> <input type="text" name = "Activities_attended1" style="width: 500px;" required></td>
                    </tr>
                    <tr>
                        <td> <input type="text" style="width: 70px;" required></td>
                        <td> <input type="text" name = "Activities_attended2" style="width: 500px;" required></td>
                    </tr>
                    <tr>
                        <td> <input type="text" style="width: 70px;" required></td>
                        <td> <input type="text"  name = "Activities_attended3"style="width: 500px;" required></td>
                    </tr>
                    <tr class="table">
                        <td colspan="3" style="text-align:center" ;> Semester 2:(Jan-May)Year</td>

                    </tr>
                    <tr>
                        <td> <input type="text" style="width: 70px;" required></td>
                        <td> <input type="text" name = "Activities_attended4" style="width: 500px;" required></td>
                    </tr>
                    <tr>
                        <td> <input type="text" style="width: 70px;" required></td>
                        <td> <input type="text" name = "Activities_attended5" style="width: 500px;" required></td>
                    </tr>
                    <tr>
                        <td> <input type="text" style="width: 70px;" required></td>
                        <td> <input type="text" name = "Activities_attended6" style="width: 500px;" required></td>
                    </tr>


                </table>

                <label for="#"> *Orientation/Refresher/Research Methodology course, development of e-contents
                    and MOOCs, Workshop, Syllabus up-gradation workshop, Training Teaching-Learning Evaluation,
                    Technology Programs and Faculty Development Programs.</label>
                <br>
                <br><br>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                    &nbsp
                   
                </div>
        </div>
   
      </form>
    <br>
    <br><br>
    <br>
    <script src = "CASpartB.php" > </script>

</body>

</html> 