
    <!-- Login Area -->
  <section class="account-area">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="section-title">
              <h3>Register for a Free Account</h3>
            </div>
          </div>
        </div>
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <!-- Content Panel -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane-login" id="home">
            <form method="post" action="<?php echo base_url()?>register/insert_user">
              <div class="form-group">
                <input type="text" id="exampleInputEmail1" name="first_name" class="form-control mb-0" placeholder="First Name" required="">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="last_name" id="password" placeholder="Last Name" required="">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="password" placeholder="E-mail" required="">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="password" placeholder="Re-Type Your Password" required="">
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" required="">By Clicking here you are agree to Auction </br><a href="#">Member Terms & Conditions</a></label>
                <button type="submit" class="btn btn-primary my-btn login-set">Sign Up</button>
                <?php if ($this->session->flashdata('error')): ?>
                <a class="btn btn-danger block full-width m-b"><?php echo $this->session->flashdata('error'); ?></a>
                <?php endif ?>
                <div class="right">
                <div class="title-social">Join Us Faster With Facebook or Google</div>
                <div class="ta-center social-block">
                <a href="/en/account/socialLogin/Facebook" class="social-login facebook">Facebook</a>
                <a href="/en/account/socialLogin/Google" class="social-login google">Google</a>
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