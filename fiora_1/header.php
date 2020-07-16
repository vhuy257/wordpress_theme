<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Fiora 01
 * @since Fiora 1.0
 */

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<header>
		<div class="top-content">
			<div class="container">
				<div class="text-promo">Mắt kính hàng hiệu - HotLine: 0933 515 559</div>
			</div>
		</div>
		<div class="logo__wrapper">
			<?php
			// Display the Custom Logo
			the_custom_logo();
			// No Custom Logo, just display the site's name
			if (!has_custom_logo()) {
				?>
				<h1><?php bloginfo('name'); ?></h1>
				<?php
			}
			?>
		</div>
	
	<div class="header-navigation-wrapper container">

	<?php
	if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
		?>
			<nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">
				<ul class="primary-menu reset-list-style">
				<?php
				if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu(
						array(
							'container'  => '',
							'items_wrap' => '%3$s',
							'theme_location' => 'primary',
						)
					);
				} elseif ( ! has_nav_menu( 'expanded' ) ) {
					wp_list_pages(
						array(
							'match_menu_classes' => true,
							'show_sub_menu_icons' => true,
							'title_li' => false,
							'walker'   => new TwentyTwenty_Walker_Page(),
						)
					);
				}
				?>
				</ul>
			</nav><!-- .primary-menu-wrapper -->
		<?php
	}
	if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
		?>
		<div class="header-toggles hide-no-js">
		<?php
		if ( has_nav_menu( 'expanded' ) ) {
			?>
			<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">
				<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
					<span class="toggle-inner">
						<span class="toggle-text"><?php _e( 'Menu', 'fiora' ); ?></span>
					</span>
				</button><!-- .nav-toggle -->
			</div><!-- .nav-toggle-wrapper -->
			<?php
		}
		if ( true === $enable_header_search ) {
			?>
			<div class="toggle-wrapper search-toggle-wrapper">
				<button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
					<span class="toggle-inner">
						<?php twentytwenty_the_theme_svg( 'search' ); ?>
						<span class="toggle-text"><?php _e( 'Search', 'twentytwenty' ); ?></span>
					</span>
				</button><!-- .search-toggle -->
			</div>
			<?php
		}
		?>
		</div><!-- .header-toggles -->
		<?php
	}
	?>
	</div><!-- .header-navigation-wrapper -->
	</header>