<?php

get_header();
?>
<?php
$args = array('post_type' => 'post','nopaging'=> false,'posts_per_page' => 3 );
$q = new WP_Query(array($args));
?>



<div class="blog-wrapper container card">
 <div class="blog-main row">

 <?php if ($q->have_posts()) : ?>
    <?php while ($q->have_posts()) : $q->the_post() ?>

     <a href="<?php the_permalink() ?>" class="blog-link col-md-3  shadow-lg my-5 mx-2">
         <div class="blog-item row">
             <div class="col-12 text-center py-2"><h1><?php the_title() ?></h1></div>
             <div class="col12 py-2"><?php if($image = get_field('image')): ?>
             <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
             <?php endif ?> </div>
             <div class="col-12 py-2"><?php the_content() ?></div>
         </div>
     </a>


<?php endwhile; ?>
        <?php wp_reset_postdata() ?>
    <?php else : ?>
        <p>There are no posts to display</p>
    <?php endif ?>

    </div>
</div>    


<?php
get_footer();
?>







          
  