<?php 
/**  
 * Footer Template File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

if (has_custom_logo()) {
    $custom_logo_id   = get_theme_mod('custom_logo');
    $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id, 'full');
    $custom_logo_url  = $custom_logo_data[0];
}
$website_name = esc_attr( get_bloginfo('name'));
?>
                <div class="button-page-start-container">
                    <div class="button-page-start"><i class="fa-solid fa-arrow-up"></i></div>
                </div>
            </div>
        </div>
        <footer class="site-footer">
            <div class="footer-container">
                <div class="footer-social-media-container">
                    <nav class="footer-social-media-navigation">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'social',
                        )); 
                        ?>
                    </nav>
                </div>
                <div class="footer-navigation-container">
                    <nav class="footer-navigation">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                        )); 
                        ?>
                    </nav>
                </div>
                <div class="footer-copyright-notice-container">
                    <div class="footer-logo">
                        <a title="LeeSaaR" href="<?php echo esc_url(home_url('/'))?>">
                        <?php if (has_custom_logo()):?>
                            <img src="<?php echo esc_url( $custom_logo_url ); ?>" alt="Logo">
                        <?php else:?>
                            <h1 class="footer-no-logo"><?php echo $website_name; ?></h1>
                        <?php endif;?>
                        </a>
                    </div>
                    <div class="footer-copyright-container">
                        <p class="footer-copyright-notice"><?php lsr_get_copyright_notice(); ?></p>
                    </div>
                </div>
            </div>
        </footer>
<?php
get_template_part('inc/parts/template-cookie-display');
wp_footer();
?>
        <script>hljs.highlightAll();</script>
    </body>
</html> 