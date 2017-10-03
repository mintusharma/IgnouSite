<html>
<head>
  <title>Tutorials</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- <meta name="google-signin-scope" content="profile email">
  <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script> -->

  <style>
  body{clear: both; margin: 0 auto;}

  .tutorials h1{
    padding-top:100px;
    font-size:5em;
    margin: 0 auto;
    color: white;
    text-align: center;
    font:comic sans ms;
  }
  .card_views{

    height:auto;
  }
  .sub_cards{
    margin-left:6%;
    margin-bottom:10px;
    margin-top:10px;
    height:300px;

    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);

  }
  .card_image{

    height:70%;
    margin-top:4%;
    margin-bottom:2%;
  }
  .card_button button{
    height:23%;
    margin: 0;

  }

  .bca,.mca{
    height:60px;

    margin:0;
    text-align: center;
    clear: both;
  }
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
  <!--    Navigation bar End here        -->

  <!-- Cards Starting From Here  -->

  <div class="col-sm-12 tutorials">
    <h1 style="color:Blue">Tutorials</h1>
  </div>
  <div class="col-sm-12 card_views">
    <div class="col-sm-12 card_container">

      <div class="col-sm-3 sub_cards">
        <div class="col-sm-12 card_image"><img class="col-sm-12" src="images/c.jpg"/></div>
        <div class="col-sm-12 card_button">
          <button type="button" class="btn btn-primary btn-block"><h3>C Tutorials</h3></button>
        </div>
      </div>
      <div class="col-sm-3 sub_cards">
        <div class="col-sm-12 card_image"><img class="col-sm-12" src="images/c2.jpg"/></div>
        <div class="col-sm-12 card_button">
          <button type="button" class="btn  btn-primary btn-block"><h3>C# Tutorials</h3></button>
        </div>
      </div>
      <div class="col-sm-3 sub_cards">
        <div class="col-sm-12 card_image"><img class="col-sm-12" src="images/images.png"/></div>
        <div class="col-sm-12 card_button">
          <button type="button" class="btn btn-primary btn-block"><h3>C++ Tutorials</h3></button>
        </div>
      </div>
      <div class="col-sm-3 sub_cards">
        <div class="col-sm-12 card_image"><img class="col-sm-12" src="images/c2.jpg"/></div>
        <div class="col-sm-12 card_button">
          <button type="button" class="btn btn-primary btn-block"><h3>Python Tutorials</h3></button>
        </div>
      </div>
      <div class="col-sm-3 sub_cards">
        <div class="col-sm-12 card_image"><img class="col-sm-12" src="images/images.png"/></div>
        <div class="col-sm-12 card_button">
          <button type="button" class="btn btn-primary btn-block"><h3>Java Tutorials</h3></button>
        </div>
      </div>
      <div class="col-sm-3 sub_cards">
        <div class="col-sm-12 card_image"><img class="col-sm-12" src="images/c.jpg"/></div>
        <div class="col-sm-12 card_button">
          <button type="button" class="btn btn-primary btn-block"><h3>Spring Tutorials</h3></button>
        </div>
      </div>


      <!-- Footer is fetched -->
       <?php include('footer.php'); ?>
