<?php

/**
 * Template Name: Front Page
 */
get_header();
?>

    <div class="hero container hero" >
        <div class="hero-child-1 row ">
            <div class="card-child col-12 card ">
                <div class="card-child-1 row">
                    <div class="col-12 text-center">
                        <h2><?php the_field('heading'); ?></h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-6">
                        <?php $image = get_field('image'); ?>
                        <?php if ($image) { ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php } ?>

                    </div>
                    <div class="paragraph-btn col-md-6">
                        <div class="row">
                            <p class="col-12 "><?php the_field('paragraph'); ?></p>
                            <?php $button = get_field('button'); ?>
                            <?php if ($button) { ?>
                                <a class=" btn btn-danger btn-lg" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



<?php 
 get_footer();
?>


