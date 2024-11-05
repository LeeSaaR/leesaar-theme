<?php 
/**  
 * Style File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

header("Content-type: text/css");
header("Cache-Control: max-age=2592000");
require_once('../../../wp-config.php');

// prevent direct access
if (!defined('ABSPATH')) exit;

$color_main = esc_attr(get_option('lsr_style_color_main'));
$color_body = esc_attr(get_option('lsr_style_color_body'));
$color_menu_item = esc_attr(get_option('lsr_style_menu_item'));
$color_menu_item_hover = esc_attr(get_option('lsr_style_menu_item_hover'));
$color_menu_item_back_1 = esc_attr(get_option('lsr_style_menu_item_back_1'));
$color_menu_item_back_2 = esc_attr(get_option('lsr_style_menu_item_back_2'));
$color_paragraph = esc_attr(get_option('lsr_style_color_paragraph'));
$color_header_title = esc_attr(get_option('lsr_style_color_header_title'));
$color_header_big = esc_attr(get_option('lsr_style_color_header_big'));
$color_header_small = esc_attr(get_option('lsr_style_color_header_small'));
$color_cookie_button = esc_attr(get_option('lsr_style_color_cookie_button'));
$color_cookie_button_text = esc_attr(get_option('lsr_style_color_cookie_button_text'));
?>
/* ROOT */
:root {
    --color-main: <?php echo $color_main; ?>;
    --color-body: <?php echo $color_body; ?>;
    --color-menu-item-bg-1: <?php echo $color_menu_item_back_1; ?>;
    --color-menu-item-bg-2: <?php echo $color_menu_item_back_2; ?>;
    
    --color-menu-item: <?php echo $color_menu_item; ?>;
    --color-menu-item-hover: <?php echo $color_menu_item_hover; ?>;
    --link-structure-color: #707070;
    --link-structure-color-hover: #303030;
    --link-structure-seperator: #a0a0a0;
    --color-paragraph: <?php echo $color_paragraph; ?>;

    --color-header-title: <?php echo $color_header_title; ?>;
    --color-header-big: <?php echo $color_header_big; ?>;
    --color-header-small: <?php echo $color_header_small; ?>;

    --color-cookie-banner-button: <?php echo $color_cookie_button; ?>;
    --color-cookie-banner-button-text: <?php echo $color_cookie_button_text; ?>;

    --in-text-link: <?php echo $color_cookie_button; ?>;
    --in-text-link-hover: <?php echo $color_menu_item; ?>;
    
    --link-structure-font-size: 80%;
    
    --color-notes: #d0c0e7;
    --color-notes-background: #fcfcff;

    --mar-s: 8px;
    --mar-m: 16px;
    --mar-l: 32px;
    --mar-xl: 64px;
    --mar-xxl: 128px;


    --header-height: 50px;
    --header-menu-item-width: 120px;
    --content-width: 760px;
    --max-device-width: 780px;

    --color-image-link-overlay: white;

    --color-card-container: #fcfcfc;
    --color-card-container-hover: #fff;
    --color-box-shadow: rgba(0,0,0,0.17);

    /* archive */
    --archive-post-border-radius: 16px;
    --color-page-numbers: #a0a0a0;
}