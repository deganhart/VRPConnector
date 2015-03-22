
<!-- all the important responsive layout stuff -->
<div id="vrp">
    <div id="vrpresults" class="vpr-container-fluid">



        <?php if ($data->count === 0) : ?>

            <div class="vpr-row">
                <h2>No Results Found</h2>
                <p>Please revise your search criteria.</p>
            </div>

        <?php else: ?>

        <!-- Total number of results found -->
        <div class="row">

            <div class="vpr-col-md-12 vpr-filter-result-handles">
                <a href="<?php echo site_url() . "/vrp/favorites/show";?>" class="vpr-btn vpr-stylized turquoise vpr-pull-left">
                    <span>
                        <i class="fa fa-fw fa-2x fa-heart"></i>
                    </span>
                    View Favorites
                </a>
                <div class="vpr-pull-right">
                    <?php vrp_resultsperpage(); ?>
                    <?php vrpsortlinks($data->results[0]); ?>

                    <a href="#" id="vpr-list" class="btn">
                        <i class="fa fa-fw fa-lg fa-th-list"></i>

                    </a>
                    <a href="#" id="vpr-grid" class="btn">
                        <i class="fa fa-fw fa-lg fa-th"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="vpr-row">
            <div class="vpr-col-xs-12"><hr /></div>
        </div>

        <div class="vpr-row">
        <?php foreach($data->results as $index => $a_unit) : ?>


            <div class="vpr-col-md-4 vpr-col-xs-6 vpr-col-sm-12 vpr-list-item-wrap vpr-grid">
                <div class="vpr-item">

                    <div class="vpr-thumbnail text-center" style="background-image:url(<?=esc_url($a_unit->Thumb); ?>);">

                        <div class="vpr-actions text-center">
                            <a href="<?php echo site_url() . "/vrp/favorites/show";?>" data-unit="<?php echo $a_unit->id; ?>" class="vrp-favorite-button vpr-btn purple">
                                <i class="fa fa-fw fa-lg fa-heart"></i>
                                Add to favorites
                            </a>
                            <br /><br />
                            <a href="#" data-unit="<?php echo $a_unit->id; ?>" class="vpr-btn orange">
                                <i class="fa fa-fw fa-lg fa-calendar"></i>
                                Reserve now
                            </a>
                        </div>
<!--                        <img src="http://placehold.it/285x200/ddd/ddd" class="vpr-img-thumbnail vpr-img-responsive vpr-center-block" width="97%" alt="" /> -->
                    </div>

                    <div class="vpr-caption">
                        <div class="vpr-row">
                            <div class="vpr-col-md-8">
                                <h4><?=esc_html($a_unit->Name); ?></h4>
                            </div>
                            <div class="vpr-col-md-4">
                                <span class="vpr-epink">
                                    <strong><?=esc_html($a_unit->Bedrooms); ?> Beds</strong>
                                </span>
                                <span class="vpr-kiwi">
                                    <strong><?=esc_html($a_unit->Bathrooms); ?> Baths</strong>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
        </div>
        <?php endif ?>
        <div class="vpr-row">
            <div class="vpr-col-md-12">
                <?=vrp_pagination($data->totalpages, $data->page); ?>
            </div>
        </div>
    </div>
</div>