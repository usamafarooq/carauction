
<!-- /.Navbar  Static Side -->
<div class="control-sidebar-bg"></div>
<!-- Page Content -->
<div id="page-wrapper">
    <!-- main content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="header-icon">
                <i class="pe-7s-note2"></i>
            </div>
            <div class="header-title">
                <h1>Edit Locations</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Edit Locations</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>admin/locations/update" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $locations["id"] ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Edit Locations</h4>
                            </div>
                        </div>
                        <div class="panel-body"><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Address<span class="required">*</span></label>
                                        <div class="col-sm-9">
<?php $Address = explode(",", $locations["Address"]) ?>
                                        <input class="form-control" name="Address" type="text" value="<?php echo $locations["Address"] ?>" id="autocomplete" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Location<span class="required">*</span></label>
                                        <div class="col-sm-9">
<?php $Address = explode(",", $locations["Location"]) ?>
                                        <input class="form-control" name="Location" type="text" value="<?php echo $locations["Location"] ?>" id="Location" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Country<span class="required">*</span></label>
                                        <div class="col-sm-9">
<?php $Country = explode(",", $locations["Country"]) ?>
                                        <input class="form-control" name="Country" type="text" value="<?php echo $locations["Country"] ?>" id="country" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">State<span class="required">*</span></label>
                                        <div class="col-sm-9">
<?php $State = explode(",", $locations["State"]) ?>
                                        <input class="form-control" name="State" type="text" value="<?php echo $locations["State"] ?>" id="administrative_area_level_1" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">State Full Name<span class="required">*</span></label>
                                        <div class="col-sm-9"><input class="form-control" name="State_Full" type="text"  value="<?php echo $locations["State_Full"] ?>" id="State_Full" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">City<span class="required">*</span></label>
                                        <div class="col-sm-9">
<?php $City = explode(",", $locations["City"]) ?>
                                        <input class="form-control" name="City" type="text" value="<?php echo $locations["City"] ?>" id="locality" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Zip Code<span class="required">*</span></label>
                                        <div class="col-sm-9">
<?php $Zip_Code = explode(",", $locations["Zip_Code"]) ?>
                                        <input class="form-control" name="Zip_Code" type="number" value="<?php echo $locations["Zip_Code"] ?>" id="postal_code" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Manager<span class="required">*</span></label>
                                        <div class="col-sm-9"><input class="form-control" name="Manager" type="text"  placeholder="" required="" value="<?php echo $locations["Manager"] ?>"></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Office Hours</label>
                                        <div class="col-sm-9">
<?php $Office_Hours = explode(",", $locations["Office_Hours"]) ?>
                                        <input class="form-control" name="Office_Hours" type="text" value="<?php echo $locations["Office_Hours"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Phone</label>
                                        <div class="col-sm-9">
<?php $Phone = explode(",", $locations["Phone"]) ?>
                                        <input class="form-control" name="Phone" type="text" value="<?php echo $locations["Phone"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Fax</label>
                                        <div class="col-sm-9">
<?php $Fax = explode(",", $locations["Fax"]) ?>
                                        <input class="form-control" name="Fax" type="text" value="<?php echo $locations["Fax"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Preview Time<span class="required">*</span></label>
                                        <div class="col-sm-9">
<?php $Preview_Time = explode(",", $locations["Preview_Time"]) ?>
                                        <input class="form-control" name="Preview_Time" type="text" value="<?php echo $locations["Preview_Time"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Preview Note</label>
                                        <div class="col-sm-9">
<?php $Preview_Note = explode(",", $locations["Preview_Note"]) ?>
                                        <textarea class="form-control" name="Preview_Note" ><?php echo $locations["Preview_Note"] ?></textarea></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Pickup Time</label>
                                        <div class="col-sm-9">
<?php $Pickup_Time = explode(",", $locations["Pickup_Time"]) ?>
                                        <input class="form-control" name="Pickup_Time" type="text" value="<?php echo $locations["Pickup_Time"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Pickup Note</label>
                                        <div class="col-sm-9">
<?php $Pickup_Note = explode(",", $locations["Pickup_Note"]) ?>
                                        <textarea class="form-control" name="Pickup_Note" ><?php echo $locations["Pickup_Note"] ?></textarea></div>

                                    </div><div class="form-group row">

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->
<script type="text/javascript">
var placeSearch, autocomplete;
var componentForm = {
    administrative_area_level_1: 'short_name',
    locality: 'long_name',
    country: 'long_name',
    postal_code : 'long_name'
};

function initAutocomplete() {
    // Create the autocomplete object, restricting the search to geographical
    // location types.
    autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

    // When the user selects an address from the dropdown, populate the address
    // fields in the form.
    autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
    // Get the place details from the autocomplete object.
    var place = autocomplete.getPlace();

    for (var component in componentForm) {
        document.getElementById(component).value = '';
        document.getElementById(component).disabled = false;
    }

    // Get each component of the address from the place details
    // and fill the corresponding field on the form.
    //console.log(place.address_components)
    for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        var type = place.address_components[i].types[0]
        var location;
        if (type == 'administrative_area_level_1') {
            var full_state = place.address_components[i].long_name;
            document.getElementById('State_Full').value = full_state;
            location += place.address_components[i].short_name+' - '
        }
        if (type == 'locality') {
            location += place.address_components[i].long_name
        }
        document.getElementById('Location').value = location;
        if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
            // var country = $('input#country').val();
            // var state = $('input#administrative_area_level_1').val();
            // var city = $('input#locality').val();
            // $('#autocomplete').each(function () {
            //     $(this).val($(this).val().split(country).join(""));
            // });
            // $('#autocomplete').each(function () {
            //     $(this).val($(this).val().split(state).join(""));
            // });
            // $('#autocomplete').each(function () {
            //     $(this).val($(this).val().split(city).join(""));
            // });
            // $('#autocomplete').each(function () {
            //     $(this).val($(this).val().split(',').join(""));
            // });
        }
    }

}

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
    if (navigator.geolocation) {
        //console.log(navigator.geolocation.getCurrentPosition);
        navigator.geolocation.getCurrentPosition(function (position) {
            var geolocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
        });
    }
}
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfYi223bynfI12jcbfAGFw9eRYPLISRx0&libraries=places&callback=initAutocomplete"></script>