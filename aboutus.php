<!-- # Header is fetched -->
<?php require_once('header.php'); ?>

<?php
  $teamMembers =  array('Shivam Rajput', 'Ishminder kharbanda', 'Mintu Sharma');
  $teamMembersDescription = array('He is a geek, having 6GB RAM in his Linux machine and very lazy dude who likes to be in his room.');
?>


<div class="container-fluid about_container">
  <h1 class="about_h1"><?php echo ucfirst("Get to know us a little"); ?></h1>
</div>

<div class="row row_about">
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="about_img center">
      <img class="img-responsive" src="images/ignousite-iconn.png" alt="Ignousite.com icon">
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-xs-12" style="background-color: #fff;">
    <div class="about_paragraph">
      <p>Hi there,<br><br> We are team of ignousite. We all are not so very smart and are very lazy guys. We hate to code and hardwork (Just heard this word) but there is something that we're really fasinate about that is 'IGNOU'.</p>
      <p>We owe the university alot. It has completly changed our life and exposed us to the world of IT. So here we are, trying to do something that we love to do. </p>
      <p>For the IgnouSite, this is just a begining path. We have a broader vision for this website and need your support and good wishes. <br><br>Thank You! <br>Team IgnouSite</p>
    </div>
  </div>
</div>

<div class="row row_about" style="background-color:#2d4788; padding-bottom:60px;">
  <div class="social_profiles_heading"><h2><?php echo ucfirst("Connect with Ignousite"); ?></h2></div>
  <!-- <hr> -->
  <div class="col-md-2"></div>
  <div class="col-md-8" style="padding-bottom:15px;">
    <div class="row">
      <div class="col-md-2 col-sm-3 col-xs-4">
        <div class="social_profiles">
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="Ignousite On Github"><img src="images/github.svg" class="img-responsive"  id="hovers" alt="ignousite on Github"></a>
        </div>
      </div>

      <div class="col-md-2 col-sm-3 col-xs-4">
        <div class="social_profiles">
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="Ignousite On Stackoverflow"><img src="images/stackoverflow.svg" class="img-responsive" alt="ignousite on Stackoverflow"></a>
        </div>
      </div>

      <div class="col-md-2 col-sm-3 col-xs-4">
        <div class="social_profiles">
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="Ignousite On Telegram"><img src="images/telegram.svg" class="img-responsive" alt="Ignousite on telegram"></a>
        </div>
      </div>

      <div class="col-md-2 col-sm-3 col-xs-4">
        <div class="social_profiles">
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="Ignousite On Facebook"><img src="images/facebook.svg" class="img-responsive" alt="Ignousite on Facebook"></a>
        </div>
      </div>

      <div class="col-md-2 col-sm-3 col-xs-4">
        <div class="social_profiles">
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="Ignousite On Twitter"><img src="images/twitter.svg" class="img-responsive" alt="Ignousite on Twitter"></a>
        </div>
      </div>

      <div class="col-md-2 col-sm-3 col-xs-4">
        <div class="social_profiles">
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="Ignousite On Youtube"><img src="images/youtube.svg" class="img-responsive" alt="Ignousite on Youtube"></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-2"></div>

</div>

<!-- Team section starts here -->
<div class="row row_about" style="background-color:#f8f8f8; padding:0; padding-bottom:60px;">
  <div class="social_profiles_heading"><h2 style="color:#2d4788;"><?php echo ucfirst("Ignousite Team"); ?></h2></div>
  <!-- <hr> -->
  <div class="col-md-2"></div>
  <div class="col-md-8" style="padding-bottom:15px;">
    <div class="row">
      <div class="col-md-12">
        <div class="row">

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="card team_card">
              <img class="card-img-top team_card_img" src="images/ignousite-iconn.png" alt="Card image cap">
              <div class="card-body team_card_body">
                <h4 class="card-title"><?php echo $teamMembers[0]; ?></h4>
                <p class="card-text"><?php echo $teamMembersDescription[0]; ?></p>
                <a href="#" class="btn btn-primary">Linkedin Profile</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="card team_card">
              <img class="card-img-top team_card_img" src="images/ignousite-iconn.png" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title"><?php echo $teamMembers[1]; ?></h4>
                <p class="card-text"><?php echo $teamMembersDescription[0]; ?></p>
                <a href="#" class="btn btn-primary">Linkedin Profile</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="card team_card">
              <img class="card-img-top team_card_img" src="images/ignousite-iconn.png" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title"><?php echo $teamMembers[2]; ?></h4>
                <p class="card-text"><?php echo $teamMembersDescription[0]; ?></p>
                <a href="#" class="btn btn-primary">Linkedin Profile</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>

</div>
<!-- Team section ends here -->




<!-- # Footer is fetched -->
<?php require_once('footer.php'); ?>
