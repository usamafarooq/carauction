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
                  <div class="input-group subscribe-style-two">
                    <input type="email" class="form-control" placeholder="Subscribe Now">
                    <span class="input-group-btn">
                      <button class="btn btn-subscribe" type="button"><i class="fa fa-paper-plane"></i></button>
                    </span>
                  </div>
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
                <li><i class="pe-7s-angle-right"></i><a href="#">Privacy Policy</a></li>
                <li><i class="pe-7s-angle-right"></i><a href="#">Website Terms of Use</a></li>
                <li><i class="pe-7s-angle-right"></i><a href="#">Member Terms & Conditions</a></li>
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
            <p>Copyright © 2015-2018 SCA AUCTIONS, LLC. SCA™ trademark and SCA™ logo are registered to SCA AUCTIONS, LLC. All Rights Reserved. All other logos, brands and designated trademarks are the property of their respective holders.</p>
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
            <?php foreach ($auctions as $a) {?>
              {
                id: 'event-<?php echo $a['id'] ?>',
                title: '<?php echo $a['Location'] ?>',
                start: '<?php echo date('Y-m-d',strtotime($a['Date'])) ?>',
                url: "#"
              },
            <?php } ?>
          ]
        })
        <?php } ?>
      })
    </script>   
</body>
</html>
