<?php
/**  
 * Functions Pagination File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

function wp_link_pages_args_prevnext_add($args)
{
    // Custom previous next links from Stack Overflow
    global $page, $numpages, $more, $pagenow;

    if ($args['next_or_number'] !== 'next_and_number') 
        return $args; # exit early

    $args['next_or_number'] = 'number'; # keep numbering for the main part
    if (!$more)
        return $args; # exit early

    if ($page - 1) # there is a previous page
        $args['before'] .= _wp_link_page($page-1)
            . $args['link_before']. $args['previouspagelink'] . $args['link_after'] . '</a>'
        ;

    if ($page < $numpages) # there is a next page
        $args['after'] = _wp_link_page($page+1)
            . $args['link_before'] . ' ' . $args['nextpagelink'] . $args['link_after'] . '</a>'
            . $args['after']
        ;

    return $args;
}

add_filter('wp_link_pages_args', 'wp_link_pages_args_prevnext_add');