<?php

/**
 * Habilitar que cada página tenga imagen relacionada,
 * la cual usaremos para el background del hero
 */

function portafolio_setup()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'portafolio_setup');

/**
 * Añadir menú de navegación
 */

function portafolio_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'portafolio')
    ));
}

add_action('init', 'portafolio_menus');

/**
 * Añadir estilos y JavaScript
 */

function portafolio_scripts_styles()
{
    // Añadimos Bootstrap
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');

    // Añadimos nuestro style.css y ponemos Bootstrap como dependencia
    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap'), '1.0.0');
}

add_action('wp_enqueue_scripts', 'portafolio_scripts_styles');
