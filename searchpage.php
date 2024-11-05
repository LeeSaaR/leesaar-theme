<?php 
/**  
 * Template Name: Search Page
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

$categories = get_categories();
$tags       = get_tags();

get_header();
get_template_part('inc/parts/template-featured-image');
get_template_part('inc/parts/template-link-structure');
get_template_part('inc/parts/template-page-title');
?>
<div class="search-container">
    <?php get_search_form(); ?>
</div>
<div class="search-terms-container">
    <h4>Archive</h4>
    <div class="search-terms-section">
    <?php 
        global $leesaar_custom_post_type_names; 
        global $leesaar_custom_post_type_option_names; 
        foreach ($leesaar_custom_post_type_names as $post_type => $post_type_name) {
            if (esc_attr(get_option($leesaar_custom_post_type_option_names[$post_type])) == '0') {
                echo '<a href="'.get_post_type_archive_link($post_type).'">'.$post_type_name.'</a>';
            }
        }
    ?>
    </div>
</div>
<?php
get_footer(); 