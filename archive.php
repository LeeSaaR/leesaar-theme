<?php 
/**  
 * Archive Template File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

get_header(); 
$post_type      = get_post_type();
$post_type_data = get_post_type_object( $post_type );
$post_type_slug = $post_type_data->rewrite['slug'];
$cpt_archive_info_page = get_page_by_path($post_type_slug.'-info');
$featured_image_archive_info = wp_get_attachment_image_src(get_post_thumbnail_id($cpt_archive_info_page));

if ($featured_image_archive_info) {
    echo '<img class="featured-image" src="'.$featured_image_archive_info[0].'"/>';
}
get_template_part('inc/parts/template-link-structure');
?>
<div class="archive-title-container">
    <h1 class="archive-title"><?php echo $post_type_data->description; ?></h1>
</div>
<?php
if ($content = $cpt_archive_info_page->post_content) {
    echo $content;
}

get_template_part('inc/parts/template-archives');
get_footer();