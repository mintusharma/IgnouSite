    <html>

    <head>
        <title>
        IgnouFear
        </title>
         <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
      <script src="jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
        
        <script>
         function myfun(){
             alert("Submited Successfully");
         }
        </script>
            <style>
        

        </style>
    </head>  
        
        <body>

<!--    Navigation Bar Start Here-->
             <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#myPage"><span class="glyphicon glyphicon-education"></span>Ignou-Fear</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about">HOME</a></li>
            <li><a href="#services">SERVICES</a></li>
            <li><a href="#portfolio">RESULT</a></li>
            <li><a href="projects.html">PROJECTS</a></li>
            <li><a href="contact.html">CONTACT</a></li>
            <li><a href="contact.html">LOGIN</a></li>
          </ul>
        </div>
      </div>
    </nav>
<!--    Navigation bar End here        -->
            
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
            <img src="images/1.jpg" alt="Chania" width="460" height="345">
            <div class="carousel-caption">
              <h2>IgnouFear</h2>
              <p>We provide Solutions of Ignou Problems</p>
            </div>
          </div>

          <div class="item">
            <img src="images/2.jpg" alt="Chania" width="460" height="345">
            <div class="carousel-caption">
              <h2>IgnouFear</h2>
              <p>We provide Solutions of Ignou Problems</p>
            </div>
          </div>

          <div class="item">
            <img src="images/3.jpg" alt="Flower" width="460" height="345">
            <div class="carousel-caption">
              <h2>IgnouFear</h2>
              <p>We provide Solutions of Ignou Problems</p>
            </div>
          </div>

          <div class="item">
            <img src="images/4.jpg" alt="Flower" width="460" height="345">
            <div class="carousel-caption">
              <h2>IgnouFear</h2>
              <p>We provide Solutions of Ignou Problems</p>
            </div>
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


           <br>
            <div class="col-sm-12 bigcontainer">
            <div class="col-sm-8">
        <div class="tabcontainer2">
      <br>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">WHY IGNOU</a></li>
        <li><a data-toggle="tab" href="#menu1">GRADE CARD</a></li>
        <li><a data-toggle="tab" href="#menu2">PROGRAMS</a></li>
        <li><a data-toggle="tab" href="#menu3">PROJECTS</a></li>
      </ul>

      <div class="tab-content" style="height: 320px;">
            <div id="home" class="tab-pane fade in active">
          <h4><span class="glyphicon glyphicon-ok-sign"></span> Flexible Admission Rules</h4>
            <h4><span class="glyphicon glyphicon-ok-sign"></span> Individualised Study Flexibility in Terms of Place, Pace & Duration</h4>
            <h4><span class="glyphicon glyphicon-ok-sign"></span> Nationwide Student Support Services Network</h4>
            <h4><span class="glyphicon glyphicon-ok-sign"></span> Cost Effective Programmes</h4>
            <h4><span class="glyphicon glyphicon-ok-sign"></span> Resource Sharing, Collaboration & Networking with other Universities</h4>
            <h4><span class="glyphicon glyphicon-ok-sign"></span> Programmes Based on Students Need Analysis</h4>
            <h4><span class="glyphicon glyphicon-ok-sign"></span> Motivate to SelfStudy</h4>

        </div>

          <div id="menu1" class="tab-pane fade">
          <h4>Check Your Grade Card</h4>
              <div class="col-sm-6">
    


                   <form  action="https://webservices.ignou.ac.in/GradecardM/Result.asp" target="#myModel" method="post">
                  <span style="color: black; font-size:15px; ">
                      <b>For BCA/MCA/MP/MPB</b></span>
                  <div class="form-group">
          <div class="col-sm-12">
           <select name="Program" class="form-control">
            <option value="">Select Program</option>
            <option value="BCA">BCA</option>
            <option value="MCA">MCA</option>
            <option value="MP">MP</option>
            <option value="MPB">MPB</option>
        </select>
          </div>
        </div>
                  <div class="form-group">
          <div class="col-sm-12" style="margin-top:10px; ">
            <input name="hidden_submit" type="hidden" value="OK">
    <input class="form-control" placeholder="Enter Enrollment" name="eno" required="required" type="number">
          </div>
        </div>
                  <div class="form-group">        
          <div class="col-sm-6" style="margin-top:10px;">
            <input type="submit" class="btn btn-default" value="Submit">
          </div>
        </div>
                  </form>

              </div>
              <div class="col-sm-6" style="border-left: 1px solid;">
               <form  action="https://webservices.ignou.ac.in/GradecardM/Result.asp" target="#myModel">
                  <span style="color: black; font-size:15px; ">
                      <b>For BCA/MCA/MP/MPB</b></span>
                  <div class="form-group">
          <div class="col-sm-12">
           <select name="Program" class="form-control">
            <option value="">Select Program</option>
            <option value="BCA">BDP</option>
            <option value="MCA">MCA</option>
            <option value="MP">MP</option>
            <option value="MPB">MPB</option>
        </select>
          </div>
        </div>
                  <div class="form-group">
          <div class="col-sm-12" style="margin-top:10px; ">
            <input name="hidden_submit" type="hidden" value="OK">
    <input class="form-control" placeholder="Enter Enrollment" name="eno" required="required" type="number">
          </div>
        </div>
                  <div class="form-group">        
          <div class="col-sm-6" style="margin-top:10px;">
            <input type="submit" class="btn btn-default" value="Submit">
          </div>
        </div>
                  </form>
              </div>

        </div>

        <div id="menu2" class="tab-pane fade">
          <h4><span class="glyphicon glyphicon-ok-sign"></span> BCA / MCA</h4>
            <h4><span class="glyphicon glyphicon-ok-sign"></span> B.COM / M.COM</h4>
            <h4><span class="glyphicon glyphicon-ok-sign"></span> BA / MA </h4>
            <h4><span class="glyphicon glyphicon-ok-sign"></span> Bsc / Msc</h4>
            <h4><span class="glyphicon glyphicon-ok-sign"></span> B.Ed </h4>
            <h4><span class="glyphicon glyphicon-ok-sign"></span> Diploma Courses</h4>
            <h4><span class="glyphicon glyphicon-ok-sign"></span> Motivate to SelfStudy</h4>
        </div>
          <div id="menu3" class="tab-pane fade">
          <h4><span class="glyphicon glyphicon-ok-sign"></span> BCA / MCA</h4>
            <h4><span class="glyphicon glyphicon-ok-sign"></span> B.COM / M.COM</h4>
            <h4><span class="glyphicon glyphicon-ok-sign"></span> BA / MA </h4>
            <h4><span class="glyphicon glyphicon-ok-sign"></span> Bsc / Msc</h4>
            <h4><span class="glyphicon glyphicon-ok-sign"></span> B.Ed </h4>
            <h4><span class="glyphicon glyphicon-ok-sign"></span> Diploma Courses</h4>
            <h4><span class="glyphicon glyphicon-ok-sign"></span> Motivate to SelfStudy</h4>
        </div>
      </div>
    </div>   
                </div>
            <div class="col-sm-4 sideform">
                <form class="form-horizontal" target="_self" >
                    <h2 style="text-align: center">Quick Access</h2><br>
                   <div class="form-group">
          <label class="control-label col-sm-3" for="email">Name : </label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="pwd">Email : </label>
          <div class="col-sm-9">          
            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
          </div>
        </div>
                    <div class="form-group">
          <label class="control-label col-sm-3" for="pwd">Query : </label>
          <div class="col-sm-9">          
            <textarea class="form-control" placeholder="Query" ></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="pwd">Mobile : </label>
          <div class="col-sm-9">          
            <input type="tel" class="form-control" id="mobile" placeholder="Enter Mobile " name="mobile">
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-3 col-sm-10">
            <input type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" value="Submit">
          </div>
        </div>
      </form>
                </div>
            </div>
            <br>


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
              <iframe name="i_frame" style="height:750px; width:80%;  ">

                </iframe>
            </div>
            <div class="modal-footer">
              <input type="submit" value="Close" class="btn btn-default" data-dismiss="modal">
            </div>
          </div>

        </div>
      </div>




    <!-- Container (Services Section) -->
            <div class="col-sm-12 service-container">
                <div class="col-sm-8">
    <div class="container-fluid text-center" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <h2>SERVICES</h2>
      <h4>What we offer</h4>
      <br>
      <div class="row">
          <a href="#">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-list-alt logo-small"></span>
          <h4>SOLVED ASSIGNMENTS</h4>
          <p>Lorem ipsum dolor sit amet..</p>
        </div>
          </a>
         <a href="#">
          <div class="col-sm-4">
          <span class="glyphicon glyphicon-file logo-small"></span>
          <h4>PREVIOUS YEAR PAPERS</h4>
          <p>Lorem ipsum dolor sit amet..</p>
        </div>
          </a>
         <a href="#">     
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-lock logo-small"></span>
          <h4>PROJECTS</h4>
          <p>Lorem ipsum dolor sit amet..</p>
        </div>
          </a>
      </div>
      <br><br>
      <div class="row">
         <a href="#">
          <div class="col-sm-4">
          <span class="glyphicon glyphicon-education logo-small"></span>
          <h4>BCA / MCA CLASSES</h4>
          <p>Lorem ipsum dolor sit amet..</p>
        </div>
          </a>
           <a href="#">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-education logo-small"></span>
          <h4>QUICK TUTORIALS</h4>
          <p>Quick Tuitorials for BCA and MCA Students.</p>
        </div>
          </a>
           <a href="#">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-th-large logo-small"></span>
          <h4>OTHER PROGRAMMING CLASSES</h4>
          <p>Lorem ipsum dolor sit amet..</p>
        </div>
          </a>
      </div>
    </div>
            </div>
                 <div class="col-sm-4 sideinfo">
                     <h2>What We Created</h2>
                     <div class="project-list">
                     <marquee class="mark" direction="down" onmouseover="this.stop()" onmouseout="this.start()">
         <div class="row text-center2">
                       <div class="col-sm-12">
          <div class="thumbnail">
            <img src="http://www.w3schools.com/bootstrap/paris.jpg" alt="Paris" width="400" height="300">
            <p><strong>Paris</strong></p>
            <p>Yes, we built Paris</p>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="thumbnail">
            <img src="http://www.w3schools.com/bootstrap/newyork.jpg" alt="New York" width="400" height="300">
            <p><strong>New York</strong></p>
            <p>We built New York</p>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="thumbnail">
            <img src="http://www.w3schools.com/bootstrap/sanfran.jpg" alt="San Francisco" width="400" height="300">
            <p><strong>San Francisco</strong></p>
            <p>Yes, San Fran is ours</p>
          </div>
        </div>
                         <div class="col-sm-12">
          <div class="thumbnail">
            <img src="http://www.w3schools.com/bootstrap/paris.jpg" alt="San Francisco" width="400" height="300">
            <p><strong>San Francisco</strong></p>
            <p>Yes, San Fran is ours</p>
          </div>
        </div>
                         </div>       
                       </marquee>
      </div>
                </div>



                </div> <!--  End of Service Cpntainer -->


<!--
            <div class="col-sm-12 thoughts">
            <div class="12 wcs">
               <div class="col-sm-12">
                   <div class="team_member">
                   <h1>OUR TEAM</h1>
                   </div>
                </div>
                    <div class="col-sm-12">
                        <div class="members">
                            <div class="col-sm-4">
                             <h3>Shivam Rajput</h3>
                            <img src="images/2.jpg" class="img-circle" alt="Bird" width="150" height="150">
                            <h4>Web Developer</h4>
                            </div>
                             <div class="col-sm-4" style="border-left:1px solid gray; border-right: 1px solid gray;  ">
                            <h3>Mintu Sharma</h3>
                            <img src="images/3.jpg" class="img-circle" alt="Bird" width="150" height="150">
                            <h4>Web Designer / Software Developer</h4>
                            </div>
                             <div class="col-sm-4">
                           <h3>Ishminder Singh</h3>
                            <img src="images/3.jpg" class="img-circle" alt="Bird" width="150" height="150">
                            <h4>Web Developer / Software Developer</h4>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
-->
            <div class="col-sm-12 implinks" style="margin-top:10px; ">
            <div class="col-sm-8" style="height: 300px;">
                <div class="col-sm-12" style="height: 290px;background-color: cadetblue;margin-top:5px; ">
                <h3>Some Important Links</h3>
                </div>
                
            </div>
                <div class="col-sm-4" style="height: 300px;">
                 <div class="col-sm-12" style="height: 290px;background-color:cadetblue;margin-top:5px; margin-left: -5px">
                <h4>Follow Us</h4>
                </div>
                </div>
            </div>



            <!-- footer Start -->
            <div class="col-sm-12" style="margin: 0; padding: 0;">
                <footer class="text-center footertext">
      <a class="up-arrow" href="#" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a><br><br>
      <p>IgnouFear No Fear About Assignment , Projects , Classes etc. <a href="ignoufear.com" data-toggle="tooltip" title="Visit w3schools">IgnouFear</a></p> 
    </footer>
            </div>

        </body>
    </html>