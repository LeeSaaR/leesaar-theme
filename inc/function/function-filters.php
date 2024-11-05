<?php
/**  
 * Functions Filters File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

// enable custom post type for category.php
function lsr_category_filter($query) {
    if (!is_admin() && $query->is_main_query()) {
        if ($query->is_category) {
            $query->set('post_type', array(
                'projects',
            ));
        }
    }
}

add_action('pre_get_posts', 'lsr_category_filter');

// enable custom post type for category.php
function lsr_tag_filter($query) {
    if (!is_admin() && $query->is_main_query()) {
        if ($query->is_tag) {
            $query->set('post_type', array(
                'projects',
            ));
        }
    }
}

add_action('pre_get_posts', 'lsr_tag_filter');


// enable custom post type for search.php
function lsr_search_filter($query) {
    if (!is_admin() && $query->is_main_query()) {
        if ($query->is_searcg) {
            $query->set('post_type', array(
                'projects',
            ));
        }
    }
}

add_action('pre_get_posts', 'lsr_search_filter');

function lsr_custom_excerpt_length( $length ) {
    $length = 20;
    return $length;
}

add_filter('excerpt_length', 'lsr_custom_excerpt_length');