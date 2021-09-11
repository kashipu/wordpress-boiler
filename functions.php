<?php 
function init_template(){
    // Theme supports
    add_theme_support( 'post_thumbnails');
    add_theme_support('title-tag');
}

add_action( 'after_setup_theme', 'init_template' );

// Librerias o Assets

function assets(){
    // Registo de dependencias de estilos
    wp_register_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', '', '5.0.2', 'all');
    wp_register_style( 'urbanist', 'https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700&display=swap','', '1.0', 'all' );
    // Llamado de estilos y referencia a la hora de estilos principal
    wp_enqueue_style( 'style', get_stylesheet_uri(), array('bootstrap', 'urbanist'), '1.0', 'all');
    // wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css',false,'1.1','all');
    wp_enqueue_script( 'bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', '', '5.0.2', true  );
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', '', '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'assets');

?>