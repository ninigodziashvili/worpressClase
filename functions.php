<?php

// Añadir style

function mi_tema_enqueue_styles() {
    wp_enqueue_style(
        'estilos-principales',
        get_stylesheet_directory_uri() . '/style.css'
    );
}
add_action('wp_enqueue_scripts', 'mi_tema_enqueue_styles');

// Añadir JS archivo global

function mi_tema_scripts() {
    wp_enqueue_script(
    'main-js',
    get_template_directory_uri() . '/assets/js/main.js',
    array(),
    null,
    true 
    );
   }

   add_action('wp_enqueue_scripts', 'mi_tema_scripts');
  
   // Añadir JS archivo para plantilla.php
   
   function your_conditional_scripts() {
    if (is_page('test-page')) {
        wp_enqueue_script(
            'script.js',
            get_template_directory_uri() . '/assets/js/script.js',
            array(),
            null,
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'your_conditional_scripts');

// Menu Navegacion

 function mi_tema_menu_en_body_open() {
    wp_nav_menu(array(
        'theme_location' => 'mi-menu',
        'container' => 'nav',
        'container_class' => 'menu-desde-body-open',
        'menu_class' => 'mi-menu-clase'
    ));
}
add_action('wp_body_open', 'mi_tema_menu_en_body_open');
 