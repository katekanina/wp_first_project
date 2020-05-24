<!-- for one post -->
<?php get_header(); ?> 
    <div class="container">
        <?php the_post(); ?>
        <p class="concert-title"><?php the_title(); ?></p>
            <div class="single-some-post">
                <div class="concert-affiche">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <div class="concert-description">
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div> 
                </div>
                    
            </div>
    </div>
<?php get_footer(); ?>

    
