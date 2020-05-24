<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body>
    <header>
        <!-- <?php get_search_form(); ?>  -->
        <div id="header-frontpage">
            <div id="header-parts">
                <div id="headr-part-left">
                    <div class="tickets-online">Касса: +375 17 331 16 17</div>
                    <!-- <p id="header-cassa">Касса: +375 17 331 16 17</p> -->
                    <!-- <p id="header-phone-number">+375 17 331 16 17</p> -->
                    <div class="tickets-online"><i class="fas fa-shopping-cart"></i>Заказ билетов online</div>
                </div>
                <div id="logo">
                    <img src="<?php echo get_template_directory_uri(); ?> . '\assets/img\logo-header.png'" alt="Philarmonic">  
                </div>
                <div id="header-part-right">
                    <div class="search-form"><?php get_search_form(); ?></div>
                    <!-- <p id="header-cassa">Касса: +375 17 331 16 17</p> -->
                    <!-- <p id="header-phone-number">+375 17 331 16 17</p> -->
                    <!-- <div class="tickets-online">Заказ билетов online</div>             -->
                </div>
            </div>
        <div id="header-brand">Белорусская государственная филармония</div>
        <div class="header-main-menu">
            <nav class="main-menu">
                <?php wp_nav_menu( 
                    $params = array(
                         'container'=> false, // Без div обертки
                         // 'echo'=> false, // Чтобы можно было его предварительно вернуть
                         'items_wrap'=> '%3$s', // Разделитель элементов
                         'depth'=> 0, // Глубина вложенности
                         'theme_location' => 'header-menu',
                    ));
                        
                ?>
            </nav>
        </div>
    </header>   
    