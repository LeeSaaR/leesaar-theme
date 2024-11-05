<?php 
/**  
 * Template Part File: Featured Image
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

    $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' );

if($featured_image):?>
    <img class="featured-image" src="<?php echo $featured_image[0]; ?>" alt="Featured Image">
<?php else: ?>
    <div class="no-featured-image"></div>
<?php endif;