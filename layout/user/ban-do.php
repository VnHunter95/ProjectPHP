<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<div class="content">
    <div class="container">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h3>Bản Đồ</h3>
        <button class="btn btn-default" onclick="getUserLoc()">Tìm Đường</button>
        <div id="map"></div>
        <script>
        var directionsDisplay;
        var directionsService;
        var infoWindow;
        var map;
        var userLoc;
        var storeLoc = {
          lat: 10.767897,
          lng: 106.6826302
        };
        function findRoute()
        {
          getUserLoc();
        }
        function initMap() {
          directionsService = new google.maps.DirectionsService();
          directionsDisplay = new google.maps.DirectionsRenderer();
          map = new google.maps.Map(document.getElementById('map'), {
            center: storeLoc,
            zoom: 12
          });
          var marker = new google.maps.Marker({
            position: storeLoc,
            map: map,
            title: 'Shop'
          });
         directionsDisplay.setMap(map);
        }
        function calcRoute() {
        var request = {
            origin: userLoc,
            destination: storeLoc,
            travelMode: 'DRIVING'
        };
        directionsService.route(request, function(response, status) {
          if (status == 'OK') {
            directionsDisplay.setDirections(response);
          }
        });
      }
        function getUserLoc()
        {
          infoWindow = new google.maps.InfoWindow({map: map});
          // Try HTML5 geolocation.
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
              var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
              };

              infoWindow.setPosition(pos);
              infoWindow.setContent('Vị Trí Hiện Tại');
              map.setCenter(pos);
              userLoc = pos;
              calcRoute();
            }, function() {
              handleLocationError(true, infoWindow, map.getCenter());
            });
          } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
          }
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
          infoWindow.setPosition(pos);
          infoWindow.setContent(browserHasGeolocation ?
                                'Error: The Geolocation service failed.' :
                                'Error: Your browser doesn\'t support geolocation.');
        }

        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwioxu52QymVe1EAvfuLIAX06obJQewtk&callback=initMap">
        </script>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
