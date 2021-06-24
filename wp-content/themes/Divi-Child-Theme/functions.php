<?php
function divi__child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'dove-yoga-child-google-fonts', '//fonts.googleapis.com/css2?family=Calligraffitti&family=Raleway:ital,wght@0,300;0,400;1,300;1,400&display=swap');
}
    add_action( 'wp_enqueue_scripts', 'divi__child_theme_enqueue_styles' );
 
 
//you can add custom functions below this line:
