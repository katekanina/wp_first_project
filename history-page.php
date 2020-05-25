<?php
/*
Template Name: History page
*/
?>
<?php get_header(); ?>
    <section>
        <?php the_breadcrumb(); ?>
    </section>
    <div class="container">
    <?php $query = new WP_Query( [ 'category_name' => 'history' ] ); ?>
        <?php
            while ( $query->have_posts() ) {
                $query->the_post(); ?>
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
            <?php }?>
            <?php the_content(); ?>

    </div>
<?php get_footer(); ?>
