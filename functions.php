<?php
/**
 * wv functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wv
 */

/**
 * Theme setup.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load Jetpack compatibility file.
 */

/**
 * Load Assets.
 */
require get_template_directory() . '/inc/assets.php';
