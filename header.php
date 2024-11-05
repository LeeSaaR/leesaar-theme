<?php 
/**  
 * Header Template File
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

get_template_part('inc/function/function-set-cookies');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"> 
        <?php wp_head(); ?>
    </head>
    <body id="site-container" <?php body_class(); ?>>
        <header id="site-start" role="banner">
            <div class="header-container">
                <div class="header-logo">
                    <a href="<?php echo esc_url(home_url('/'));?>" title="<?php echo $website_name;?>">
                    <?php if (has_custom_logo()):?>
                        <img src="<?php echo esc_url( $custom_logo_url ); ?>" alt="Logo">
                    <?php else:?>
                        <h1 class="header-no-logo"><?php echo $website_name; ?></h1>
                    <?php endif;?>
                    </a>
                </div>
                <div class="header-menu-container fade-out">
                    <nav class="primary-navigation">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'header',
                            )); 
                        ?>
                    </nav>
                </div>
            </div>
            <div class="menu-button button-unchecked">
                <div class="menu-button-bars">
                    <span class="menu-button-bar"></span>
                    <span class="menu-button-bar"></span>
                    <span class="menu-button-bar"></span>
                </div>
            </div>
        </header>
        <div class="main-container"> 
            <div class="content-container">