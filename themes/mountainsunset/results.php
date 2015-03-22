
<!-- all the important responsive layout stuff -->
<div id="vrp">
    <div id="vrpresults" class="vrp-container-fluid">



        <?php if ($data->count === 0) : ?>

            <div class="vrp-row">
                <h2>No Results Found</h2>
                <p>Please revise your search criteria.</p>
            </div>

        <?php else: ?>

        <!-- Total number of results found -->
        <div class="vrp-row">

            <div class="vrp-col-md-3 vrp-filter-result-handles">
                <a href="<?php echo site_url() . "/vrp/favorites/show";?>" class="vrp-btn vrp-stylized turquoise vrp-pull-left">
                    <div class="vrp-icon">
                        <i class="fa fa-fw fa-2x fa-heart"></i>
                    </div>
                    View Favorites
                </a>
            </div>
            <div class="vrp-col-md-9">
                <div class="vrp-pull-right">
                    <?php vrp_resultsperpage(); ?>
                    <?php vrpsortlinks($data->results[0]); ?>

                    <a href="#" id="vrp-list" class="btn">
                        <i class="fa fa-fw fa-lg fa-th-list"></i>

                    </a>
                    <a href="#" id="vrp-grid" class="btn">
                        <i class="fa fa-fw fa-lg fa-th"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="vrp-row">
            <div class="vrp-col-xs-12"><hr /></div>
        </div>

        <div class="vrp-row">
        <?php foreach($data->results as $index => $a_unit) : ?>


            <div class="vrp-col-md-4 vrp-col-xs-12 vrp-col-sm-6 vrp-list-item-wrap vrp-grid">
                <div class="vrp-item">

                    <div class="vrp-thumbnail text-center" style="background-image:url(<?=esc_url($a_unit->Thumb); ?>);">

                        <div class="vrp-actions">
                            <a href="<?php echo site_url() . "/vrp/favorites/show";?>" data-unit="<?php echo $a_unit->id; ?>" class="vrp-favorite-button vrp-btn purple text-center">
                                <i class="fa fa-fw fa-lg fa-heart"></i>
                                Add to favorites
                            </a>

                            <a href="#" data-unit="<?php echo $a_unit->id; ?>" class="vrp-btn orange">
                                <i class="fa fa-fw fa-lg fa-calendar"></i>
                                Reserve now
                            </a>
                        </div>
<!--                        <img src="http://placehold.it/285x200/ddd/ddd" class="vrp-img-thumbnail vrp-img-responsive vrp-center-block" width="97%" alt="" /> -->
                    </div>

                    <div class="vrp-caption">
                        <div class="vrp-row">
                            <div class="vrp-col-xs-8 vrp-col-sm-7">
                                <h4><?=esc_html($a_unit->Name); ?></h4>
                            </div>
                            <div class="vrp-col-xs-4 vrp-col-sm-5">
                                <div class="vpr-meta-wrapper pull-right">
                                    <span class="vrp-epink">
                                        <strong><?=esc_html($a_unit->Bedrooms); ?> Beds</strong>
                                    </span>
                                    <span class="vrp-kiwi">
                                        <strong><?=esc_html($a_unit->Bathrooms); ?> Baths</strong>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
        </div>
        <?php endif ?>
        <div class="vrp-row">
            <div class="vrp-col-md-12">
                <?=vrp_pagination($data->totalpages, $data->page); ?>
            </div>
        </div>
    </div>
</div>