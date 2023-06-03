<?php
/**
 * adrian scripts and styles setup for the application
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package adrian
 */

/**
 * Enqueue scripts and styles.
 */
function adrian_scripts() {
	wp_enqueue_style( 'adrian-style', adrian_url . '/assets/style/adrian.min.css', [], filemtime(adrian_dir . '/assets/style/adrian.min.css'), 'all' );

	wp_enqueue_script('adrian-main', adrian_url . '/assets/js/adrian.min.js', ['jquery'], filemtime(adrian_dir . '/assets/js/adrian.min.js'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'adrian_scripts' );