<?php

	


function enqueue_bootstrap_styles(){ 
    wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'page-home', get_template_directory_uri() . '/css/page-home.css',false,'1.1','all');
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap_styles' );



function enqueue_bootstrap_scripts() {  
    wp_enqueue_script( 'bootstrap_jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), '3.3.1', true );
    wp_enqueue_script( 'bootstrap_popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js', array(), '1.14.7', true );
    wp_enqueue_script( 'bootstrap_javascript', 'https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js', array(), '4.3.1', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap_scripts' );


?>