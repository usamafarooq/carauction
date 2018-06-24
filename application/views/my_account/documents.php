<div class="container">
    <?php 
        $set = 0;
        foreach ($user as $key => $value) {
            if (empty($value)) {
                $set = 1;
            }
        }
    ?>
    <?php if($set == 1){ ?>
    <div class="row">
        <div class="col-md-12">
            <div class="top-notify top-notify-activate">
                <div class="top-notify__item__desc">
                    <span class="top-notify__attention-icon"></span>
                    <strong>Dear <?php echo $user['first_name'] ?>, in order to BID please activate your membership!</strong>
                    <a class="button yBtn_24 yBtn_h32" href="<?php echo base_url('account_activation') ?>">Activate</a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <div id="content">
        <h2 class="account-header hidden-xs hidden-sm">Documents</h2>
        <div class="account-table row">
            <?php $this->load->view('my_account/menu') ?>
            <div class="col-sm-12 col-md-9">
                <h2 class="account-header hidden-md hidden-lg">Transactions </h2>

                <div id="ajax-content">

                    <center>
                        <h1 class="g-tittle">Uploaded Documents (0)</h1>
                        <p>Upload a copy of your passport or national ID by pressing button below</p>
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
                        <!-- <form>
                            <div class="form-group">
                                <label for="exampleFormControlFile1"></label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </form> -->
                        <p>Supported files are PNG / JPG / PDF. File size can not exceed 10 MB.
                        </p>
                    </center>

                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div>
</div>
<form method="post"  enctype="multipart/form-data" action="<?php echo base_url('account_activation/image_upload') ?>" style="opacity: 0" id="image-upload">
  <input type="file" name="file" id="select-image">
</form>