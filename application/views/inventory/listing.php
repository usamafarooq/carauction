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
                  <img src="images/car.png" alt="">
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

    <!-- Featured Car start -->
    <section class="featured-area">
      <div class="container">
        <div class="row bg-opt-result">
          <div class="bg-opt">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="result-detail"><h4>Showing results  ( 1 - 10 ) of <span>  <?php echo sizeof($listing) ?>+</span></h4></div>  
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="dropdown-result">
                <select id="auc-date">
                  <option value="volvo">Auction Date</option>
                  <option value="saab">Year</option>
                  <option value="mercedes">Make</option>
                  <option value="audi">Model</option>
                  <option value="saab">Mielage</option>
                  <option value="mercedes">Damage</option>
                  <option value="audi">Action Location</option>
                  <option value="mercedes">Current Bid (USD)</option>
                  <option value="audi">Item#</option>
                </select>
                <select id="auc-date">
                  <option value="volvo">ASC</option>
                  <option value="saab">DSC</option>
                </select>
                <select id="auc-date">
                  <option value="volvo">10</option>
                  <option value="saab">20</option>
                  <option value="mercedes">30</option>
                  <option value="audi">40</option>
                </select>                             
              </div>  
            </div>
          </div>
        </div>
        <div class="row">
          <?php foreach ($listing as $l) {?>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="featured-col">
              <div class="box">
                <img src="<?php echo base_url($l['images']) ?>" alt="">
                <h3 class="price">$49,999</h3>
                <div class="box-content">
                  <ul class="icon">
                    <li><a href="<?php echo base_url($l['images']) ?>" data-lightbox="lightbox-1" data-title="<?php echo $l['Name'] ?>"><i class="fa fa-search"></i></a></li>
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
                <p>999999 miles | LEFT SIDE</p>
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <ul>
                      <li>Location: <span><?php echo $l['Sale_Location'] ?></span></li>
                      <li>Date: <span><?php echo date('d / m / Y', strtotime($l['Sale_Date'])) ?></span></li>
                      <li>Time Left: <span><?php echo get_difrreance($l['Sale_Date']); ?></span></li>
                    </ul>
                    <button class="btn btn-deafult bid-btn">Bid Now</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="inner-pagination text-center">
            <nav aria-label="Page navigation">
              <ul class="pagination m0">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
        </div>
      </div>
    </section>
