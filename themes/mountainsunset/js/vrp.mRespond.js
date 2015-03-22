;var VRP = Object.create(null);

VRP.mRespond = (function($, global){

    var responseActive = false;
    var initializedWidth = 0;

    global.onload = function(){
        initializedWidth = $('.vrp-container-fluid').width();
        resizeHandler();
    }

    var resizeHandler = function() {
        if(initializedWidth < 640) {
            responseActive = true;
            //vrp-col-md-4 vrp-col-xs-12 vrp-col-sm-6 vrp-list-item-wrap vrp-grid
            $('.vrp-item-wrap').removeClass('vrp-col-md-4');
            $('.vrp-item-wrap').removeClass('vrp-col-sm-6');
            $('.vrp-item-wrap').addClass('vrp-col-md-6 vrp-col-sm-12');
            $('.vrp-wrapper-presentation-actions').toggle();

        }
    };

    //var resizeHandler = function(width) {
    //
    //    console.log(width);
    //
    //}

    $(global).bind('resize', function(e) {
        if(responseActive === true) {
            resizeHandler($(global).width());
        }
    });

    return {

    }

}(jQuery, window, undefined));