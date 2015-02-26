<?php $showdata = false; ?>

<div class="container" id="vrpcontainer">
    <div class="row">
        <div class="col-md-2">
            <img src="<?php echo  $data->photos[0]->thumb_url ?>" style="width:100%">
        </div>
        <div class="col-md-8">
            <div class="row">
                <?php echo  $data->Bedrooms; ?> Bedroom(s) | <?php echo  $data->Bathrooms; ?> Bathroom(s) | Sleeps <?php echo  $data->Sleeps; ?>
            </div>
            <div class="row">
                <!-- Photo Gallery -->
                <div id="photo">
                    <?php
                    $count = 0;
                    foreach ($data->photos as $k => $v) {
                        $style = "";
                        if($count > 0) { $style = "display:none;"; }
                        ?>
                        <img id="full<?php echo $v->id; ?>" alt="<?php echo  strip_tags($v->caption); ?>" src="<?php echo  $v->url; ?>" style="width:100%; <?php echo $style; ?>"/>
                        <?php
                        $count++;
                    }
                    ?>
                </div>

                <div id="gallery" style="overflow:hidden;">
                    <?php
                    foreach ($data->photos as $k => $v) {
                        ?>
                        <img class="thumb" id="<?php echo $v->id; ?>" alt="<?php echo  strip_tags($v->caption); ?>" src="<?php echo  $v->url; ?>" style="width:90px; float:left; margin: 3px;"/>
                    <?php
                    }
                    ?>
                </div>

            </div>


        </div>
        <div class="col-md-2">

        </div>
    </div>

    <div class="row">
        <div id="tabs">
            <?php if( true ) { ?>
                <ul>
                    <?php if ( $showdata ) { echo '<li><a href="#data">Data</a></li>'; } ?>
                    <li><a href="#overview">Overview</a></li>
                    <?php if (isset($data->reviews[0])) { ?>
                        <li><a href="#reviews">Reviews</a></li>
                    <?php } ?>
                    <li><a href="#calendar">Check Availability</a></li>
                    <li><a href="#rates">Rates</a></li>
                    <li><a href="#amenities">Amenities</a></li>
                    <?php // <li><a href="#gmap">Map</a></li> ?>
                </ul>

            <?php } ?>
             

            <?php if ( $showdata ) { ?>
                <div id="data">
                    <pre>
                        <?php print_r($data); ?>
                    </pre>
                </div>
            <?php } ?>
            

            <!-- OVERVIEW TAB -->
            <div id="overview">
                <?php // echo "<pre>"; print_r($data); echo "</pre>"; ?>

                <div class="col-md-6">
                    <div id="description">
                        <p><?php echo nl2br($data->Description); ?></p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- AMENITIES TAB -->
            <div id="amenities">
                <table class="amenTable" cellspacing="0">
                    <tr>
                        <td colspan="2" class="heading"><h4>Amenities</h4></td>
                    </tr>
                    <?php foreach ($data->attributes as $amen) { ?>
                        <tr>
                            <?php if(false) { ?> <td class="first"><b><?php echo  $amen->name; ?></b>:</td> <?php } ?>
                            <td> <?php echo  $amen->value; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>

            <!-- REVIEWS TAB -->
            <div id="reviews">
                <?php if (isset($data->reviews[0])) { ?>
                    <table class="amenTable" cellspacing="0">
                        <tr>
                            <td colspan="2" class="heading"><h4>Reviews</h4></td>
                        </tr>
                        <?php foreach ($data->reviews as $review): ?>

                            <tr>
                                <td class="first" valign="top" align="center"><b><?php echo  $review->name; ?></b></td>
                                <td><h2 style="background:none;border:none;"><?php echo  $review->title; ?></h2>
                                    <small><?php echo  $review->rating; ?> out of 5</small>
                                    <br><br>
                                    <?php echo  $review->review; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?></table>
                <?php } ?>
            </div>

            <!-- CALENDAR TAB -->
            <div id="calendar">
                <div class="row">
                    <?php echo do_shortcode("[vrpAvailableShort unit_id=".$data->id."]"); ?>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div id="availability" style="">
                            <?php echo vrpCalendar($data->avail); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RATES TAB -->
            <div id="rates">
                <div class="row">
                    <h4>Seasonal Rates</h4>
                    <div id="rates">
                        <?php
                        $r = [];
                        foreach ($data->rates as $v) {
                            $start = date("m/d/Y", strtotime($v->start_date));
                            $end = date("m/d/Y", strtotime($v->end_date));
                            $r[$start . " - " . $end] = new \stdClass();
                            if ($v->chargebasis == 'Monthly') {
                                $r[$start . " - " . $end]->monthly = "$" . $v->amount;
                            }
                            if ($v->chargebasis == 'Daily') {
                                $r[$start . " - " . $end]->daily = "$" . $v->amount;
                            }
                            if ($v->chargebasis == 'Weekly') {
                                $r[$start . " - " . $end]->weekly = "$" . $v->amount;
                            }
                        }
                        ?>

                        <table cellpadding="3">
                            <tr>
                                <th>Date Range</th>
                                <th>Rate</th>
                            </tr>
                            <?php foreach ($r as $k => $v) { ?>
                                <tr>
                                    <td>
                                        <?php echo  $k; ?>
                                    </td>
                                    <td><?php echo  $v->daily; ?>/nt</td>

                                </tr>
                            <?php } ?>
                        </table>
                        * Seasonal rates are only estimates and do not reflect taxes or additional fees.
                    </div>
                </div>

            </div>

            <?php if (false) { ?>
                <?php echo do_shortcode("[googlemap]"); ?>
            <?php } ?>

        </div>
    </div>
</div>


<!-- GOOGLE MAPS SCRIPT -->
<script type="text/javascript">
    var geocoder;
    var map;
    var query = "<?php echo  $data->Address . " " . $data->Address2 . " " . $data->City . " " . $data->State . " " . $data->PostalCode; ?>";
    var image = '<?php bloginfo('template_directory'); ?>/images/mapicon.png';

    function initialize() {
        geocoder = new google.maps.Geocoder();
        var myOptions = {
            zoom: 13,
            <?php if(strlen($data->lat) > 0 && strlen($data->long) > 0){ ?>
            center: new google.maps.LatLng(<?php echo  $data->lat; ?>, <?php echo  $data->long; ?>),
            <?php } ?>
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("map"), myOptions);
        <?php if(strlen($data->lat) == 0 || strlen($data->long) == 0){ ?>
        codeAddress();
        <?php } ?>
    }

    function codeAddress() {
        var address = query;
        geocoder.geocode({'address': address}, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);

                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    title: "<?php echo  $data->title; ?>"
                    //icon: image
                });
            } else {
                alert("Geocode was not successful for the following reason: " + status);
            }
        });
    }
    jQuery(document).ready(function () {
        initialize();
    });

</script>

