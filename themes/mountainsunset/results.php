
<!-- all the important responsive layout stuff -->
<style>
.btn {
    display: inline-block;
    position: relative;
    vertical-align:top;
    /*line-height: 20px;*/
    background-color:rgb(41,127,184);
    color:#fff !important;
    text-decoration: none !important;
    text-transform: uppercase !important;
    letter-spacing: 1px;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    text-shadow:0px 1px 0px rgba(0,0,0,0.5);
    -ms-filter:"progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#ff123852,Positive=true)";zoom:1;
    filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#ff123852,Positive=true);

    -moz-box-shadow:0px 2px 2px rgba(0,0,0,0.2);
    -webkit-box-shadow:0px 2px 2px rgba(0,0,0,0.2);
    box-shadow:0px 2px 2px rgba(0,0,0,0.2);
    -ms-filter:"progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=2,Color=#33000000,Positive=true)";
    filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=2,Color=#33000000,Positive=true);
    padding:10px;
}
.btn.stylized {
    padding:0px 30px 0px 70px;
    line-height: 40px;
}
.btn span {
    position: absolute;
    left: 0;
    width: 50px;
    text-align:center;
    background-color:rgba(0,0,0,0.5);
    padding:7px 5px;
    line-height: 0px;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-bottom-left-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-bottomleft: 5px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border-right: 1px solid  rgba(0,0,0,0.15);
}

.btn:hover span, .btn.active span {
    background-color:#111;
    border-right: 1px solid  rgba(0,0,0,0.3);
}

.btn:active {
    margin-top: 2px;
    margin-bottom: 13px;

    -moz-box-shadow:0px 1px 0px rgba(255,255,255,0.5);
    -webkit-box-shadow:0px 1px 0px rgba(255,255,255,0.5);
    box-shadow:0px 1px 0px rgba(255,255,255,0.5);
    -ms-filter:"progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#ccffffff,Positive=true)";
    filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#ccffffff,Positive=true);
}

.btn.orange {
    background: #FF7F00;
}

.btn.purple {
    background: #8e44ad;
}

.btn.turquoise {
    background: #1abc9c;
}

.btn.red {
    background: #e74c3c;
}


.col {
    padding: 0 1.5em;
}
.row .row {
    margin: 0 -1.5em;
}

.row:before, .row:after {
    content: "";
    display: table;
}
.row:after {
    clear: both;
}

@media only screen {
    .col {
        float: left;
        width: 100%;

        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
}

.unit_thumbnail {
    width:100%;
}

.vrpPages li {
    list-style-type:none;
    float:left;
    padding: 5px;
    border: 1px solid #333;
}

.highlighted {
    background:#BDBDBD;
}

.vrp-favorite-button {
    display: none;
}

.pull-right { float:right; }
.pull-left { float:left; }


.cd-pagination {
    width: 90%;
    max-width: 768px;
    margin: 2em auto 4em;
    text-align: center;
}
.cd-pagination li {
    /* hide numbers on small devices */
    display: none;
    margin: 0 .2em;
}
.cd-pagination li.button {
    /* make sure prev next buttons are visible */
    display: inline-block;
}
.cd-pagination a, .cd-pagination span {
    display: inline-block;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    /* use padding and font-size to change buttons size */
    padding: .6em .8em;
    font-size: 1.6rem;
}
.cd-pagination a {
    border: 1px solid #e6e6e6;
    border-radius: 0.25em;
    text-decoration:none!important;
}
.no-touch .cd-pagination a:hover {
    background-color: #f2f2f2;
}
.cd-pagination a:active {
    /* click effect */
    -webkit-transform: scale(0.9);
    -moz-transform: scale(0.9);
    -ms-transform: scale(0.9);
    -o-transform: scale(0.9);
    transform: scale(0.9);
}
.cd-pagination a.disabled {
    /* button disabled */
    color: rgba(46, 64, 87, 0.4);
    pointer-events: none;
}
.cd-pagination a.disabled::before, .cd-pagination a.disabled::after {
    opacity: .4;
}
.cd-pagination .button:first-of-type a::before {
    content: '\00ab  ';
}
.cd-pagination .button:last-of-type a::after {
    content: ' \00bb';
}
.cd-pagination .current {
    /* selected number */
    background-color: #64a281;
    border-color: #64a281;
    color: #ffffff;
    pointer-events: none;
}
@media only screen and (min-width: 768px) {
    .cd-pagination li {
        display: inline-block;
    }
}
@media only screen and (min-width: 1170px) {
    .cd-pagination {
        margin: 4em auto 8em;
    }
}

/* --------------------------------

No space - remove distance between list items

-------------------------------- */
.cd-pagination.no-space {
    width: auto;
    max-width: none;
    display: inline-block;
    border-radius: 0.25em;
    border: 1px solid #e6e6e6;
}
.cd-pagination.no-space:after {
    content: "";
    display: table;
    clear: both;
}
.cd-pagination.no-space li {
    margin: 0;
    float: left;
    border-right: 1px solid #e6e6e6;
}
.cd-pagination.no-space li:last-of-type {
    border-right: none;
}
.cd-pagination.no-space a, .cd-pagination.no-space span {
    float: left;
    border-radius: 0;
    padding: .8em 1em;
    border: none;
}
.cd-pagination.no-space li:first-of-type a {
    border-radius: 0.25em 0 0 0.25em;
}
.cd-pagination.no-space li:last-of-type a {
    border-radius: 0 0.25em 0.25em 0;
}

/* --------------------------------

move buttons - move prev and next buttons to the sides

-------------------------------- */
.cd-pagination.move-buttons:after {
    content: "";
    display: table;
    clear: both;
}
.cd-pagination.move-buttons .button:first-of-type {
    float: left;
}
.cd-pagination.move-buttons .button:last-of-type {
    float: right;
}

.cd-pagination.no-space.move-buttons {
    width: 90%;
    max-width: 768px;
    display: block;
    overflow: hidden;
}
.cd-pagination.no-space.move-buttons li {
    float: none;
    border: none;
}
.cd-pagination.no-space.move-buttons a, .cd-pagination.no-space.move-buttons span {
    float: none;
}

/* --------------------------------

custom icons - customize the small arrow inside the next and prev buttons

-------------------------------- */
.cd-pagination.custom-icons .button a {
    position: relative;
}
.cd-pagination.custom-icons .button:first-of-type a {
    padding-left: 2.4em;
}
.cd-pagination.custom-icons .button:last-of-type a {
    padding-right: 2.4em;
}
.cd-pagination.custom-icons .button:first-of-type a::before,
.cd-pagination.custom-icons .button:last-of-type a::after {
    content: '';
    position: absolute;
    display: inline-block;
    /* set size for custom icons */
    width: 16px;
    height: 16px;
    top: 50%;
    /* set margin-top = icon height/2 */
    margin-top: -8px;
    background: transparent url("../img/cd-icon-arrow-1.svg") no-repeat center center;
}
.cd-pagination.custom-icons .button:first-of-type a::before {
    left: .8em;
}
.cd-pagination.custom-icons .button:last-of-type a::after {
    right: .8em;
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    transform: rotate(180deg);
}

/* --------------------------------

custom buttons - replace prev and next buttons text with a custom icon

-------------------------------- */
.cd-pagination.custom-buttons a, .cd-pagination.custom-buttons span {
    vertical-align: middle;
}
.cd-pagination.custom-buttons .button a {
    /* set custom width */
    width: 40px;
    /* image replacement */
    overflow: hidden;
    white-space: nowrap;
    text-indent: 100%;
    color: transparent;
    background-image: url("../img/cd-icon-arrow-2.svg");
    background-repeat: no-repeat;
    background-position: center center;
}
.cd-pagination.custom-buttons .button:last-of-type a {
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    transform: rotate(180deg);
}
.no-touch .cd-pagination.custom-buttons .button:last-of-type a:active {
    -webkit-transform: scale(0.9) rotate(180deg);
    -moz-transform: scale(0.9) rotate(180deg);
    -ms-transform: scale(0.9) rotate(180deg);
    -o-transform: scale(0.9) rotate(180deg);
    transform: scale(0.9) rotate(180deg);
}

.cd-pagination.no-space.custom-buttons .button:last-of-type a {
    border-radius: 0.25em 0 0 0.25em;
}

/* --------------------------------

animated buttons - animate the text inside prev and next buttons

-------------------------------- */
.cd-pagination.animated-buttons a, .cd-pagination.animated-buttons span {
    padding: 0 1.4em;
    height: 50px;
    line-height: 50px;
    overflow: hidden;
}
.cd-pagination.animated-buttons .button a {
    position: relative;
    padding: 0 2em;
}
.cd-pagination.animated-buttons .button:first-of-type a::before,
.cd-pagination.animated-buttons .button:last-of-type a::after {
    left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    right: auto;
    -webkit-transition: -webkit-transform 0.3s;
    -moz-transition: -moz-transform 0.3s;
    transition: transform 0.3s;
}
.cd-pagination.animated-buttons .button:last-of-type a::after {
    -webkit-transform: translateX(-50%) rotate(180deg);
    -moz-transform: translateX(-50%) rotate(180deg);
    -ms-transform: translateX(-50%) rotate(180deg);
    -o-transform: translateX(-50%) rotate(180deg);
    transform: translateX(-50%) rotate(180deg);
}
.cd-pagination.animated-buttons i {
    display: block;
    height: 100%;
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
    -webkit-transition: -webkit-transform 0.3s;
    -moz-transition: -moz-transform 0.3s;
    transition: transform 0.3s;
}

.no-touch .cd-pagination.animated-buttons .button a:hover i {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.no-touch .cd-pagination.animated-buttons .button:first-of-type a:hover::before {
    -webkit-transform: translateX(-50%) translateY(-50px);
    -moz-transform: translateX(-50%) translateY(-50px);
    -ms-transform: translateX(-50%) translateY(-50px);
    -o-transform: translateX(-50%) translateY(-50px);
    transform: translateX(-50%) translateY(-50px);
}

.no-touch .cd-pagination.animated-buttons .button:last-of-type a:hover::after {
    -webkit-transform: translateX(-50%) rotate(180deg) translateY(50px);
    -moz-transform: translateX(-50%) rotate(180deg) translateY(50px);
    -ms-transform: translateX(-50%) rotate(180deg) translateY(50px);
    -o-transform: translateX(-50%) rotate(180deg) translateY(50px);
    transform: translateX(-50%) rotate(180deg) translateY(50px);
}


#vrpresults {
    max-width: 90em;
    margin: 0 auto;
    padding: 1em 0;
}

/* -------------------- Select Box Styles: stackoverflow.com Method */
/* -------------------- Source: http://stackoverflow.com/a/5809186 */
#vrpresults select {
    -webkit-appearance: button;
    -webkit-border-radius: 2px;
    -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
    -webkit-padding-end: 20px;
    -webkit-padding-start: 2px;
    -webkit-user-select: none;
    background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
    background-position: 97% center;
    background-repeat: no-repeat;
    border: 1px solid #AAA;
    color: #555;
    font-size: inherit;
    /*margin: 20px;*/
    margin:3px 10px 0 0;
    overflow: hidden;
    padding: 5px 10px;
    text-overflow: ellipsis;
    white-space: nowrap;
    width: 200px;
}

​

    /* you only need width to set up columns; all columns are 100%-width by default, so we start
       from a one-column mobile layout and gradually improve it according to available screen space */

    @media only screen and (min-width: 34em) {
        /*.feature, .info { width: 50%; }*/
    }

    @media only screen and (min-width: 54em) {
        .content { width: 100%; }
        .filter-result-handles { width: 100%; }
        /*.info    { width: 100%;   }*/
    }

    @media only screen and (min-width: 76em) {
        .content { width: 100%; } /* 7/12 */
        .filter-result-handles { width: 100%; } /* 5/12 */
        /*.info    { width: 50%;    }*/
    }



.item {
    min-height:430px;
}
.thumbnail
{
    margin-bottom: 20px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}

.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 10px;
}
.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
{
    background: #428bca;
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
}
.item.list-group-item .caption
{
    padding: 9px 9px 0px 9px;
}
.item.list-group-item:nth-of-type(odd)
{
    background: #eeeeee;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item img
{
    float: left;
}
.item.list-group-item:after
{
    clear: both;
}
.list-group-item-text
{
    margin: 0 0 11px;
}
</style>
<div id="vrpresults">

    <?php //include "sidebar.php"; ?>

    <?php if ($data->count === 0) { ?>
        <h2>No Results Found</h2>
        <p>Please revise your search criteria.</p>
    <?php } else { ?>
    <!-- Total number of results found -->

        <div class="row">
            <div class="col filter-result-handles">
                <a href="<?php echo site_url() . "/vrp/favorites/show";?>" class="btn stylized pull-left">
                    <span>
                        <i class="fa fa-fw fa-2x fa-heart"></i>
                    </span>
                    View Favorites
                </a>
                <div class="pull-right">
                    <?php vrp_resultsperpage(); ?>
                    <?php vrpsortlinks($data->results[0]); ?>

                    <a href="#" id="list" class="btn">
                        <i class="fa fa-fw fa-lg fa-th-list"></i>

                    </a>
                    <a href="#" id="grid" class="btn">
                        <i class="fa fa-fw fa-lg fa-th"></i>
                    </a>
                </div>
            </div>
            <div style="clear:both;"></div>
            <br /><br />
        </div>
        <div class="row">
            <?php foreach($data->results as $a_unit) { ?>

                <div class="item col" style="width:25%;">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="http://placehold.it/350x200<?php //echo esc_url($a_unit->Thumb); ?>" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                <?php echo esc_html($a_unit->Name); ?>
                            </h4>
                            <p class="group inner list-group-item-text">
                                <?php echo wp_kses_post($a_unit->ShortDescription); ?>
                            </p>
                            <div class="row">
                                <div class="col"> <!-- 1/2 -->
                                    <p class="lead">
                                        <?php echo esc_html($a_unit->Bedrooms); ?> Beds /
                                        <?php echo esc_html($a_unit->Bathrooms); ?> Baths
                                    </p>
                                </div>
                                <div class="col"> <!-- 1/2 -->
                                    <a class="vrp-favorite-button stylized-button" data-unit="<?php echo $a_unit->id; ?>" href="#">Add to favorites</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!--                <div class="col">-->
<!--                    <a href="--><?php //bloginfo('url'); ?><!--/vrp/unit/--><?php //echo $a_unit->page_slug; ?><!--/">-->
<!--                        <h2>--><?php //echo esc_html($a_unit->Name); ?><!--</h2>-->
<!--                    </a>-->
<!--                </div>-->

<!--                <div class="col">-->
<!--                    --><?php //echo esc_html($a_unit->Bedrooms); ?><!-- Beds /-->
<!--                    --><?php //echo esc_html($a_unit->Bathrooms); ?><!-- Baths-->
<!--                </div>-->

<!--                <div class="col">-->
<!--                    <a href="--><?php //bloginfo('url'); ?><!--/vrp/unit/--><?php //echo esc_attr($a_unit->page_slug);?><!--/">-->
<!--                        <img src="--><?php //echo esc_url($a_unit->Thumb); ?><!--" class="vrpresultimg">-->
<!--                    </a>-->
<!--                </div>-->

<!--                <div class="col">-->
<!--                    --><?php //echo wp_kses_post($a_unit->ShortDescription); ?>
<!--                    <button class="vrp-favorite-button" data-unit="--><?php //echo $a_unit->id; ?><!--"></button>-->
<!--                </div>-->

            <?php } ?>
        </div>
    <?php } ?>
    <div class="row">

        <div class="col">
        <?php vrp_pagination($data->totalpages, $data->page); ?>
        </div>
    </div>
</div>
