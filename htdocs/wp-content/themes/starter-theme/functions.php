<?php
/**
 * The main functions file loading all source files.
 *
 * This files should only contain include statements!
 */

// Define the theme version. Bump the version up to update client-side caches.
define( 'ST_THEME_VERSION', '0.0.0' );

include_once get_template_directory() . '/src/theme-setup.php';
include_once get_template_directory() . '/src/assets.php';
include_once get_template_directory() . '/src/blogs-functions.php';
include_once get_template_directory() . '/src/user-functions.php';
include_once get_template_directory() . '/src/kohteet-functions.php';
include_once get_template_directory() . '/src/contact-functions.php';
include_once get_template_directory() . '/src/acf-functions.php';


