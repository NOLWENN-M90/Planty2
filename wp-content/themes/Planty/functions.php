<?php

add_action('wp_enqueue_scripts' , 'theme_enqueue_styles');
function theme_enqueue_styles()

{ // chargement du style.css du thème parent Neve //
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');

    // chargeent du css/theme.css pour personnalisation //
    wp_enqueue_style('theme-style' , get_stylesheet_directory_uri() . '/assets/theme.css' , array() , filemtime(get_stylesheet_directory() . '/assets/theme.css'));
}

add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);
(is_user_logged_in() && $args->menu == 'menu-header');
function add_search_form($items, $args) {
    if( is_user_logged_in() && $args->theme_location == 'main_menu' ){
    $items .= '<li><a href="./planty/wp-admin" class="admin">Admin</a></li>'; 
    }
    else{
    }

  return $items;
}

?>