<?php 
/**  
 * Tag Template File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;
?>
<article class="archive-container archive-container-no-border-top">
    <?php if (have_posts()): while(have_posts()): the_post();?>
        <?php get_template_part('inc/parts/template-post-item'); ?>
    <?php endwhile; endif;?>
</article>

<div class="pagination-container">
    <?php
    global $wp_query;
        $big = 99999999;
        echo paginate_links(
            array(
                'base' => str_replace( $big, '%#%', get_pagenum_link( $big )),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged')),
                'prev_next' => true,
                'prev_text' => '&lt;',
                'next_text' => '&gt;',
                'total' => $wp_query->max_num_pages
            )
        ); 
    ?>
</div>
<?php
get_footer();