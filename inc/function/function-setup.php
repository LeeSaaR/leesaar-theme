<?php
/**  
 * Functions Setup File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

function leesaar_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height' => 480,
        'width' => 480,
    ));
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(150, 150, true);
    
    add_theme_support('automatic-feed-links');
    
    register_nav_menus(array(
        'header' => 'Header Menu',
        'footer' => 'Footer Menu',
        'social' => 'Social Media Menu',
    ));
}

add_action('after_setup_theme', 'leesaar_theme_support');