<?php
function wpb_add_google_fonts() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Calligraffitti&family=Raleway:ital,wght@0,300;0,400;1,300;1,400&display=swap', false ); 
    }
     
    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
 
 
//you can add custom functions below this line:
