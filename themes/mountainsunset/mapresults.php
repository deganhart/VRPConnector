<style type="text/css">
    #map-canvas {
        height: 480px;
        width: 640px;
        margin: 0;
        padding: 0;
    }
</style>
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyDoq5uU069qSf7-xD8cTxyGgrdmKR9pBbw">
</script>
<script type="text/javascript">
    function initialize() {

        var locations = [
            <?php
            foreach($data->results as $count => $unit) {
                if(!empty($unit->lat) && !empty($unit->long)) {
                    echo '["'.$unit->Name.'", '.$unit->lat.','.$unit->long.','.$count.']';
                    if((count($data->results) - 1) > $count) { echo ","; }
                }
            }
            ?>
        ];

        var mapOptions = {
            center: new google.maps.LatLng(locations[0][1], locations[0][2]),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var bounds = new google.maps.LatLngBounds();
        var infowindow = new google.maps.InfoWindow();
        for (i = 0; i < locations.length; i++) {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });

            bounds.extend(marker.position);

            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }

        map.fitBounds(bounds);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="map-canvas"></div>
