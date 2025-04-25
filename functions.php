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
    get_template_directory_uri() . '/assets/js/script.js',
    array(),
    null,
    true 
    );
   }

   add_action('wp_enqueue_scripts', 'mi_tema_scripts');
  
   // Añadir JS archivo para patata

   function your_conditional_scripts() {
    if (is_page('plantilla-de-patata')) {
        wp_register_script('patata.js', get_template_directory_uri() . '/assets/js/patata.js', array(), null, true);
        wp_enqueue_script('patata.js');
    }
}

add_action('wp_enqueue_scripts', 'your_conditional_scripts');

// Menu Nevegacion

/* function mi_tema_menu() {
    register_nav_menus(
        array('mi-menu' => __('Mi menu'))
    );
}

add_action('init', 'mi_tema_menu');
 */

 function mi_tema_menu_en_body_open() {
    wp_nav_menu(array(
        'theme_location' => 'mi-menu',
        'container' => 'nav',
        'container_class' => 'menu-desde-body-open',
        'menu_class' => 'mi-menu-clase'
    ));
}
add_action('wp_body_open', 'mi_tema_menu_en_body_open');
 