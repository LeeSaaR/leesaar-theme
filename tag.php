<?php 
/**  
 * Tag Template File
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
    <h1 class="search-title">Tag: <?php echo single_tag_title(); ?></h1>
</div>
<?php
get_template_part('inc/parts/template-archives');
get_footer();