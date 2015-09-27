<?php

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles');
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrapJs');
add_action( 'wp_enqueue_scripts', 'enqueue_momentJs' );
add_action( 'wp_enqueue_scripts', 'enqueue_slackChatJs' );
add_action( 'wp_enqueue_scripts', 'enqueue_xChildJs' );

function enqueue_parent_styles() {
    wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'demo-css', get_stylesheet_directory_uri() .'/css/messages.css' );
    wp_enqueue_style( 'slack-chat-css', get_stylesheet_directory_uri() .'/css/slack-chat.css' );
}

function enqueue_momentJs() {
    wp_enqueue_script(
        'moment-js',
        get_stylesheet_directory_uri() . '/js/moment.min.js',
        array( 'jquery' )
    );
}

function enqueue_slackChatJs() {
    wp_enqueue_script(
        'slack-chat-js',
        get_stylesheet_directory_uri() . '/js/slack-chat.js',
        array( 'jquery' )
    );
}

function enqueue_bootstrapJs() {
    wp_enqueue_script(
        'bootstrap-js',
        get_stylesheet_directory_uri() . '/js/bootstrap.min.js',
        array( 'jquery' )
    );
}

function enqueue_xChildJs() {
    wp_enqueue_script(
        'x-child-js',
        get_stylesheet_directory_uri() . '/js/x-child.js',
        array( 'jquery' )
    );
}


