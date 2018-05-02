

    <!-- Featured Car start -->
    <section class="featured-area" style="padding-bottom:  0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="section-title slash-double">
              <h3>Car Auction Locations Across North America</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
        <!-- Car Details start -->
    <section class="car-details-area" style="padding: 0px 0px 0px 0px;">
      <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13004095.125006784!2d-104.65808153442057!3d37.27550767453689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2s!4v1522315174319" width="750" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div> -->
              <div id="map"></div>
            </div>
            <div class="col-lg-4 col-md-4">
              <form method="post" action="">
                <div class="car-sidebar" style="margin-top:  15px;" >
                  <div class="row bg-opt-result" style="padding: 12px 12px; background: #eeeeee;">
                    <div class="bg-opt">
                      <input id="date" type="date" name="date" value="<?php if(isset($form['date'])) echo $form['date'] ?>"></input>
                      <div class="dropdown-result location-slc" style="float: left; margin-top: 20px;">
                        <select id="auc-date" name="state">
                          <option value="">All States</option>
                          <?php 
                            $id = '';
                            if(isset($form['state'])) 
                              $id = $form['state'];
                            foreach ($states as $s) {
                              $selected = '';
                              if ($s['State'] == $id) {
                                $selected = 'selected';
                              }
                              echo '<option value="'.$s['State'].'" '.$selected.'>'.$s['State_Full'].'</option>';
                            }
                          ?>
                        </select>                          
                      </div>
                    </div>  
                </div>
                <button class="btn btn-default search-loc" type="submit">Find Facilities</button>
              </form> 
            </div>  
        </div>
      </div>
    </section>
    <section class="car-auc-list">
      <div class="container">
        <div class="row">
        <div class="col-lg-12 col-md-12"> 
          <div class="car-auction-details">
            <div class="section-title" style="margin-bottom: 22px;">
              <h3>Car Auction List <?php echo sizeof($locations) ?></h3>
            </div>
            <div class="specification-box" style="padding: 6px 15px; background: none;">
                  <div class="row">
                     <table class="list-auc">
                      <tr>
                        <th>Auction Location</th>
                        <th>Auction Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Phone Number</th>
                      </tr>
                      <?php foreach ($locations as $l) {?>
                      <tr>
                        <td><a href="<?php echo base_url('listing/location/'.$l['id']) ?>"><?php echo $l['Location'] ?></a></td>
                        <td><?php echo $l['Address'] ?></td>
                        <td><?php echo $l['City'] ?></td>
                        <td><?php echo $l['State'] ?></td>
                        <td><?php echo $l['Phone'] ?></td>
                      </tr>
                      <?php } ?>
                    </table>
                  </div>
          </div>
        </div>
      </div>
    </section>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfYi223bynfI12jcbfAGFw9eRYPLISRx0&sensor=false"></script>
<script type="text/javascript">
  var map;
  map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: new google.maps.LatLng(36.778259, -119.417931),
      mapTypeId: 'roadmap'
  });
  var INFOwindow;
  <?php foreach ($locations as $l) {?>
  var latitude;
  var longitude;
  var geocoder = new google.maps.Geocoder();
  geocoder.geocode({
    'address': '<?php echo $l['Zip_Code'] ?>'
  }, function (results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      latitude = results[0].geometry.location.lat();
      longitude = results[0].geometry.location.lng();
      var position = new google.maps.LatLng(latitude, longitude);
      var marker = new google.maps.Marker({
          position: position,
          // icon: {
          //     url: feature.type,
          //     size: new google.maps.Size(150, 150),
          //     origin: new google.maps.Point(0, 0),
          //     anchor: new google.maps.Point(25, 50)
          // },
          map: map
      });
      var contentString = '<div class="map-info-window"><div class="info-window-title"><a href="#"><?php echo $l['Location'] ?></a></div><div class="address"> <?php echo $l['Address'] ?></div><div class="phone"><span class="block-title">Phone:</span> <?php echo $l['Phone'] ?></div><div class="hours"><span class="block-title">Office Hours:</span> <?php echo $l['Office_Hours'] ?></div><div><br>For more information <a href="<?php echo base_url('listing/location/'.$l['id']) ?>">click here</a></div></div>';
      var infowindow = new google.maps.InfoWindow({
          content: contentString
      });
      marker.addListener('click', function () {
        if (INFOwindow)
        {
            INFOwindow.close();
        }
        INFOwindow = infowindow;
        infowindow.open(map, marker);
        //$('.gm-style-iw').parent().css('margin-left', '-60px')
      });
    }
  });
  <?php } ?>
</script>