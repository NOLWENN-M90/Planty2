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

<header>
	
		<img class="logo" src="/wp-content/themes/oceanwp-child-theme-master/Logo.png" alt="logo Planty">
		<a href="http://localhost/Planty/"></a>
	
		<nav class="nav" href="http://localhost/Planty/nous-rencontrer-2/"> Nous rencontrer</nav>
	
		<button class="butheader" href="http://localhost/Planty/commander/">Commander</button>
	 
</header>


<body <?php body_class(); ?> <?php oceanwp_schema_markup('html'); ?>>

	<?php wp_body_open(); ?>

	<?php do_action('ocean_before_outer_wrap'); ?>

	<div id="outer-wrap" class="site clr">

		<a class="skip-link screen-reader-text" href="#main"><?php echo esc_html(oceanwp_theme_strings('owp-string-header-skip-link', false)); ?></a>

		<?php do_action('ocean_before_wrap'); ?>

		<div id="wrap" class="clr">

			<?php do_action('ocean_top_bar'); ?>

			<?php do_action('ocean_header'); ?>

			<?php do_action('ocean_before_main'); ?>

			<main id="main" class="site-main clr" <?php oceanwp_schema_markup('main'); ?> role="main">

				<?php do_action('ocean_page_header'); ?>

				<?php wp_nav_menu(['theme_location' => 'header',]); ?>