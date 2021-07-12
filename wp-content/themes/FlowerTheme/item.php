<?php
/* Template Name: Item */
get_header();?>

    <div class="container">
        <img src="<?php the_field('item_image'); ?>" style="width: 20rem;">
        <h2><?php the_title(); ?></h2>
        <p><?php the_field('price'); ?></p>
    </div>

<?php get_footer();?>