<?php

/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr(oceanwp_html_classes()); ?>" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="/theme.css">
	<?php wp_head(); ?>
</head>

<header class="header">
        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        ?>


        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php bloginfo('name'); ?>">
        </a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

        <!-- On boucle pour afficher le menu -->
            <!-- <?php $menu_items = wp_get_nav_menu_items('menu-principal'); 

                if (!empty($menu_items)) {
                    echo '<ul class="menu">';

                    foreach ($menu_items as $menu_item) {
                        echo '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
                    }
                    echo '</ul>';       
                }
            ?> -->
        
        <?php

        // Afficher le menu
        wp_nav_menu(array(
            'theme_location' => 'menu-principal',
        ));
        
        ?>
        
    </header>
				