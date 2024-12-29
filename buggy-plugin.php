<?php
/**
 * Plugin Name:       Buggy Plugin
 * Plugin URI:        https://octahexa.com
 * Description:       A deliberately buggy plugin for assessment purposes.
 * Version:           1.0.0
 * Author:            octahexa
 * Author URI:        https://octahexa.com
 * License:           GPL2
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Trigger a syntax error.
add_action('init', 'buggy_function');

function buggy_function() {
    echo 'This will cause a critical error on activation';

    // Deliberate syntax error below:
    if ( true echo "Missing curly braces";
}
