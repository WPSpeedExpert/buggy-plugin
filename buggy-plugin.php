<?php
/**
 * Plugin Name:       Buggy Plugin
 * Plugin URI:        https://octahexa.com
 * Description:       A deliberately buggy plugin for assessment purposes.
 * Version:           1.0.2
 * Author:            Octahexa
 * Author URI:        https://octahexa.com
 * License:           GPL2
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Trigger a runtime fatal error.
add_action('init', 'buggy_function');

function buggy_function() {
    echo '';

    // Call to an undefined function, causing a runtime fatal error.
    undefined_function_call(); // This function does not exist and will trigger a critical error.
}
