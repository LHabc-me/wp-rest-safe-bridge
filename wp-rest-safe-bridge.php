<?php
/**
 * Plugin Name: REST Safe Bridge
 * Plugin URI: https://lhabc.me/
 * Description: Apply safe bypass only to WordPress core REST content endpoints (/wp-json/wp/v2/*), keeping other namespaces untouched.
 * Version: 1.0.0
 * Author: Alfred
 * License: GPL-2.0+
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('plugins_loaded', function () {
    $uri = isset($_SERVER['REQUEST_URI']) ? (string) $_SERVER['REQUEST_URI'] : '';

    // Narrow scope: only WordPress core content REST endpoints
    // Examples: /wp-json/wp/v2/posts, /wp-json/wp/v2/pages, /wp-json/wp/v2/media
    $is_wp_v2 = (strpos($uri, '/wp-json/wp/v2/') !== false);

    if (!$is_wp_v2) {
        return;
    }

    // 0) Force default theme only for wp/v2 REST requests (frontend unchanged)
    add_filter('pre_option_template', function ($pre) {
        return 'twentytwentyfour';
    }, 1);

    add_filter('pre_option_stylesheet', function ($pre) {
        return 'twentytwentyfour';
    }, 1);

    // 1) Bypass theme captcha/authenticate filters in wp/v2 REST context
    remove_filter('authenticate', 'CAPTCHA_CHECK', 20);
    remove_filter('authenticate', 'checkVaptchaAction', 20);
    remove_filter('authenticate', 'verify_turnstile', 20);

    // 2) Short-circuit heavy option loading in wp/v2 REST context
    add_filter('pre_option_iro_options', function ($pre) {
        return [];
    }, 1);
}, 99);
