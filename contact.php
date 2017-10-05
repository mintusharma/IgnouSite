<!-- # Header is fetched -->
<?php include('header.php'); ?>

<div class="container-fluid about_container contact_container">
  <h1 class="about_h1"><?php echo ucfirst("Contact Us"); ?></h1>
</div>

<!-- About us Page  bigcontainer -->
<div class="row contact_row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="row">
      <div class="contact_heading">
        <p>We would love to hear from you. Tell us what you think about ignousite or you want to suggest something, go ahead and send us your message.</p>
        <p>If you have found any bug or issue in the Ignousite, Let us know. We'll add your name to our contrubutors page. See ya!</p>
      </div>
      <div class=" col-md-12 border_this_row">
        <div class="col-md-6">
          <div class="contact_main_wrapper">
            <div class="contact_info_heading">
              <h4>Contact Information</h4>
            </div>
            <ul class="contact_ul">
              <li><span class="	glyphicon glyphicon-comment"></span> Telegram Contact</li>
              <li><span class="glyphicon glyphicon-send"></span> message@ignousite.com</li>
              <li><span class="glyphicon glyphicon-phone-alt"></span> +91 99xxxxxxxx, +91 99xxxxxxxx</li>
              <li><span class="glyphicon glyphicon-map-marker"></span> West Sagarpur, New delhi - 110046</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="contact_main_wrapper" style="border-left:.06px solid #879bbd;">
            <div class="contact_info_heading">
              <h4>Message Ignousite</h4>
            </div>
            <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" id="tel" placeholder="Mobile No" name="tel">
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="8" id="comment" name="message" placeholder="Your Message"></textarea>
              </div>
              <button type="submit" class="btn btn-default">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-2"></div>
</div>



<!-- # Footer is fetched -->
<?php include('footer.php'); ?>
