

    <!-- Login Area -->
  <section class="account-area">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="section-title">
              <h3>Log in to My Account</h3>
            </div>
          </div>
        </div>
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <!-- Content Panel -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane-login" id="home">
            <form method="post" action="<?php echo base_url() ?>login/check_login">
              <div class="form-group">
                <input type="email" name="email" id="exampleInputEmail1" class="form-control mb-0" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input">Remember Me</label>
                <h6 id="emailHelp" class="forgot-link">I Forgot My Password</h6>
                <button type="submit" class="btn btn-primary my-btn login-set">Sing In</button>
                <?php if ($this->session->flashdata('error')): ?>
                <a class="btn btn-danger block full-width m-b"><?php echo $this->session->flashdata('error'); ?></a>
                <?php endif ?>
                <div class="right">
                <div class="title-social">Login with Social</div>
                <div class="ta-center social-block">
                <a href="<?php echo $facebookURL ?>" class="social-login facebook">Facebook</a>
                <a href="<?php echo $googleURL ?>" class="social-login google">Google</a>
                </div>
                </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </section>
    <!-- End Login Area -->