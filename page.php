<?php 
/**  
 * Page Template File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

global $leesaar_link_pages_args;

get_header();
get_template_part('inc/parts/template-featured-image');
get_template_part('inc/parts/template-link-structure');
get_template_part('inc/parts/template-page-title');
if(have_posts()): while(have_posts()): the_post();
    the_content();
    wp_link_pages($leesaar_link_pages_args);
endwhile; endif;
get_footer();