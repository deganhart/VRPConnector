
<!-- all the important responsive layout stuff -->
<style>
    #vrpresults {
        max-width: 90em;
        margin: 0 auto;
        padding: 1em 0;
    }

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
                <a href="<?php echo site_url() . "/vrp/favorites/show";?>" class="button">
                    <span>
                        <i class="fa fa-fw fa-heart"></i>
                    </span>
                    View Favorites
                </a>
                <?php echo esc_html($data->count); ?> Results Found
                Show
                <?php vrp_resultsperpage(); ?>
                Sort By:
                <?php vrpsortlinks($data->results[0]); ?>
                <?php vrp_pagination($data->totalpages, $data->page); ?>

            </div>
        </div>
            <div class="col content">
            <?php foreach($data->results as $a_unit) { ?>

                <div class="col">
                    <a href="<?php bloginfo('url'); ?>/vrp/unit/<?php echo $a_unit->page_slug; ?>/">
                        <h2><?php echo esc_html($a_unit->Name); ?></h2>
                    </a>
                </div>

                <div class="col">
                    <?php echo esc_html($a_unit->Bedrooms); ?> Beds /
                    <?php echo esc_html($a_unit->Bathrooms); ?> Baths
                </div>

                <div class="col">
                    <a href="<?php bloginfo('url'); ?>/vrp/unit/<?php echo esc_attr($a_unit->page_slug);?>/">
                        <img src="<?php echo esc_url($a_unit->Thumb); ?>" class="vrpresultimg">
                    </a>
                </div>

                <div class="col">
                    <?php echo wp_kses_post($a_unit->ShortDescription); ?>
                    <button class="vrp-favorite-button" data-unit="<?php echo $a_unit->id; ?>"></button>
                </div>

            <?php } ?>
            </div>
        </div>
    <?php } ?>
</div>

