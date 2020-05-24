<?php get_header(); ?>

<div class="main-heading">
    <h1><?php the_title(); ?></h1>
    <!-- <img src="<?php echo get_template_directory_uri(); ?> . /assets/img/slayd3-medium.png" alt=""> -->
</div>
<section>
    <?php 
        if (have_posts()): 
            while (have_posts()): the_post(); 
                the_content();
            endwhile;
        endif;
    ?>
</section>
<?php get_footer(); ?>