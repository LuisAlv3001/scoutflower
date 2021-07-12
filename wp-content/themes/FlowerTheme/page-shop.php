<?php
/* Template Name: Shop */
get_header();?>

<div class="container">

    <?php $args = array(
        'post_type' => 'page',
        'posts_per_page' => -1,
        'post_parent' => $post->ID,
        'order' => 'DEC',
    );

    $the_query = new WP_Query($args);
    
    if( $the_query->have_posts() ) :
        
        // $the_query->the_post(); 
        $temp_drop_name = get_post_custom_values('drop_name');
        $row_div = false ?>

        <?php while( $the_query-> have_posts() ) : 
            $the_query->the_post(); 
            
            if($temp_drop_name == get_post_custom_values('drop_name')) :?>
                <div class="col-4">
                    <div class="item-card">
                        <a href="<?php the_permalink()?>" >
                            <img src="<?php the_field('item_image'); ?>" alt="instant" style="max-width: 100%;">
                            <H4 class="text-center"><?php the_title(); ?></H4>
                        </a>
                        <H5 class="text-right"><?php the_field('price') ?></H5>
                    </div>
                </div>
            <?php else :
                if($row_div == true) :?>
                    </div>
                <?php endif ?>

                <h2 class="titles"><?php the_field('drop_name') ?></h2>
                <div class="row mb-5 mt-3">
                    <div class="col-4">
                        <div class="item-card">
                            <a href="<?php the_permalink()?>" >
                                <img src="<?php the_field('item_image'); ?>" alt="instant" style="max-width: 100%;">
                                <H4 class="text-center"><?php the_title(); ?></H4>
                            </a>
                            <H5 class="text-right"><?php the_field('price') ?></H5>
                        </div>
                    </div>
            <?php $temp_drop_name = get_post_custom_values('drop_name'); 
            $row_div = true;
            endif;

        endwhile; ?>
                </div>

    <?php else : echo "<p>no content to show here</p>";
    endif;?>
</div>



<?php get_footer();?>