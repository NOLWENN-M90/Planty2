<?php

add_action('wp_enqueue_scripts' , 'theme_enqueue_styles');
function theme_enqueue_styles()

{ // chargement du style.css du thème parent Neve //
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');

    // chargeent du css/theme.css pour personnalisation //
    wp_enqueue_style('theme-style' , get_stylesheet_directory_uri() . '/assets/theme.css' , array() , filemtime(get_stylesheet_directory() . '/assets/theme.css'));
}

add_filter( 'wp_nav_menu_items' , 'admin_admin_link', 10, 2);

function admin_admin_link ($items, $args) {
    if (is_user_logged_in() && $args->theme_location == 'menu-principal') {
        $items .= '<li><a href="' . get_admin_url() . '"<Admin</a></li>' ;
    }
    return $items;
}