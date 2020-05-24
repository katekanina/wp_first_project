<?php
    add_action('wp_enqueue_scripts', 'philharmonic_styles');
    add_action( 'after_setup_theme', 'philharmonic_after_setup' );
    add_filter( 'excerpt_length', function(){
        return 20;
    } );

    function philharmonic_styles() {
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('philarmonic-theme-styles', get_template_directory_uri() . '/assets/css/philarmonic-theme-styles.css');

    }
    function philharmonic_after_setup() {
        register_nav_menu( 'header-menu', 'Header Menu' );
        add_theme_support('post-thumbnails');
	    add_theme_support('title-tag');
    }

    function the_breadcrumb() {
        echo '<ul id="crumbs">';
      if (!is_home()) {
         echo '<li><a href="';
         echo get_option('home');
         echo '">';
         echo 'Главная';
         echo "</a></li>";
         echo '  &#10148; ';
         if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li> ');
            if (is_single()) {
               echo "</li><li>";
               the_title();
               echo '</li>';
            }
         } elseif (is_page()) {
            echo '<li>';
            echo the_title();
            echo '</li>';
         }
      }
      elseif (is_tag()) {single_tag_title();}
      elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
      elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
      elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
      elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
      elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
      elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
      echo '</ul>';
   }
 
  

