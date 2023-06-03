<?php
/**
 * adrian menus functionality
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package adrian
 */

// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'adrian' ),
		)
	);