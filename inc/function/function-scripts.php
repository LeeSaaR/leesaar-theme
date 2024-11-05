<?php
/**  
 * Functions Scripts File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

function leesaar_load_scripts() {
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_script(
        'highlight-js-script',
        get_template_directory_uri() .'/external/highlight-js-11.9.0/highlight.min.js',
        array('jquery'),
        '11.9.0',
        true
    );
    wp_enqueue_script(
        'cookie-banner-js',
        get_template_directory_uri() . '/assets/js/cookie-banner.js',
        array('jquery', 'jquery-cookie-js'),
        $theme_version,
        true
    );

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array('cookie-banner-js'),
        $theme_version,
        true
    );

    wp_enqueue_script(
        'nav-menu-js',
        get_template_directory_uri() . '/assets/js/nav-menu.js',
        array('main-js'),
        $theme_version,
        true
    );

    wp_enqueue_script(
        'slide-show-js',
        get_template_directory_uri() . '/assets/js/slide-show.js',
        array('nav-menu-js'),
        $theme_version,
        true
    );

    wp_enqueue_script(
        'faq-item-js',
        get_template_directory_uri() . '/assets/js/faq-item.js',
        array('nav-menu-js'),
        $theme_version,
        true
    );

    wp_enqueue_script(
        'jquery-cookie-js',
        get_template_directory_uri() . '/external/jquery-cookie-js/jquery-cookie.js',
        array('jquery'),
        $theme_version,
        true
    );
}

add_action('wp_enqueue_scripts', 'leesaar_load_scripts');