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
 
  

