<!-- Client Start -->
    <?php if (!$this->session->userdata('user_id')) { ?>
    <section class="client-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="call-action">
                    <h1>Registration is free and takes only seconds </br> Sign up today and start bidding</h1>
                    <a href="<?php echo base_url('register') ?>"><button class="btn btn-default btn-register-footer">Register</button></a>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <?php } ?>
    <!-- Footer Style Background ten Start -->
    <footer class="main-footer over-layer-black bg-footer-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-item footer-widget-one">
                <img class="footer-logo" src="#" alt="">
                <div>
                  <p>Dolorum quae quis cumque officia labore at animi non nisi, dolores sapiente fugit fuga eos aliquid.</p>
                    <hr>
                    
                  <h5>Newsletter</h5>
                  <form id="newslatter-form" method="post" action="<?php echo base_url('home/subscribe') ?>">
                    <div class="input-group subscribe-style-two">
                      <input type="email" name="email" required="" class="form-control" placeholder="Subscribe Now">
                      <span class="input-group-btn">
                        <button class="btn btn-subscribe" type="submit"><i class="fa fa-paper-plane"></i></button>
                      </span>
                    </div>
                    <div class="alert alert-success newslatter-alert success-true" style="display: none;">
                      <strong>Success!</strong> <span class="newslatter-message"></span>
                    </div>
                    <div class="alert alert-danger newslatter-alert success-false" style="display: none;">
                      <strong>Danger!</strong> <span class="newslatter-message"></span>
                    </div>
                  </form>
                </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-item">
              <div class="footer-title">
                <h4>Quick Links</h4>
                <div class="border-style-2"></div>
              </div>
              <ul class="footer-list border-deshed color-icon">
                <li><i class="pe-7s-angle-right"></i><a href="<?php echo base_url('pages/page/privacy-policy') ?>">Privacy Policy</a></li>
                <li><i class="pe-7s-angle-right"></i><a href="<?php echo base_url('pages/page/website-terms') ?>">Website Terms of Use</a></li>
                <li><i class="pe-7s-angle-right"></i><a href="<?php echo base_url('pages/page/member-terms') ?>">Member Terms & Conditions</a></li>
              </ul>

            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-item footer-widget-one">
              <div class="footer-title">
                <h4>Quick Contact</h4>
                <div class="border-style-2"></div>
              </div>
              <ul class="address">
                <li><i class="fa fa-phone" aria-hidden="true"></i> Phone: 001 (407) 901-6400</li> 
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:">Email: info@abc.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-item footer-widget-one">
              <div class="footer-title">
                <h4>Opening Hour</h4>
                <div class="border-style-2"></div>
              </div>
              <ul class="footer-list border-deshed">
                <li class="clearfix"> <span> Mon - Fri :  </span>
                  <div class="value pull-right"> 06.00 am - 06.00 pm </div>
                </li>
                <li class="clearfix"> <span> Sat - Sun :</span>
                  <div class="value pull-right"> Closed </div>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
        <div class="row social-row">
          <div class="col-md-12 text-center">
           <ul class="social-icon bg-transparent bordered">
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <section class="footer-copy-right text-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>Copyright © 2015-2018 Car Hut</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer Style Background ten End -->

    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo base_url('front_assets/js/jquery.min.js') ?>"></script>

    <!-- Bootstrap Min js -->
    <script type="text/javascript" src="<?php echo base_url('front_assets/js/bootstrap.min-v3.3.7.js') ?>"></script>
    <!-- bootstrap-dropdownhover js -->
    <script type="text/javascript" src="<?php echo base_url('front_assets/js/bootstrap-dropdownhover.min.js') ?>"></script>
    <!-- typing js -->
    <script type="text/javascript" src="<?php echo base_url('front_assets/js/typing.js') ?>"></script>
    <!-- VideoPopUp -->
    <script type="text/javascript" src="<?php echo base_url('front_assets/js/VideoPopUp.jquery.js') ?>"></script>
    <!-- counterup -->
    <script type="text/javascript" src="<?php echo base_url('front_assets/js/jquery.counterup.min.js') ?>"></script>
    <!-- waypoints -->
    <script type="text/javascript" src="<?php echo base_url('front_assets/js/jquery.waypoints.min.js') ?>"></script>
    <!-- carousel -->
    <script type="text/javascript" src="<?php echo base_url('front_assets/js/owl.carousel.min.js') ?>"></script>
    <!-- jarallax -->
    <script type="text/javascript" src="<?php echo base_url('front_assets/js/jarallax.min.js') ?>"></script>
    <!-- lightbox -->
    <script type="text/javascript" src="<?php echo base_url('front_assets/js/lightbox.min.js') ?>"></script>
    <!-- youtubebackground JS -->
    <script type="text/javascript" src="<?php echo base_url('front_assets/js/jquery.youtubebackground.js') ?>"></script>
    <!-- jquery scrollUp  JS -->
    <script type="text/javascript" src="<?php echo base_url('front_assets/js/jquery.scrollUp.min.js') ?>"></script>
    <!-- jquery scrollUp  JS -->
    <script type="text/javascript" src="<?php echo base_url('front_assets/js/jquery-ui.min.js') ?>"></script>
    <!-- wow.min JS -->
    <script type="text/javascript" src="<?php echo base_url('front_assets/js/wow.min.js') ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('admin_assets/assets/plugins/fullcalendar/lib/moment.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('admin_assets/assets/plugins/fullcalendar/fullcalendar.min.js') ?>"></script>
    <!-- Main Custom JS -->
    
    <script type="text/javascript" src="<?php echo base_url('front_assets/js/custom.js') ?>"></script>


    
    <script type="text/javascript">
      $(document).ready(function() {
        <?php if(isset($auctions)){ ?>
        $('#calendar').fullCalendar({
          header: {
              left: 'prev,next today',
              center: 'title',
              right: 'month,agendaWeek,agendaDay,listMonth'
          },
          defaultDate: '<?php echo date("Y-m-d") ?>',
          navLinks: true, // can click day/week names to navigate views
          businessHours: true, // display business hours
          editable: true,
          droppable: true,
          events: [
            <?php 
              foreach ($auctions as $a) {
                if ($a['Live'] == 'No') {
                  $url = base_url('listing/auction/'.$a['id']);
                }
                else{
                  $url = base_url('live_auctions/auction/'.$a['id']);
                }
            ?>
              {
                id: 'event-<?php echo $a['id'] ?>',
                title: '<?php echo $a['Location'] ?>',
                start: '<?php echo date('Y-m-d',strtotime($a['Date'])) ?>',
                url: "<?php echo $url ?>"
              },
            <?php } ?>
          ]
        })
        <?php } ?>
        
      })
      $('.make_id').on('change', function() {
          var make_id = $(this).val();
          make_id = $('.make_id option[value="'+make_id+'"]').attr('data-id')
          get_model(make_id);
      });

      function get_model(make_id) 
      {
          $.ajax({
              url: '<?php echo base_url('home/get_by_make_id') ?>',
              type: 'POST',
              dataType: 'JSON',
              data: {make_id: make_id},
          })
          .done(function(response) {
              var res = response.data;
              var row = '<option value="">Select Model</option>';
              $.each(res, function(index, el) {
                  row += createRow(el);
              });

              $('#model_dropdown').html(row);
          })
          .fail(function() {
              console.log("error");
          })
          .always(function() {
              console.log("complete");
          });
          
      }


      var createRow = function ( obj ) {
          var row =  '<option value="'+obj.Name+'">'+obj.Name+'</option>';
          return row;
      }
      $('.upload-document').click(function() {
        $('#select-image').click()
      })
      $('#select-image').change(function() {
        $('#image-upload').submit()
      })
      $('#image-upload').submit(function(e) {
        e.preventDefault();
        var url = $(this).attr('action')
        $.ajax({
            url: url, // Url to which the request is send
            type: "POST", // Type of request to be send, called as method
            data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false, // To send DOMDocument or non processed data file it is set to false
            success: function(data) // A function to be called if request succeeds
            {
              //data = data.images
              data = JSON.parse(data)
              console.log(data)
              for (var i = 0; i < data.length; i++) {
                $('.document-list').append('<li>'+data[i].file.replace("/uploads/", "")+' <i style="cursor: pointer;" class="remove-file" data-id="'+data[i].id+'">X</i></li>')
              }
            }
        });
      })
      $('body').on('click', '.remove-file', function() {
        var id = $(this).attr('data-id')
        $(this).parent().remove()
        $.ajax({
            url: '<?php echo base_url('account_activation/remove_file/') ?>'+id, // Url to which the request is send
            type: "GET", // Type of request to be send, called as method
            // To send DOMDocument or non processed data file it is set to false
            success: function(data) // A function to be called if request succeeds
            {
              
            }
        });
      })
    </script>  
    <script type="text/javascript" src="<?php echo base_url('front_assets/js/countrys.js') ?>"></script>
    <?php //if(!$location) print_r($location) ?>
    <?php 
      if(isset($locations) || isset($location) || isset($detail)){
        
      } 
      else{
        echo '<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnyLmOX8AkuEoneYCEG1TP-gYqb38aeMc&amp;callback=initMap" type="text/javascript"></script><script type="text/javascript" src="'.base_url('front_assets/js/map.js').'"></script>';
      }
    ?> 
</body>
</html>
