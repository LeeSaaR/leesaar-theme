<?php 
/**  
 * Front Page Template File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

get_header();
get_template_part('inc/parts/template-featured-image');
get_template_part('inc/parts/template-link-structure');
get_template_part('inc/parts/template-page-title');
the_content();
get_footer();