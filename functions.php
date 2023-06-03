<?php
/**
 * adrian functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package adrian
 */

// general setup

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * defining theme directory
 */
if (!defined('adrian_site')) {
    define(
        'adrian_site',
        untrailingslashit(
            get_site_url()
        )
    );
}


/**
 * defining theme directory
 */
if (!defined('adrian_dir')) {
    define(
        'adrian_dir',
        untrailingslashit(
            get_template_directory()
        )
    );
}

/**
 * defining theme directory uri
 */
if (!defined('adrian_url')) {
    define(
        'adrian_url',
        untrailingslashit(
            get_template_directory_uri()
        )
    );
}

//adding styles and scripts functionality
require_once(adrian_dir.'/inc/register-theme-supports.php');

//adding menus functionality
require_once(adrian_dir.'/inc/register-menus.php');

//adding styles and scripts functionality
require_once(adrian_dir.'/inc/register-scripts.php');

//adding sidebar functionality
require_once(adrian_dir.'/inc/register-sidebars.php');