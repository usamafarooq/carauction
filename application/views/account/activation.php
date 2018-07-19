<!-- Featured Car start -->
<section class="featured-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-title">
                    <h3>Account Activation</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%">60%</div>
                </div>
            </div>
        </div>
        <form method="post" action="">
            <div class="row" style="background: #f9f9f9; padding-top: 30px; padding-bottom:  30px; margin-left:  0px; margin-right:  0px;">

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="act-tabone">
                        <h3>Account Information</h3>
                        <div class="form-group"><input type="name" name="first_name" class="form-control name-in" placeholder="First Name" value="<?php echo $user['first_name'] ?>"></div>
                        <div class="form-group"><input type="name" name="last_name" class="form-control name-in" placeholder="Last Name" value="<?php echo $user['last_name'] ?>"></div>
                        <div class="form-group"><input type="name" name="company" class="form-control name-in" placeholder="Company" value="<?php echo $user['company'] ?>"></div>
                        <div class="form-check" style="margin-left: 10px;"><input type="checkbox" class="form-check-input" name="use_company_name" value="1" <?php if($user['use_company_name'] == 1) echo 'checked' ?>><span>I understand that by selecting this option all my invoices will be issued to my company name</span></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="act-tabone">
                        <h3>Phisycal address</h3>
                        <div class="act-select">
                            <select name="country" id="countryId" class="countries presel-byip" data-id="<?php echo $user['country'] ?>">
                              <option value="" selected>Select Country</option>
                            </select>
                        </div>
                        <div class="act-select">
                            <select name="state" id="stateId" class="states" data-id="<?php echo $user['state'] ?>">
                              <option value="" selected>Select State</option>
                            </select>
                        </div>
                        <div class="act-select">
                            <select name="city" id="cityId" class="cities" data-id="<?php echo $user['city'] ?>">
                              <option value="" selected>Select City</option>
                            </select>
                        </div>
                        <div class="form-group"><input type="name" name="address" class="form-control name-in" placeholder="Address" value="<?php echo $user['address'] ?>"></div>
                        <div class="form-group"><input type="name" name="zip" class="form-control name-in" placeholder="Zip" value="<?php echo $user['zip'] ?>"></div>
                        <div class="form-group"><input type="name" name="phone" class="form-control name-in" placeholder="Phone" value="<?php echo $user['phone'] ?>"></div>
                        <h3 style="margin-bottom: 3%; padding-top: 3%;">Mailing Information</h3>
                        <div class="form-check" style="margin-left: 10px;"><input type="checkbox" class="form-check-input" name="mailing_same" value="1" <?php if($user['mailing_same'] == 1) echo 'checked' ?>><span>My mailing address is the same as profile address.</span></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="act-tabone">
                        <h3>Uploaded Documents (0)</h3>
                        <h4>Upload a copy of your passport or national ID by pressing button below</h4>
                        <div class="document-list">
                          <?php 
                            if (!empty($user['document'])) {
                                $document = explode(',', $user['document']);
                                $document_id = explode(',', $user['document_id']);
                                for ($i=0; $i < sizeof($document); $i++) { 
                                  echo '<li>'.str_replace('/uploads/', '', $document[$i]).' <i style="cursor: pointer;" class="remove-file" data-id="'.$document_id[$i].'">X</i></li>';
                                }
                            }
                                
                          ?>
                        </div>
                        <center><button class="btn btn-default upload-btn upload-document" type="button">Upload Documents</button></center>
                        <h6>Supported files are PNG / JPG / PDF. File size can not exceed 10 MB.</h6>
                    </div>
                </div>
            </div>
            <div class="row" style="background: #f9f9f9; padding-top: 30px; padding-bottom:  30px; margin-left:  0px; margin-right:  0px;">
                <center><button class="btn btn-default upload-btn" type="submit" style="text-transform: uppercase;">Complete Your Registration</button></center>
            </div>
        </form>
    </div>
</section>
<form method="post"  enctype="multipart/form-data" action="<?php echo base_url('account_activation/image_upload') ?>" style="opacity: 0" id="image-upload">
  <input type="file" name="file" id="select-image">
</form>