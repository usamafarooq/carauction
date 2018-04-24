<!-- Page Title bar -->
    <section class="defult-page-title overlay-black">
      <div class="angle-overlay"></div>
      <div class="container clearfix">
          <div class="row">
              <div class="col-md-6">
                  <div class="page-title-box center991">
                      <h2>Salvage, Repairable and Clean Title Vehicles for Sale</h2>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="page-title-box center991 clearfix">
                  <img src="<?php echo base_url('front_assets/images/car.png') ?>" alt="">
                </div>
              </div>
          </div>
      </div>
    </section>

    <!-- welcome start -->
    <section class="car-search-bar mt0">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="search-col">
              <select>
                <option value="0" selected>Any Brand</option>
                <option value="1">Audi</option>
                <option value="2">BMW</option>
                <option value="3">Mercedes-Benz</option>
                <option value="4">Opel</option>
                <option value="5">Porsche</option>
              </select>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="search-col">
              <select>
                <option value="0" selected>Any Type</option>
                <option value="1">F01 ActiveHybrid 7</option>
                <option value="2">Mercedes-Benz SLC-Class</option>
                <option value="3">BMW badge on a 1931 Dixi</option>
                <option value="4">Porsche 911</option>
                <option value="5">Volkswagen Golf</option>
              </select>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="search-col">
              <select>
                <option value="0" selected>Select Year</option>
                <option value="1">2014</option>
                <option value="2">2015</option>
                <option value="3">2016</option>
                <option value="4">2017</option>
                <option value="5">2018</option>
              </select>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="search-col">
              <select>
                <option value="0" selected>Choose Color</option>
                <option value="1">Black</option>
                <option value="2">Blue</option>
                <option value="3">Green</option>
                <option value="4">Red </option>
                <option value="5">Matt Black</option>
              </select>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="search-col">
              <select>
                <option value="0" selected>Mileage Per Litter</option>
                <option value="1">12 Km</option>
                <option value="2">10 Km</option>
                <option value="3">8 Km</option>
                <option value="4">16 Km</option>
                <option value="5">5 Km</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="search-col">
              <p class="car-price">
                Price Range: <span id="amount"></span>
              </p>
              <div id="slider-range"></div>
            </div>
          </div>
          <div class="col-md-3 col-sm-12">
            <div class="search-col">
              <button class="btn btn-default my-btn" type="submit">Search Car</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Car Details start -->
    <section class="car-details-area">
      <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8">
              <div class="car-details-col">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false"> 
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <?php 
                      $images = explode(',', $detail['images']);
                      $active = 0;
                      for ($i=0; $i < sizeof($images); $i++) { 
                    ?>
                    <div class="item <?php echo ($active == 0 ) ? 'active' : NULL ?> ">
                      <img src="<?php echo base_url(str_replace(' ', '', $images[$i])) ?>" alt="">
                       <div class="carousel-caption">
                        <h3>Best Features</h3>
                      </div>
                    </div>
                    <?php 
                        if ($active == 0) {
                          $active = 1;
                        }
                      } 
                    ?>
                    <!-- End Item -->  
                  </div><!-- End Carousel Inner -->
                  <ul class="nav nav-pills nav-justified">
                    <?php 
                      for ($i=0; $i < sizeof($images); $i++) { 
                        echo '<li data-target="#myCarousel" data-slide-to="'.$i.'" class="active"><a href="#"><img src="'.base_url(str_replace(' ', '', $images[$i])).'" alt=""></a></li>';
                      }
                    ?>
                  </ul>
                </div><!-- End Carousel -->
                <div class="car-description">
                  <h3>few description about <span><?php echo $detail['Name'] ?></span></h3>
                <div class="specification-box">
                  <h3>Sale Information</h3>
                  <div class="specification-content">
                    <div class="row">
                        <ul class="specification-list">
                          <li><strong>Bid Status:</strong> <span>Bid Status</span></li>
                          <li><strong>Sale Location:</strong><span>  <?php echo $detail['Sale_Location'] ?> <a href="#">Show on map</a></span></li>
                          <li><strong>Vehicle Location:</strong><span> <?php echo $detail['Vehicle_Location'] ?></span></li>
                          <li><strong>Sale Status:</strong><span> <?php echo $detail['Sale_Status'] ?></span></li>
                          <li><strong>Sale Date:</strong><span>  <?php echo date('l, F d, Y', strtotime($detail['Sale_Date'])) ?></span></li>
                          <li><strong>Data Last Updated: </strong><span>  <?php echo date('d/m/Y H:i', strtotime($detail['created_at'])) ?></span></li>
                          <li><strong>Item#:</strong><span>  <?php echo $detail['Item'] ?></span></li>
                          <h5><strong>SOLD AS IS, WHERE IS - ALL SALES ARE FINAL</strong></h5>
                        </ul>
                      </div>
                  </div>
                </div>
                <div class="specification-box">
                  <h3>Shipping Estimator</h3>
                  <hr class="custo-line">
                  <div class="specification-content">
                    <div class="row">
                        <ul class="specification-list">
                          <li><strong>Shipping price:</strong> <span style="font-weight: 800;color: #a11808;"> Request Custom Quote Change Country</span></li>
                          </ul>
                      </div>
                  </div>
                </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere doloremque iure architecto nobis sint rerum nemo consequuntur, maiores voluptatibus dolore quo qui fugiat soluta cumque voluptates exercitationem optio non libero error perspiciatis sequi incidunt. Architecto id explicabo libero aspernatur aperiam voluptatibus doloribus, autem, repudiandae suscipit nisi in sunt ut ipsa error placeat vero quia corporis dolorem iusto porro, ad eos impedit! Fuga dicta modi ipsa, mollitia amet nihil ullam nam quia assumenda nesciunt tempora.</p>
                  <p class="text-hilight">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae minus ipsum, repellendus repellat obcaecati esse quae nisi, consectetur, mollitia provident voluptates doloremque.
                  </p>
                </div>

              </div>
            </div>
            <div class="col-lg-6 col-md-4">
              <div class="car-sidebar">
                 <div class="bid-box">
                  <h3><i class="fa fa-circle"></i>Live Auction is About to Start </br><button class="btn btn-deafult bid-btn-inner">Bid Now</button></h3>
                  <h2>Timer: <?php echo get_single_difrreance($detail['Sale_Date']); ?></h2>
                </div>  
                <div class="car-sidebar-widget car-category clearfix">
                    <div class="car-sidebar-title">
                      <h4>Vehicle Information</h4>
                    </div>
                    <ul class="bid-part-details">
                      <li><strong>Stock#</strong><span><?php echo $detail['Stock_ID'] ?></span></li>
                      <li><strong>Type</strong><span><?php echo $detail['type'] ?></span></li>
                      <li><strong>Year</strong><span><?php echo $detail['Year'] ?></span></li>
                      <li><strong>Make</strong><span><?php echo $detail['make'] ?></span></li>
                      <li><strong>Model</strong><span><?php echo $detail['model'] ?></span></li>
                      <li><strong>Series</strong><span><?php echo $detail['Series'] ?></span></li>
                      <li><strong>Odometer</strong><span><?php echo $detail['Odometer'] ?></span></li>
                      <li><strong>Sale Document</strong><span><?php echo $detail['Sale_Document'] ?></span></li>
                      <li><strong>Sale Document Notes</strong><span><?php echo $detail['Sale_Document_Notes'] ?></span></li>
                      <li><strong>Loss</strong><span><?php echo $detail['Loss'] ?></span></li>
                      <li><strong>Damage Type</strong><span><?php echo $detail['Damage_Type'] ?></span></li>
                      <li><strong>ACV</strong><span>$<?php echo $detail['ACV'] ?></span></li>
                      <li><strong>Estimated Repair Cost</strong><span>$<?php echo $detail['Estimated_Repair_Coast'] ?></span></li>
                      <li><strong>VIN</strong><span><?php echo $detail['VIN'] ?></span></li>
                      <li><strong>Exterior Color</strong><span><?php echo $detail['Exterior_Color'] ?></span></li>
                      <li><strong>Interior Color</strong><span><?php echo $detail['Interior_Color'] ?></span></li>
                      <li><strong>Body Style</strong><span><?php echo $detail['Body_Style'] ?></span></li>
                      <li><strong>Vehicle Class</strong><span><?php echo $detail['Vehicle_Class'] ?></span></li>
                      <li><strong>Engine</strong><span><?php echo $detail['Engine'] ?></span></li>
                      <li><strong>Cylinders</strong><span><?php echo $detail['Cylinder'] ?></span></li>
                      <li><strong>Fuel Type</strong><span><?php echo $detail['Fuel_Type'] ?></span></li>
                      <li><strong>Transmission</strong><span><?php echo $detail['Transmission'] ?></span></li>
                      <li><strong>Drive Type</strong><span><?php echo $detail['Driver_Type_'] ?></span></li>
                      <li><strong>Manufactured in</strong><span><?php echo $detail['Manufactured_In'] ?></span></li>
                      <li><strong>Key</strong><span><?php echo $detail['Key_item'] ?></span></li>
                      <li><strong>Start Code</strong><span><?php echo $detail['Start_Code'] ?></span></li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>