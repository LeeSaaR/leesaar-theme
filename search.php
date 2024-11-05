<?php 
/**  
 * Template Name: Search
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

get_header();
get_template_part('inc/parts/template-link-structure');
?>
<div class="archive-title-container">
    <h1 class="search-title">Suchergebnisse: <?php echo get_search_query(); ?></h1>
</div>
<div class="search-container">
    <?php get_search_form(); ?>
</div>
<?php
get_template_part('inc/parts/template-archives');
get_footer();