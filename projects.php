<!--    Navigation Bar Start Here-->
  <?php include('header.php'); ?>
  <!--    Navigation bar End here        -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-education"></span>IgnouSite</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">HOME</a></li>
          <li><a href="#">SERVICES</a></li>
          <li><a href="#">RESULT</a></li>
          <li><a href="projects.php">PROJECTS</a></li>
          <li><a href="contact.php">CONTACT</a></li>
          <li><a href="aboutus.php">ABOUT</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="col-sm-12 aboutustitle">
    <h1>Projects </h1>
  </div>
  <div class="col-sm-12">
    <div class=" col-sm-8 projectlist">

      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">
              <a data-toggle="collapse" class="btn2 collapsed" data-parent="#accordion" href="#collapse1"> <b> Project Based On Java Language </b></a>
            </h2>
          </div>
          <div id="collapse1" class="panel-collapse collapse in">
            <ul class="list-group">
              <li class="list-group-item">Online Examination System</li>
              <li class="list-group-item">Medical Store (Online Medical Store Management System) </li>
              <li class="list-group-item">Book Store (Online Book Store Management System)</li>
              <li class="list-group-item">Library Management System</li>
              <li class="list-group-item">School Management System</li>
            </ul>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span class="glyphicon glyphicon-plus"></span> <b> Project Based On PHP </b></a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <ul class="list-group">
              <li class="list-group-item">Online Examination System</li>
              <li class="list-group-item">Medical Store (Online Medical Store Management System) </li>
              <li class="list-group-item">Book Store (Online Book Store Management System)</li>
            </ul>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class="glyphicon glyphicon-plus"></span> <b> Project Based On Android </b></a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse">
            <ul class="list-group">
              <li class="list-group-item">Online Examination System</li>
              <li class="list-group-item">Medical Store (Online Medical Store Management System) </li>
              <li class="list-group-item">Book Store (Online Book Store Management System)</li>
            </ul>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-plus"></span> <b> Beginners Level Projects </b></a>
            </h4>
          </div>
          <div id="collapse4" class="panel-collapse collapse">
            <ul class="list-group">
              <li class="list-group-item">Online Examination System</li>
              <li class="list-group-item">Medical Store (Online Medical Store Management System) </li>
              <li class="list-group-item">Book Store (Online Book Store Management System)</li>
            </ul>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><span class="glyphicon glyphicon-plus"></span> <b> Advanced Level Projects</b> </a>
            </h4>
          </div>
          <div id="collapse5" class="panel-collapse collapse">
            <ul class="list-group">
              <li class="list-group-item">Online Examination System</li>
              <li class="list-group-item">Medical Store (Online Medical Store Management System) </li>
              <li class="list-group-item">Book Store (Online Book Store Management System)</li>
            </ul>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"><span class="glyphicon glyphicon-plus"></span> <b> Other Projects </b></a>
            </h4>
          </div>
          <div id="collapse6" class="panel-collapse collapse">
            <ul class="list-group">
              <li class="list-group-item">Online Examination System</li>
              <li class="list-group-item">Medical Store (Online Medical Store Management System) </li>
              <li class="list-group-item">Book Store (Online Book Store Management System)</li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-4 sideform2">
      <form class="form-horizontal" target="_self" >
        <h2 style="text-align: center">Quick Access</h2><br>
        <div class="form-group">
          <label class="control-label col-sm-3" for="email">Name : </label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="pwd">Email : </label>
          <div class="col-sm-8">
            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="pwd">Query : </label>
          <div class="col-sm-8">
            <textarea class="form-control" placeholder="Query" ></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="pwd">Mobile : </label>
          <div class="col-sm-8">
            <input type="tel" class="form-control" id="mobile" placeholder="Enter Mobile " name="mobile">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-3">
            <input type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" value="Submit">
          </div>
        </div>
      </form>
    </div>


  </div>


  <!-- Footer is fetched -->
  <?php include('footer.php'); ?>
