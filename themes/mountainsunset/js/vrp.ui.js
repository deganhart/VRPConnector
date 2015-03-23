;VRP.ui = (function($, global, undefined){

    var triggerOverlayAction = function(overlay) {

        if(overlay.is(':visible') == false) {
            overlay.fadeIn('fast');
        } else {
            overlay.hide();
        }

    }

    var invokeListingOverlayHandler = function (handle, index, e) {

        var overlay = handle.find('.vrp-overlay');

        overlay.css({left: handle.width(), top: 0});

        if(VRP.map.processed(index) == true) {

            triggerOverlayAction(overlay);

        } else {

            VRP.map.generate(handle, function(){

                triggerOverlayAction(overlay);

            });

        }


    }

    /* Handles */
    $(function(){

        $('.vrpshowing').change(function() {

            var that = $(this);

            if(that.val() == '') {
                return;
            }

            var currentParsed = VRP.queryString.parse(location.search);
            var parsed = VRP.queryString.parse(that.val());

            var combined = Object.assign(currentParsed, parsed);

            location.search = queryString.stringify(parsed);

        });

        $('.vrp-item').hover(function(e){

            var that = $(this),
                index = $('.vrp-item').index(that);

            invokeListingOverlayHandler(that, index, e);

        }, function(e) {

            var that = $(this),
                index = $('.vrp-item').index(that);

            invokeListingOverlayHandler(that, index, e);

        });

    });
    return {
    }

}(jQuery, window));