<!-- # Header is fetched -->
<?php include('header.php'); ?>

<div class="col-sm-12 aboutustitle">
  <h1>Contact Us</h1>
</div>

<!-- About us Page  bigcontainer -->
<div class="col-sm-12">
  <div class="contactform">
    <!-- Container (Contact Section) -->
    <div class="container-fluid bg-grey">
      <h2 class="text-center">CONTACT US</h2>
      <br><br>
      <div class="row">
        <div class="col-sm-5">
          <p>Contact us and we'll get back to you within 24 hours.</p>
          <p><span class="glyphicon glyphicon-map-marker"></span> Dwarka, Delhi</p>
          <p><span class="glyphicon glyphicon-phone"></span> +91 9717656004</p>
          <p><span class="glyphicon glyphicon-envelope"></span> ignoufear@gmail.com</p>
        </div>
        <div class="col-sm-7">
          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="mobile" name="mobile" placeholder="Mobile" type="tel" required>
            </div>
          </div>
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          <br>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5" cols="1"></textarea><br>
          <div class="row">
            <div class="col-sm-12 form-group">
              <button class="btn btn-default pull-right" type="submit">Send</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-12">
  <div class="col-sm-5 ">
    <div class="planguage">
    </div>
  </div>

  <div class="col-sm-5" >
    <!-- Add Google Maps -->
    <div class="map">
      <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAltuuYffzRzP5TVONS-_pfywgMiBg_YFQ'></script><div style='overflow:hidden;height:400px;width:100%;'><div id='gmap_canvas' style='height:400px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://indiatvnow.com/'>https://IndiaTVnow.com</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=3aeb1eb26f37e1bdf1358c493c3fe44e50dce595'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(28.6014455,77.08594519999997),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.6014455,77.08594519999997)});infowindow = new google.maps.InfoWindow({content:'<strong>Contact me</strong><br>Dwarka Sector 1A<br>110045 New Delhi<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

    </div>
  </div>
</div>

<!-- # Footer is fetched -->
<?php include('footer.php'); ?>
