
    <!-- Start Categories -->
    <section class="blog-area animatedParent animateOnce">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="section-title">
              <h3>Vehicle Categories</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nam id maiores, accusantium, optio explicabo nemo nulla.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <?php 
            foreach ($vehicle_type as $v) {
          ?>
          <div class="col-md-4 col-sm-6">
            <div class="post-item animated fadeInLeftShort slow delay-250 go">
              <div class="post-img">
                  <a href="<?php echo base_url('listing/category/'.$v['id']) ?>"><img src="<?php echo base_url('front_assets/images/ajax-loader-gif.gif') ?>" class="ajax-img" data-src="<?php echo base_url($v['Image']) ?>" alt=""></a>
              </div>
              <div class="post-content">
                  <h3 class="post-title"><a href="<?php echo base_url('listing/category/'.$v['id']) ?>"><?php echo $v['Name'] ?></a></h3>
              </div>
            </div>
          </div>
          <?php } ?>
          <!-- <div class="col-md-4 col-sm-6">
            <div class="post-item animated fadeInLeftShort slow delay-500 go">
              <div class="post-img">
                  <a href="#"><img src="<?php echo base_url('front_assets/images/blog/Motorbikes.jpg') ?>" alt=""></a>
              </div>
              <div class="post-content">
                  <h3 class="post-title"><a href="#">Motorcycle</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="post-item animated fadeInLeftShort slow delay-750 go">
              <div class="post-img">
                  <a href="#"><img src="<?php echo base_url('front_assets/images/blog/Truck.jpg') ?>" alt=""></a>
              </div>
              <div class="post-content">
                  <h3 class="post-title"><a href="#">Truck</a></h3>
              </div>
            </div>
          </div> -->
        </div>
        <!-- <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="post-item animated fadeInLeftShort slow delay-250 go">
              <div class="post-img">
                  <a href="#"><img src="<?php echo base_url('front_assets/images/blog/Trailer.jpg') ?>" alt=""></a>
              </div>
              <div class="post-content">
                  <h3 class="post-title"><a href="#">Trailer</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="post-item animated fadeInLeftShort slow delay-500 go">
              <div class="post-img">
                  <a href="#"><img src="<?php echo base_url('front_assets/images/blog/boat.jpg') ?>" alt=""></a>
              </div>
              <div class="post-content">
                  <h3 class="post-title"><a href="#">Boat</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="post-item animated fadeInLeftShort slow delay-750 go">
              <div class="post-img">
                  <a href="#"><img src="<?php echo base_url('front_assets/images/blog/Industrial.jpg') ?>" alt=""></a>
              </div>
              <div class="post-content">
                  <h3 class="post-title"><a href="#">Industrial Equipments</a></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="post-item animated fadeInLeftShort slow delay-250 go">
              <div class="post-img">
                  <a href="#"><img src="<?php echo base_url('front_assets/images/blog/Snow.jpg') ?>" alt=""></a>
              </div>
              <div class="post-content">
                  <h3 class="post-title"><a href="#">Snowmobile</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="post-item animated fadeInLeftShort slow delay-500 go">
              <div class="post-img">
                  <a href="#"><img src="<?php echo base_url('front_assets/images/blog/Bus.jpg') ?>" alt=""></a>
              </div>
              <div class="post-content">
                  <h3 class="post-title"><a href="#">Bus</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="post-item animated fadeInLeftShort slow delay-750 go">
              <div class="post-img">
                  <a href="#"><img src="<?php echo base_url('front_assets/images/blog/jet-Ski.jpg') ?>" alt=""></a>
              </div>
              <div class="post-content">
                  <h3 class="post-title"><a href="#">Jet Ski</a></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          
          <div class="col-md-4 col-sm-6">
            <div class="post-item animated fadeInLeftShort slow delay-500 go">
              <div class="post-img">
                  <a href="#"><img src="<?php echo base_url('front_assets/images/blog/Recreation-Vechile.jpg') ?>" alt=""></a>
              </div>
              <div class="post-content">
                  <h3 class="post-title"><a href="#">Recreation Vehicle (rv)</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="post-item animated fadeInLeftShort slow delay-500 go">
              <div class="post-img">
                  <a href="#"><img src="<?php echo base_url('front_assets/images/blog/Other-Vechiles.jpg') ?>" alt=""></a>
              </div>
              <div class="post-content">
                  <h3 class="post-title"><a href="cars.html">Other Vehicles</a></h3>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </section>
    <!-- End Categories -->

    <!-- Separator start -->
    <section class="separator-area parallax overlay-black">
      <div class="container">
        <div class="row">
          <div class="col-md-8 center991">
            <div class="separator-col">
              <h2>we have <span>best car</span> collections</h2>
            </div>
          </div>
          <div class="col-md-4 center991">
            <div class="separator-col text-right center991">
              <a class="btn btn-default red my-btn" href="<?php echo base_url('listing') ?>" role="button">see all collections</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Separator End -->


    <!-- Our Services Five -->
    <section class="featured-area animatedParent animateOnce">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="section-title">
                <h3>4 Easy Steps</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nam id maiores, accusantium, optio explicabo nemo nulla.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column-margin">
                    <div class="services-features-five text-center animated fadeInLeftShort slow delay-250 go set-steps">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <div class="back-color">
                            <h4>REGISTER</h4>
                            <p>Sign-up is free. All you need is a valid email address, Facebook account or Google account and a valid form of ID. Select from three flexible memberships and start bidding right away.</p>
                            <a class="btn btn-default my-btn" href="#" role="button">Read More</a>
                        </div>
                    </div>  
                </div> 
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column-margin">
                    <div class="services-features-five text-center animated fadeInLeftShort slow delay-500 go set-steps">
                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        <div class="back-color">
                            <h4>SEARCH & BID</h4>
                            <p>Search through our vast inventory. Use our extensive notification tools to keep an eye on items you are interested in. With our flexible bidding options, you can pre-bid online.</p>
                            <a class="btn btn-default my-btn" href="#" role="button">Read More</a>
                        </div>
                    </div>  
                </div> 
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column-margin">
                    <div class="services-features-five text-center animated fadeInLeftShort slow delay-750 go set-steps">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                        <div class="back-color">
                            <h4>CLAIM IT</h4>
                            <p>Congratulations on your purchase! Once your bid is accepted, you will receive an email with your invoice and payment instructions. Once payment is received, claim your vehicle immediately.</p>
                            <a class="btn btn-default my-btn" href="#" role="button">Read More</a>
                        </div>
                    </div>  
                </div> 
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column-margin">
                    <div class="services-features-five text-center animated fadeInLeftShort slow delay-1000 go set-steps  ">
                        <i class="fa fa-ship" aria-hidden="true"></i>
                        <div class="back-color">
                            <h4>SHIP IT</h4>
                            <p>Have your vehicle shipped. Shipping is not an easy task, and requires a lot of know-how. Leave it to us. We take the hassle out of shipping so you can concentrate on more important things.</p>
                            <a class="btn btn-default my-btn" href="#" role="button">Read More</a>
                        </div>
                    </div>  
                </div> 
            </div>
    </section>

    <!-- Separator start -->
    <section class="separator-area parallax overlay-black">
      <div class="container">
        <form method="post" action="<?php echo base_url('listing/search') ?>">
          <div class="row">
            <div class="col-md-10 center991">
              <div class="separator-col">
                <div class="col-md-6 col-sm-6">
                  <div class="search-action">
                    <select name="make">
                      <option selected>CARS FOR SALE BY MAKE</option>
                      <?php foreach ($makes as $m) {?>
                      <option value="<?php echo $m['Name'] ?>"><?php echo $m['Name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="search-action">
                    <select name="location">
                      <option selected>CARS FOR SALE BY LOCATION</option>
                      <?php foreach ($locations as $l) {?>
                      <option value="<?php echo $l['Location'] ?>"><?php echo $l['Location'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 center991">
              <div class="separator-col text-right center991">
                <!-- <a class="btn btn-default red my-btn" href="car-grid-3.html" role="button">Search</a> -->
                <button type="submit" class="btn btn-default red my-btn">Search</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>


    <!-- Featured car start -->
    <section class="featured-area animatedParent animateOnce">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="section-title">
              <h3>Most Popular Items</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nam id maiores, accusantium, optio explicabo nemo nulla.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="featured-carousel">
            <?php foreach ($popular_listing as $l) {?>
            <?php 
              if (strpos($l['images'], 'http') !== false) {
                $image = $l['images'];
              }
              else{
                $image = base_url($l['images']);
              }
            ?>
            <div class="item">
              <div class="featured-col animated fadeInLeftShort slow delay-250 go">
                <div class="box">
                  <img src="<?php echo base_url('front_assets/images/ajax-loader-gif.gif') ?>" class="ajax-img" data-src="<?php echo $image ?>" alt="">
                  <h3 class="price">$<?php echo number_format($l['amount'], 2) ?> | Timeleft: <?php echo get_single_difrreance($l['Sale_Date']); ?></h3>
                  <div class="box-content">
                    <ul class="icon">
                      <li><a href="<?php echo $image ?>" data-lightbox="lightbox-1" data-title="<?php echo $l['Name'] ?>"><i class="fa fa-search"></i></a></li>
                      <li><a href="<?php echo base_url('listing/detail/'.$l['id']) ?>"><i class="fa fa-link"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="featured-info clearfix">
                  <p>launched: <a href="#"><?php echo date('d M Y', strtotime($l['created_at'])) ?></a></p>
                  <p>/</p>
                  <p>Brand: <a href="#"><?php echo $l['make'] ?></a></p>
                </div>
                <div class="featured-content">
                  <h4><a href="<?php echo base_url('listing/detail/'.$l['id']) ?>"><?php echo $l['Name'] ?></a></h4>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, maiores Repellat quia expedita, ullam minima cum.</p>
                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">240 Horsepower</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">auto start</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">petrol engine</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">6262 CC</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Mileage 4.0 kmpl</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">7 Gear box</a></li>
                      </ul>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
            <?php } ?>
            
          </div>
        </div>
      </div>
    </section>

    <!-- Discount Start -->
    <section class="discount-area">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="section-title">
              <h3>Car Auctions Near You</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nam id maiores, accusantium, optio explicabo nemo nulla.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="discount-carousel">
              <?php foreach ($live_listing as $l) {?>
              <?php 
                if (strpos($l['images'], 'http') !== false) {
                  $image = $l['images'];
                }
                else{
                  $image = base_url($l['images']);
                }
              ?>
              <div class="discount-carousel-item">
                <div class="discount-box">
                    <div class="ribbon ribbon-top-left"><span>Live</span></div>
                    <img src="<?php echo base_url('front_assets/images/ajax-loader-gif.gif') ?>" class="ajax-img" data-src="<?php echo $image ?>" alt="">
                    <div class="box-content">
                        <div class="content">
                            <h3 class="title"><?php echo $l['Name'] ?></h3>
                            <a href="#" class="read-more">Join Now for Free</a>
                        </div>
                    </div>
                </div>
                <div class="discount-price">
                  <h4>Auction Price: $<?php echo number_format($l['amount'], 2) ?></h4>
                  <span>For Sale In <?php echo $l['Location'] ?></span>
                </div>
              </div>
              <?php } ?>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Discount End