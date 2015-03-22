;var VRP = Object.create(null);

VRP.map = (function($, global){

    var initialize = (function() {
        var map;

        function initialize() {
            var mapOptions = {
                zoom: 8,
                center: new google.maps.LatLng(-34.397, 150.644)
            };
            map = new google.maps.Map(document.getElementById('vrp-map-canvas'),
                mapOptions);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    } ());

    return {
        //returnPrivate: private()
    }

}(jQuery, window, undefined));