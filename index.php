<?php get_header(); ?> 
    <div class="sticky">
        <div class="sticky-image">
           <img class="sticky-image" src="<?php echo get_template_directory_uri(); ?> . '/assets/img/slayd3-small.png'" alt="Open date ticket"> 
        </div>
        <div class="sticky-text">
            <p id="strong">Дорогие друзья!</p> 
            <p>Мы призываем к солидарности и надеемся на вашу помощь и поддержку!</p>
            <p> Просим вас не сдавать билеты на отмененные и перенесенные концерты Белорусской государственной филармонии. Все приобретенные ранее билеты будут иметь статус «билета с открытой датой» и предоставят вам право посетить ЛЮБОЙ концерт* филармонии по вашему выбору до 1 декабря 2020 года.</p> 
            <p>В день посещения концерта вам необходимо обратиться в кассу филармонии для уточнения зрительского места в зале. Белорусская государственная филармония – единственная филармония в мире, в состав которой входят 16 творческих коллективов (3 оркестра, 2 хора, камерно-инструментальные и вокальные ансамбли, фольклорные коллективы). В настоящее время артисты не прекращают работу и продолжают готовить новые программы, которыми надеются порадовать вас в будущем.</p>
        </div>
    </div>

    <div class="container">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php if( ! in_category( array( 'news' ) )) { ?>
                    <div class="some-post">
                        <?php if(has_post_thumbnail()) {  ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        <?php } else {
                             echo '1';
                        } ?>
                        <h4><?php the_title(); ?></h4>
                        <?php the_excerpt(); ?> 
                    </div>
                <?php } ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>
