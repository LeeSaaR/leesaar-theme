<?php
/**  
 * Functions Styles File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

function leesaar_load_styles() {
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'fontawsome',
        get_template_directory_uri() .'/external/fontawesome-free-6.5.2-web/css/all.min.css',
        array(),
        '6.5.2',
        'all'
    );

    wp_enqueue_style(
        'main-stylesheet',
        get_template_directory_uri() . '/style.css',
        array('fontawsome'),
        $theme_version,
        'all'
    );

    wp_enqueue_style(
        'main-stylesheet-php',
        get_template_directory_uri() . '/style.php',
        array('main-stylesheet'),
        $theme_version,
        'all'
    );

    wp_enqueue_style(
        'main-stylesheet-main',
        get_template_directory_uri() . '/style_main.css',
        array('main-stylesheet-php'),
        $theme_version,
        'all'
    );

    wp_enqueue_style(
        'cookie-banner-stylesheet',
        get_template_directory_uri() . '/assets/css/cookie-banner.css',
        array('main-stylesheet-main'),
        $theme_version,
        'all'
    );

    wp_enqueue_style(
        'navmenu-stylesheet',
        get_template_directory_uri() . '/assets/css/navmenu.css',
        array('main-stylesheet-main'),
        $theme_version,
        'all'
    );

    wp_enqueue_style(
        'footer-stylesheet',
        get_template_directory_uri() . '/assets/css/footer.css',
        array('main-stylesheet-main'),
        $theme_version,
        'all'
    );

    wp_enqueue_style(
        'archive-stylesheet',
        get_template_directory_uri() . '/assets/css/archive.css',
        array('main-stylesheet-main'),
        $theme_version,
        'all'
    );

    wp_enqueue_style(
        'search-stylesheet',
        get_template_directory_uri() . '/assets/css/search.css',
        array('main-stylesheet-main'),
        $theme_version,
        'all'
    );

    wp_enqueue_style(
        'leesaar-blocks-stylesheet',
        get_template_directory_uri() . '/assets/css/leesaar-blocks.css',
        array('main-stylesheet-main'),
        $theme_version,
        'all'
    );

    wp_enqueue_style(
        'four-o-four-stylesheet',
        get_template_directory_uri() . '/assets/css/four-o-four.css',
        array('main-stylesheet-main'),
        $theme_version,
        'all'
    );

    wp_enqueue_style(
        'highlight-js-style',
        get_template_directory_uri() . '/external/highlight-js-11.9.0/hybrid.min.css',
        array(),
        '11.9.0',
        'all'
    );
}

add_action('wp_enqueue_scripts', 'leesaar_load_styles');