<?php
/**  
 * Functions Global Variables File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

function leesaar_theme_register_global_vars() {
    global $leesaar_link_pages_args;
    $leesaar_link_pages_args = array(
        'before'           => '<div class="page-links"><span class="page-links-title"></span>',
        'after'            => '</div>',
        'link_before'      => '<span>',
        'link_after'       => '</span>',
        'pagelink'         => '%',
        'next_or_number'   => 'next_and_number',
        'nextpagelink'     => '&#707',
        'previouspagelink' => '&#706',
    );
}

add_action('after_setup_theme', 'leesaar_theme_register_global_vars');