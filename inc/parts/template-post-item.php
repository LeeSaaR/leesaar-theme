<?php 
/**  
 * Template Part File: Post Item
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

$featured_image_url = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'medium');
?>
<article class="archive-post-container">
    <a class="post-link" href="<?php echo get_the_permalink(); ?>">
        <img class="post-thumb" src="<?php echo $featured_image_url[0] ?>" alt="Post Featured Image">
        <div class="post-name"><h2><?php the_title(); ?></h2></div>
        <?php if (get_the_category()):
        $category_name = get_the_category()[0]->name;
        ?>
        <div class="post-category"><span>#</span><span><?php echo $category_name; ?></span></div>
        <?php endif;?>
        <div class="post-excerpt"><?php the_excerpt(); ?></div>
    </a>
</article>