
    <!-- Featured Car start -->
    <section class="featured-area">
      <div class="container">
        <div class="row bg-opt-result">
          <div class="bg-opt">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <?php 
                $start = ($result * ($current_page - 1));
                $on = $start + 1;
                $end = $start + sizeof($listing);
                if ($total_rows > 0) {
                  $num = $on .' - '.$end;
                }
                else{
                  $num = '0';
                }
                //echo $start;
              ?>

              
              <div class="result-detail"><h4>Showing results  ( <?php echo $num ?> ) of <span>  <?php echo $total_rows ?>+ </span></h4></div>  
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <form method="get" action="<?php echo current_url() ?>" class="sorting-form">
                <div class="dropdown-result">
                  <?php 
                    $sort = '';
                    $type = '';
                    $pagination = '';
                    if (isset($sorting)) {
                      if (isset($sorting['sort'])) {
                        $sort = $sorting['sort'];
                      }
                      if (isset($sorting['type'])) {
                        $type = $sorting['type'];
                      }
                      if (isset($sorting['pagination'])) {
                        $pagination = $sorting['pagination'];
                      }
                    }
                  ?>
                  <select id="auc-date" name="sort">
                    <option value="auctions.Date" <?php if($sort == 'auctions.Date') echo 'selected' ?>>Auction Date</option>
                    <option value="Year" <?php if($sort == 'Year') echo 'selected' ?>>Year</option>
                    <option value="makes.Name" <?php if($sort == 'makes.Name') echo 'selected' ?>>Make</option>
                    <option value="models.Name" <?php if($sort == 'models.Name') echo 'selected' ?>>Model</option>
                    <!-- <option value="saab">Mielage</option> -->
                    <option value="Damage_Type" <?php if($sort == 'Damage_Type') echo 'selected' ?>>Damage</option>
                    <option value="locations.Location" <?php if($sort == 'locations.Location') echo 'selected' ?>>Action Location</option>
                    <option value="inventory_bids.bid" <?php if($sort == 'inventory_bids.bid') echo 'selected' ?>>Current Bid (USD)</option>
                    <option value="Item" <?php if($sort == 'Item') echo 'selected' ?>>Item#</option>
                  </select>
                  <select id="auc-date" name="type">
                    <option value="ASC" <?php if($type == 'ASC') echo 'selected' ?>>ASC</option>
                    <option value="DESC" <?php if($type == 'DESC') echo 'selected' ?>>DESC</option>
                  </select>
                  <select id="auc-date" name="pagination">
                    <option value="10" <?php if($pagination == '10') echo 'selected' ?>>10</option>
                    <option value="20" <?php if($pagination == '20') echo 'selected' ?>>20</option>
                    <option value="30" <?php if($pagination == '30') echo 'selected' ?>>30</option>
                    <option value="40" <?php if($pagination == '40') echo 'selected' ?>>40</option>
                  </select>                             
                </div>  
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <?php foreach ($listing as $l) {?>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="featured-col">
              <div class="box">
                <?php 
                  if (strpos($l['images'], 'http') !== false) {
                    $image = $l['images'];
                  }
                  else{
                    $image = base_url($l['images']);
                  }
                ?>
                <img src="<?php echo base_url('front_assets/images/ajax-loader-gif.gif') ?>" class="ajax-img" data-src="<?php echo $image ?>" alt="">
                <h3 class="price">$<?php echo number_format($l['amount'], 2) ?></h3>
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
                <p>Brand: <a href="#"><?php echo substr($l['make'], 0, 10) ?></a></p>
              </div>
              <div class="featured-content">
                <h4><a href="<?php echo base_url('listing/detail/'.$l['id']) ?>"><?php echo substr($l['Name'], 0, 20)  ?></a></h4>
                <p><?php echo substr($l['Damage_Type'], 0, 10)?></p>
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <ul>
                      <li>Location: <span><?php echo $l['Location'] ?></span></li>
                      <li>Date: <span><?php echo date('d / m / Y', strtotime($l['Sale_Date'])) ?></span></li>
                      <li>Time Left: <span><?php echo get_difrreance($l['Sale_Date']); ?></span></li>
                    </ul>
                    <button class="btn btn-deafult bid-btn">Bid Now</button><br><br>
                    <?php 
                      // $url = base_url('listing/watch/');
                      // $se_url = base_url('listing/unwatch/');
                      // $class = 'add-watch';
                      // $text = '+Watch';
                      // if ($l['watch'] > 0) {
                      //   $class = 'add-unwatch';
                      //   $text = '-Unwatch';
                      // }
                    ?>
                    <button <?php if($l['watch'] > 0) echo 'style="display: none"' ?> class="btn btn-deafult  open-model <?php if ($this->session->userdata('user_id')) echo 'add-watch' ?>" data-model="watch-model" <?php if ($this->session->userdata('user_id')) echo 'data-id="'.$l['id'].'"' ?> <?php if ($this->session->userdata('user_id')) echo 'data-url="'.base_url('listing/watch/').'"' ?> >+Watch</button>
                    <button <?php if($l['watch'] == 0) echo 'style="display: none"' ?>  class="btn btn-deafult  open-model <?php if ($this->session->userdata('user_id')) echo 'add-unwatch' ?>" data-model="watch-model" <?php if ($this->session->userdata('user_id')) echo 'data-id="'.$l['id'].'"' ?> <?php if ($this->session->userdata('user_id')) echo 'data-url="'.base_url('listing/unwatch/').'"' ?> >-Unwatch</button>
                    <?php if ($this->session->userdata('user_id')) { ?>
                    <button class="btn btn-deafult  open-model pull-right" data-model="noti<?php echo $l['id'] ?>-model">Notification</button>
                    <?php } ?>
                    <?php if (!$this->session->userdata('user_id')) { ?>
                    <div class="glue-modal watch-model" id="fpc-bid-info-modal">
                      <div class="title">
                        Please Enter to the Site                            
                        <span class="modal-arrow-up"></span>
                        <div class="close-modal"></div>
                      </div>
                      <div class="content">
                        <p>You must be logged in or registered in order to be able to bid</p>
                        <p><a href="<?php echo base_url('login') ?>">Login to account</a> or <a href="<?php echo base_url('register') ?>">Register for FREE</a></p>                        
                      </div>
                    </div>
                    <?php }else{ ?>
                    <div class="glue-modal noti<?php echo $l['id'] ?>-model" id="fpc-bid-info-modal" style="width: 370px !important;">
                      <div class="title">
                        Watchlist Notifications                           
                        <span class="modal-arrow-up"></span>
                        <div class="close-modal"></div>
                      </div>
                      <div class="content">
                        <form class="site-form" action="#" method="post">
                          <label class="select-label select-label--first">
                            <select class="wn-notify_status hasCustomSelect" name="notify_status" id="notify_status" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 13px;">
                              <option value="2">Always</option>
                              <option value="1">Never</option>
                            </select>
                            <span class="custom-select wn-notify_status" style="display: inline-block;">
                              <span class="custom-selectInner" style="width: 100px; display: inline-block;">Always</span>
                            </span>                                
                          </label>
                          <label class="select-label">
                            <select class="wn-notify_method hasCustomSelect" name="notify_method" id="notify_method" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 13px;">
                              <option value="1">Email</option>
                              <option value="2">SMS</option>
                              <option value="3">Email + SMS</option>
                            </select>
                            <span class="custom-select wn-notify_method custom-selectOpen" style="display: inline-block;">
                              <span class="custom-selectInner" style="width: 100px; display: inline-block;">Email</span>
                            </span>                                
                          </label>
                          <input type="hidden" name="auction" value="iaai">
                          <input type="hidden" name="lot" value="21613741">
                          <div class="caption">
                            <span>Email:</span> 
                            <strong>brien.dabson@gmail.com</strong>
                          </div>
                          <a class="button yBtn_24" href="#" id="shc-submit" style="margin-top: 5px;">Save Settings</a>
                          <img class="spinner" src="/img/ajax-loader.gif" style="display:none" alt="Please Wait">
                        </form>                    
                      </div>
                    </div>
                    <?php } ?>
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
                <?php 
                  $total = $total_rows;
                  $per_page = $result;
                  $adjacent_links = 4;
                  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                  $pages = Pagination($total, $per_page, $current_page, $adjacent_links);
                  $currentURL = $actual_link;
                  $num = $total_rows;
                  $num = $num / 10;
                  if (strpos($num,'.')) {
                    $num = explode('.', $num);
                    $num = $num[0] + 1;
                  }
                ?>
                
                <?php 
                  if ($num > 1 && $current_page != 1) {
                    $url = '';
                    if ($this->input->get()) {
                      $symbol = '&';
                    }
                    else{
                      $symbol = '?';
                    }
                    if ($this->input->get('page')) {
                      $url = str_replace('page='.$this->input->get('page'), 'page='.($current_page - 1), $currentURL);
                    }
                    else{
                      $url = $actual_link.''.$symbol.'page='.($current_page - 1);
                    }
                    echo '<li><a href="'.$url.'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
                  }
                  // for ($i=0; $i < $num; $i++) { 
                  //   $class = '';
                  //   $page = ($i + 1);
                  //   if ($page == $current_page) {
                  //     $class = 'active';
                  //   }
                  //   echo '<li class="page-item"><a class="page-link '.$class.'" href="'.$currentURL.'?page='.$page.'">'.$page.'</a></li>';
                  // }
                  if ($total_rows > 0) {
                    for ($i=0; $i < sizeof($pages); $i++) { 
                      $class = '';
                      $page = $pages[$i];
                      if ($page == $current_page) {
                        $class = 'active';
                      }
                      $url = '';
                      if ($this->input->get()) {
                        $symbol = '&';
                      }
                      else{
                        $symbol = '?';
                      }
                      if ($this->input->get('page')) {
                        $url = str_replace('page='.$this->input->get('page'), 'page='.$pages[$i], $currentURL);
                      }
                      else{
                        $url = $actual_link.''.$symbol.'page='.$pages[$i];
                      }
                      echo '<li class="page-item"><a class="page-link '.$class.'" href="'.$url.'">'.$page.'</a></li>';
                    }
                  }
                    
                  if ($num > 1 && $current_page != $num) {
                    $url = '';
                    if ($this->input->get()) {
                      $symbol = '&';
                    }
                    else{
                      $symbol = '?';
                    }
                    if ($this->input->get('page')) {
                      $url = str_replace('page='.$this->input->get('page'), 'page='.($current_page + 1), $currentURL);
                    }
                    else{
                      $url = $actual_link.''.$symbol.'page='.($current_page + 1);
                    }
                    echo '<li><a href="'.$url.'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
                  }
                ?>
                
              </ul>
            </nav>
        </div>
      </div>
    </section>
