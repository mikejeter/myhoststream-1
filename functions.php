<?php

function myhoststream_theme_support(){
    // Adds dynamic title tag support
    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'myhoststream_theme_support');


function myhoststream_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('myhoststream-style', get_template_directory_uri() . "/assets/css/style.css", array('myhoststream-bootstrap'), $version, 'all');
    wp_enqueue_style('myhoststream-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('myhoststream-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');

}

add_action('wp_enqueue_scripts', 'myhoststream_register_styles');

function myhoststream_register_scripts(){

    wp_enqueue_script('myhoststream-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('myhoststream-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('myhoststream-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('myhoststream-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts', 'myhoststream_register_scripts');

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );


?>