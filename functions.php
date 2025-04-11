<?php
function mi_tema_config() {
    if (is_front_page()) {
        define('SECCION_ESPECIAL', true);
    }
}
add_action('wp', 'mi_tema_config');

function font_doppio() {
    wp_enqueue_style( 
        'fuente-doppio-one',
        'https://fonts.googleapis.com/css2?family=Doppio+One&display=swap', 
        array(),
        null );
}
add_action( 'wp_enqueue_scripts', 'font_doppio' );

function mi_tema_scripts() {
    
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
        array(), 
        '5.3.0' 
    );

    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css',
        array(),
        '1.10.5' 
    );

    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',
        array(), 
        '5.3.0',
        true 
    );

    wp_enqueue_script(
        'mi-script',
        get_template_directory_uri() . '/js/script.js',
        array(), 
        '1.0',
        true
    );

    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mi_tema_scripts');
?>