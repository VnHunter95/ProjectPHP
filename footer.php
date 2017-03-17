<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/StoreInfo.Class.php');
  $storeInfo = StoreInfo::getStoreInfo();
?>
    <div class="footer">
        <div class="container">
            <div class="footer-top-at">
                <div class="col-md-4 amet-sed store-infomation">
                    <h3 style="color:brown">Thông Tin Liên Hệ</h3>
                    <h4><?php echo $storeInfo[0]['store_name']; ?> </h4>
                    <p>Địa chỉ: <?php echo $storeInfo[0]['store_address']; ?></p>
                    <p>Số điện thoại: <?php echo $storeInfo[0]['store_phone_number_1']." - ".$storeInfo[0]['store_phone_number_2']; ?> </p>
                    <p>Email: <?php echo $storeInfo[0]['store_email'];?></p>
                    <p>Facebook: <?php echo $storeInfo[0]['store_facebook'];?></p>
                </div>
                <div class="col-md-4 amet-sed ">
                        <div class="container">
                        <div class="col-md-8">
                            <button class="btn btn-info" onclick="getUserLoc()"><span class="glyphicon glyphicon-road"></span>Tìm Đường</button>
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
                <div class="clearfix"> </div>
            </div>
        </div>
</div>
</body>

</html>
