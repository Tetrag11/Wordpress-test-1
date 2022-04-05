<?php get_header(); ?>

<div class="container">


<p><?php the_title() ?></p>
<p><?php the_content() ?></p>
<?php if($image = get_field('image')): ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
<?php endif ?>    


   
        

</div>
<?php get_footer(); ?>
