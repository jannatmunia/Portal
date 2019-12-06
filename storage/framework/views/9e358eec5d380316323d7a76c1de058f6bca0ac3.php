<!DOCTYPE html>
<html lang="en">
<head>
  <!-- BootstrapCDN start-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!--BootstrapCDN end-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <title>Women Job Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/css/magnific-popup.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/css/jquery-ui.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/css/owl.carousel.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/css/owl.theme.default.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap-datepicker.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap-datepicker.css')); ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('fonts/flaticon/font/flaticon.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/css/aos.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">
</head>
<body>
  <div class="site-wrap">
    <!-- <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> -->

    <?php echo $__env->make('Frontend.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div style="height: 113px;"></div>

  <?php echo $__env->yieldContent('content'); ?>
  <?php echo $__env->make('Frontend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  </div>
  <script src="<?php echo e(url('/js/jquery-3.3.1.min.js')); ?>"></script>
  <script src="<?php echo e(url('/js/jquery-migrate-3.0.1.min.js')); ?>"></script>
  <script src="<?php echo e(url('/js/jquery-ui.js')); ?>"></script>
  <script src="<?php echo e(url('/js/popper.min.js')); ?>"></script>
  <script src="<?php echo e(url('/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(url('/js/owl.carousel.min.js')); ?>"></script>
  <script src="<?php echo e(url('/js/jquery.stellar.min.js')); ?>"></script>
  <script src="<?php echo e(url('/js/jquery.countdown.min.js')); ?>"></script>
  <script src="<?php echo e(url('/js/jquery.magnific-popup.min.js')); ?>"></script>
  <script src="<?php echo e(url('/js/bootstrap-datepicker.min.js')); ?>"></script>
  <script src="<?php echo e(url('/js/aos.js')); ?>"></script>
  <script src="<?php echo e(url('/js/mediaelement-and-player.min.js')); ?>"></script>
  <script src="<?php echo e(url('/js/main.js')); ?>"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;
    for (var i = 0; i < total; i++) {
      new MediaElementPlayer(mediaElements[i], {
        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
        shimScriptAccess: 'always',
        success: function () {
          var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
          for (var j = 0; j < targetTotal; j++) {
            target[j].style.visibility = 'visible';
          }
        }
      });
    }
  });
</script>
<script>
// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.
// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

var placeSearch, autocomplete;
var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initAutocomplete() {
  // Create the autocomplete object, restricting the search to geographical
  // location types.
  autocomplete = new google.maps.places.Autocomplete(
    /** @type  {!HTMLInputElement} */(document.getElementById('autocomplete')),
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
    for (var i = 0; i < place.address_components.length; i++) {
      var addressType = place.address_components[i].types[0];
      if (componentForm[addressType]) {
        var val = place.address_components[i][componentForm[addressType]];
        document.getElementById(addressType).value = val;
      }
    }
  }

  // Bias the autocomplete object to the user's geographical location,
  // as supplied by the browser's 'navigator.geolocation' object.
  function geolocate() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
async defer></script>
</body>
</html>
