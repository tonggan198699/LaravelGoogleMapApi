<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>App Page</title>

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key={{$_ENV['GOOGLE_MAP_API']}}=places&callback=initAutocomplete" async defer></script>

</head>
<body>

    @yield('content')

    <script>
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
    autocomplete = new google.maps.places.Autocomplete(
    /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
    {types: ['geocode']});

    autocomplete.addListener('place_changed', fillInAddress);
    }

      function fillInAddress()
      {
        var place = autocomplete.getPlace();

        for (var component in componentForm)
        {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        for (var i = 0; i < place.address_components.length; i++)
        {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
          var val = place.address_components[i][componentForm[addressType]];
          document.getElementById(addressType).value = val;
          }
        }
      }

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

</body>
</html>
