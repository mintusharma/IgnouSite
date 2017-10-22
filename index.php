<!-- # Header is fetched -->
<?php include("header.php"); ?>
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/ignousite.png" alt="Chania">
      </div>
      <div class="item">
        <img src="images/ignousite.png" alt="Chania">
      </div>
      <div class="item">
        <img src="images/ignousite.png" alt="Flower" >
      </div>
      <div class="item">
        <img src="images/ignousite.png" alt="Flower" >
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control mycarousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control mycarousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="row bigcontainer">
  <div class="col-sm-9">
    <div class="menu_tab_container"><br>
      <ul class="nav nav-tabs">
        <li><a data-toggle="tab" href="#home">WHY IGNOU</a></li>
        <li class="active"><a data-toggle="tab" href="#menu1">GRADE CARD</a></li>
        <li><a data-toggle="tab" href="#menu2">PROGRAMS</a></li>
        <li><a data-toggle="tab" href="#menu3">RESULT</a></li>
      </ul>

      <div class="tab-content">
        <div id="home" class="tab-pane fade">
          <h4><span class="glyphicon glyphicon-ok-sign"></span> Flexible Admission Rules</h4>
          <h4><span class="glyphicon glyphicon-ok-sign"></span> Individualised Study Flexibility in Terms of Place, Pace & Duration</h4>
          <h4><span class="glyphicon glyphicon-ok-sign"></span> Nationwide Student Support Services Network</h4>
          <h4><span class="glyphicon glyphicon-ok-sign"></span> Cost Effective Programmes</h4>
          <h4><span class="glyphicon glyphicon-ok-sign"></span> Resource Sharing, Collaboration & Networking with other Universities</h4>
          <h4><span class="glyphicon glyphicon-ok-sign"></span> Programmes Based on Students Need Analysis</h4>
          <h4><span class="glyphicon glyphicon-ok-sign"></span> Motivate to SelfStudy</h4>
        </div>

        <div id="menu1" class="tab-pane fade in active">
          <h4>Check Your Grade Card</h4>
          <div class="col-md-12 gradecard_class">
            <form  action="https://webservices.ignou.ac.in/GradecardM/Result.asp" target="_blank" method="post">
              <span style="color: black; font-size:15px; ">
                <b>For BCA/MCA/MP/MPB/BDP And For Others</b></span>
                <div class="form-group">
                  <div class="col-sm-12">
                    <select name="Program" class="form-control">
                      <option value="">Select Program</option>
                      <option value="BCA">BCA</option>
                      <option value="MCA">MCA</option>
                      <option value="MP">MP</option>
                      <option value="MPB">MPB</option>
                      <option value="ASSO">ASSO</option>
                      <option value="BA">BA</option>
                      <option value="BCOM">BCOM</option>
                      <option value="BDP">BDP</option>
                      <option value="BSC">BSC</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12" style="margin-top:10px; ">
                    <input class="form-control" placeholder="Enter Enrollment" name="eno" maxlength="9" size="9" required="required" type="number">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-5" style="margin-top:10px;">
                    <input type="submit" class="btn btn-default" value="Submit" onclick="checkProgramValue()">
                    <input name="hidden_submit" type="hidden" value="OK">
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div id="menu2" class="tab-pane fade">
            <div class="col-sm-5">
              <a href="https://onlineadmission.ignou.ac.in/admission/#end" target="_blank"><span class="glyphicon glyphicon glyphicon-education program_list"></span>Bachelor's Degree</a>
              <a href="https://onlineadmission.ignou.ac.in/admission/#end" target="_blank"><span class="glyphicon glyphicon glyphicon-education program_list"></span>Master's Degree</a>
              <a href="https://onlineadmission.ignou.ac.in/admission/#end" target="_blank"><span class="glyphicon glyphicon glyphicon-education program_list"></span>Certificate Programmes</a>
              <a href="https://onlineadmission.ignou.ac.in/admission/#end" target="_blank"><span class="glyphicon glyphicon glyphicon-education program_list"></span>PG Certificate</a>
              <a href="https://onlineadmission.ignou.ac.in/admission/#end" target="_blank"><span class="glyphicon glyphicon glyphicon-education program_list"></span> Doctoral Degree</a>
            </div>
            <div class="col-sm-5">
              <a href="https://onlineadmission.ignou.ac.in/admission/#end" target="_blank"><span class="glyphicon glyphicon glyphicon-education program_list"></span>PG Diploma</a>
              <a href="https://onlineadmission.ignou.ac.in/admission/#end" target="_blank"><span class="glyphicon glyphicon glyphicon-education program_list"></span>Advance Diploma</a>
              <a href="https://onlineadmission.ignou.ac.in/admission/#end" target="_blank"><span class="glyphicon glyphicon glyphicon-education program_list"></span>Advance Certificate</a>
              <a href="https://onlineadmission.ignou.ac.in/admission/#end" target="_blank"><span class="glyphicon glyphicon glyphicon-education program_list"></span>Non-Credit Programmes</a>
              <a href="https://onlineadmission.ignou.ac.in/admission/#end" target="_blank"><span class="glyphicon glyphicon glyphicon-education program_list"></span> M.Phil Programme</a>
            </div>
          </div>

          <div id="menu3" class="tab-pane fade">
            <div class="col-sm-12 result">
              <h3>Check Your Result here..</h3>
              <label class="col-sm-5 control-label" for="email">Enter 9 Digit( Numeric) Enrolment Number </label>
              <div class="col-sm-5 form-group">
                <form name="Enofr" target="_blank" method="post" action="http://ignouhall.ignou.ac.in/TE0617alt/TermEndJune17alt.asp" onsubmit="return fnsubmit(this)">
                  <div class="col-sm-12" style="margin-top:10px; ">
                    <input name="myhide" type="hidden" value="OK">
                    <input class="form-control" placeholder="Enter Enrollment" name="eno" maxlength="9" size="9" required="required" type="number">
                  </div>
                  <div class="form-group">
                    <div class="col-sm-5" style="margin-top:10px;">
                      <input type="submit" class="btn btn-default" value="Submit">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-3 home_announcement">
      <h2>ANNOUNCEMENT</h2>
      <div class="announcement_content">
        <p><i class="glyphicon glyphicon-bullhorn"></i><a href="https://avserver.ignou.ac.in/HallTicket/Hall_1217/Hall1217.asp" target="_blank">Hall Ticket (2017)</a></p>
        <p><i class="glyphicon glyphicon-bullhorn"></i><a href="http://www.ignou.ac.in/userfiles/new_date_sheet.PDF" target="_blank">Tentative Datesheet</a></p>
        <p><i class="glyphicon glyphicon-bullhorn"></i><a href="#" target="_blank">Previous Year Papers</a></p>
        <p><i class="glyphicon glyphicon-bullhorn"></i><a href="#" target="_blank">BCA/MCA Exam Notes</a></p>
        <p><i class="glyphicon glyphicon-bullhorn"></i><a href="https://onlineadmission.ignou.ac.in/onlinerr/" target="_blank">Re-registration (2018)</a></p>
        <p><i class="glyphicon glyphicon-bullhorn"></i><a href="https://onlineadmission.ignou.ac.in/" target="_blank">Fresh Addminsion</a></p>
        <!-- <p><i class="glyphicon glyphicon-bullhorn"></i><a href="#">Convocation</a></p> -->
      </div>
    </div>
  </div>

  <!-- Model popup box -->
  <div class="modal fade popupmodel" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thankyou </h4>
        </div>
        <div class="modal-body">
          <iframe name="i_frame" style="height:150px; width:100%;"></iframe>
        </div>
        <div class="modal-footer">
          <input type="submit" value="Close" class="btn btn-default" data-dismiss="modal">
        </div>
      </div>
    </div>
  </div>
  <!--    end of model popup-->

  <!-- Container (Services Section) -->
  <div class="row row_margin_LR">
    <div class="col-sm-12 service_container">
      <div class="col-sm-9">
        <div class="container-fluid text-center services_last_upper">
          <div class="services">
            <h2>STUDENTS RESOURCES</h2>
          </div>
            <br>
            <div class="row">
              <a href="solvedassignments.php" target="_blank">
                <div class="col-sm-4">
                  <span class="glyphicon glyphicon-list-alt logo-small"></span>
                  <h4>SOLVED ASSIGNMENTS</h4>
                  Here you can download Solved Assignments for different courses..
                </div>
              </a>
              <a href="PreviousYearPaper.php" target="_blank">
                <div class="col-sm-4">
                  <span class="glyphicon glyphicon-file logo-small"></span>
                  <h4>PREVIOUS YEAR PAPERS</h4>
                  Here you can Download Previousn year Question papers ..
                </div>
              </a>
              <a href="projects.php" target="_blank">
                <div class="col-sm-4">
                  <span class="glyphicon glyphicon-lock logo-small"></span>
                  <h4>PROJECTS</h4>
                  We provide projects on differents platform..
                </div>
              </a>
            </div>
            <br><br>
            <div class="row">
              <a href="#">
                <div class="col-sm-4">
                  <span class="glyphicon glyphicon-education logo-small"></span>
                  <h4>BCA / MCA CLASSES</h4>
                  Special Classes for BCA/MCA Students
                </div>
              </a>
              <a href="tutorials.php">
                <div class="col-sm-4">
                  <span class="glyphicon glyphicon-education logo-small"></span>
                  <h4>QUICK TUTORIALS</h4>
                  Quick Tuitorials for BCA and MCA Students.
                </div>
              </a>
              <a href="#">
                <div class="col-sm-3">
                  <span class="glyphicon glyphicon-th-large logo-small"></span>
                  <h4>OTHER CLASSES</h4>
                  We also provide the classes for other programming language..
                </div>
              </a>
            </div><br>
          </div>
        </div>

        <div class="col-sm-3 sideinfo">
          <!-- <div class="col-sm-12 qac">Quick Contact</div> -->
          <h2 class="home_contact">PING US</h2>
          <div class="project-list" style="padding:5%;">
            <form class="form-horizontal" target="_self" >
              <div class="form-group">
                 <div class="col-sm-12">
                  <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                </div>
              </div>
              <div class="form-group">
                 <div class="col-sm-12">
                  <textarea class="form-control" placeholder="Query" maxlength="150" ></textarea>
                </div><br>
              </div>
              <div class="form-group">
                 <div class="col-sm-12">
                  <input type="tel" class="form-control" id="mobile" placeholder="Enter Mobile " name="mobile">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-5" style="margin-left:0;">
                  <input type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal" value="Submit">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> <!--  End of Service Cpntainer -->

    <!-- # Footer is fetched -->
    <?php include('footer.php'); ?>
