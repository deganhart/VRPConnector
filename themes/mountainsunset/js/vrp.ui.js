;VRP.ui = (function($, global, undefined){

    var invokeListingOverlayHandler = function (handle, index, e) {

        var overlay = handle.find('.vrp-overlay');

        console.log(e.clientX, e.clientY);
        overlay.css({left: handle.width(), top: 0});

        if(VRP.map.processed(index) == true) {

            overlay.fadeToggle();

        } else {

            VRP.map.generate(handle, function(){

                overlay.fadeToggle();

            });

        }


    }

    $(function(){

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