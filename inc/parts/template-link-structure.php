<?php 
/**  
 * Template Part File: Link Structure
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

$home_url = home_url();
$link_structure_seperator = '<span class="link-structure-seperator">></span>';

// open container
echo '<div class="link-structure-container">';

// home Link
echo '<a href="'.$home_url.'"><i class="fa-solid fa-house"></i></a>';

if (is_page() && !is_front_page()) {
    // page link
    $page_name = get_post_field('post_name', get_post());
    $page_url = $home_url.'/'.$page_name;
    echo $link_structure_seperator;
    echo '<a href="'.$page_url.'">'.get_the_title().'</a>';
}

if (is_category()) {
    // page link
    global $wp;
    $current_url = home_url($wp->request);
    $cat_name = single_cat_title('', false);
    echo $link_structure_seperator;
    echo '<a href="'.$current_url.'">'. $cat_name .'</a>';
}

if (is_tag()) {
    // page link
    global $wp;
    $current_url = home_url($wp->request);
    $tag_name = single_tag_title('', false);
    echo $link_structure_seperator;
    echo '<a href="'.$current_url.'">'. $tag_name .'</a>';
}

if ((is_archive() || is_single()) && (!is_category() && !is_Tag())) {
    // archive link
    $post_type      = get_post_type();
    $post_type_data = get_post_type_object( $post_type );
    $archive_slug   = $post_type_data->rewrite['slug'];
    $archive_url    = $home_url.'/'.$archive_slug;
    $archive_name   = $post_type_data->description;

    echo $link_structure_seperator;
    echo '<a href="'.$archive_url.'">'.$archive_name.'</a>';

    if (is_single()) {
        // single link
        $post_url = get_post_permalink();
        $post_title = get_the_title();
        echo $link_structure_seperator;
        echo '<a href="'.$post_url.'">'.$post_title.'</a>';
    }
}
// close container
echo '</div>';