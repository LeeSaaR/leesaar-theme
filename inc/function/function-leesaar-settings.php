<?php
/**  
 * Functions Theme Settings File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

class LeeSaaRSettings {
    private $leesaar_settings_slug = 'leesaar-settings';

    private $leesaar_settings_style_slug = 'leesaar-settings-style';
    private $group_style   = 'lsrsettingsstyle';
    private $section_style = 'lsr_settings_section_style';

    private $group_legal   = 'lsrsettingslegal';
    private $section_legal = 'lsr_settings_section_legal';
    private $leesaar_settings_legal_slug = 'leesaar-settings-legal';

    private $group_maintenance   = 'lsrsettingsmaintenance';
    private $section_maintenance = 'lsr_settings_section_maintenance';
    private $leesaar_settings_maintenance_slug = 'leesaar-settings-maintenance';

    private $group_cookies   = 'lsrsettingscookies';
    private $section_cookies = 'lsr_settings_section_cookies';
    private $leesaar_settings_cookies_slug = 'leesaar-settings-cookies';

    private $group_posttype   = 'lsrsettingsposttype';
    private $section_posttype = 'lsr_settings_section_posttype';
    private $leesaar_settings_posttype_slug = 'leesaar-settings-posttype';

    function __construct() {
        add_action('admin_menu', array($this, 'leesaar_add_admin_menu'));

        add_action('admin_menu', array($this, 'leesaar_add_menu_style'));
        add_action('admin_init', array($this, 'settings_style'));

        add_action('admin_menu', array($this, 'leesaar_add_menu_maintenance'));
        add_action('admin_init', array($this, 'settings_maintenance'));

        add_action('admin_menu', array($this, 'leesaar_add_menu_legal'));
        add_action('admin_init', array($this, 'settings_legal'));

        add_action('admin_menu', array($this, 'leesaar_add_menu_cookies'));
        add_action('admin_init', array($this, 'settings_cookies'));

        add_action('admin_menu', array($this, 'leesaar_add_menu_posttype'));
        add_action('admin_init', array($this, 'settings_posttype'));
    }


    // MAIN MENU SETTINGS
    function leesaar_add_admin_menu() {
        add_menu_page('LeeSaaR Settings', 'LeeSaaR Settings', 'manage_options', $this->leesaar_settings_slug, array($this, 'leesaar_settings_menu'), 'dashicons-admin-generic', 100);
    }

    function leesaar_settings_menu() {
    }

    // COOKIES
    function settings_cookies() {

        add_settings_section($this->section_cookies, null, null, $this->leesaar_settings_cookies_slug);
        
        add_settings_field('lsr_cookie_banner_title', 'Title', array($this, 'cookie_banner_title_text_html'), $this->leesaar_settings_cookies_slug, $this->section_cookies);
        register_setting($this->group_cookies, 'lsr_cookie_banner_title', array('sanitize_callback' => 'sanitize_text_field','default' => 'Datenschutz und Cookies'));

        add_settings_field('lsr_cookie_banner_text', 'Text', array($this, 'cookie_banner_text_html'), $this->leesaar_settings_cookies_slug, $this->section_cookies);
        register_setting($this->group_cookies, 'lsr_cookie_banner_text', array('sanitize_callback' => 'sanitize_text_field','default' => 'Unsere Webseite verwendet Cookies.'));

        add_settings_field('lsr_cookie_banner_info_text', 'Info Text', array($this, 'cookie_banner_info_text_html'), $this->leesaar_settings_cookies_slug, $this->section_cookies);
        register_setting($this->group_cookies, 'lsr_cookie_banner_info_text', array('sanitize_callback' => 'sanitize_text_field','default' => 'Wir nutzen Drittanbieter Dienste, die Cookies setzen.'));
    }

    function leesaar_add_menu_cookies() {
        add_submenu_page($this->leesaar_settings_slug, 'Cookies', 'Cookies', 'manage_options', $this->leesaar_settings_cookies_slug, array($this, 'cookies_page_html'));
    }

    function cookies_page_html() { ?>
        <div class="wrap">
            <h1>LeeSaaR Theme - Cookie Banner</h1>
            <form action="options.php" method="post">
            <?php
                settings_fields($this->group_cookies);
                do_settings_sections($this->leesaar_settings_cookies_slug); 
                submit_button(); 
            ?>
            </form>
        </div>
    <?php }

    function cookie_banner_title_text_html() { ?>
        <input type="text" name="lsr_cookie_banner_title" value="<?php echo esc_attr(get_option('lsr_cookie_banner_title')); ?>">
    <?php }

    function cookie_banner_text_html() { ?>
        <textarea  name="lsr_cookie_banner_text" rows="6" cols="40"><?php echo esc_attr(get_option('lsr_cookie_banner_text')); ?></textarea>
    <?php }

    function cookie_banner_info_text_html() { ?>
        <textarea  name="lsr_cookie_banner_info_text" rows="6" cols="40" ><?php echo esc_attr(get_option('lsr_cookie_banner_info_text')); ?></textarea>
    <?php }

    // MAINTENANCE
    function settings_maintenance() {

        // MAINTENANCE
        add_settings_section($this->section_maintenance, null, null, $this->leesaar_settings_maintenance_slug);
        
        add_settings_field('lsr_maintenance_type', 'Maintenance Type', array($this, 'maintenance_type_combobox_html'), $this->leesaar_settings_maintenance_slug, $this->section_maintenance);
        register_setting($this->group_maintenance, 'lsr_maintenance_type', array('sanitize_callback' => 'sanitize_text_field','default' => '0'));

        add_settings_field('lsr_maintenance_active', 'Maintenance Active', array($this, 'maintenance_active_checkbox_html'), $this->leesaar_settings_maintenance_slug, $this->section_maintenance, array('lsr_setting_name' => 'lsr_maintenance_active'));
        register_setting($this->group_maintenance, 'lsr_maintenance_active', array('sanitize_callback' => 'sanitize_text_field','default' => '0'));
    }

    function leesaar_add_menu_maintenance() {
        add_submenu_page($this->leesaar_settings_slug, 'Maintenance', 'Maintenance', 'manage_options', $this->leesaar_settings_maintenance_slug, array($this, 'maintenance_page_html'));
    }

    function maintenance_page_html() { ?>
        <div class="wrap">
            <h1>LeeSaaR Theme - Maintenance</h1>
            <form action="options.php" method="post">
            <?php
                settings_fields($this->group_maintenance);
                do_settings_sections($this->leesaar_settings_maintenance_slug); 
                submit_button(); 
            ?>
            </form>
        </div>
    <?php }

    function maintenance_type_combobox_html() { ?>
        <select name="lsr_maintenance_type">
            <option value="0" <?php selected(get_option('lsr_maintenance_type'), '0')?> >Maintenance</option>
            <option value="1" <?php selected(get_option('lsr_maintenance_type'), '1')?> >Coming Soon</option>
        </select>
    <?php }

    function maintenance_active_checkbox_html($args) { ?>
        <input type="checkbox" name="<?php echo $args['lsr_setting_name'] ?>" value="0" <?php checked(get_option($args['lsr_setting_name']), '0') ?> >
    <?php }

    // LEGAL PAGES
    function settings_legal() {

        // LEGAL PAGES
        add_settings_section($this->section_legal, null, null, $this->leesaar_settings_legal_slug);

        add_settings_field('lsr_legal_notice_page', 'Impressum', array($this, 'legal_notice_page_html'), $this->leesaar_settings_legal_slug, $this->section_legal);
        register_setting($this->group_legal, 'lsr_legal_notice_page', array('sanitize_callback' => 'sanitize_text_field','default' => ''));

        add_settings_field('lsr_cookie_notice_page', 'Cookie Richtlinie', array($this, 'cookie_notice_page_html'), $this->leesaar_settings_legal_slug, $this->section_legal);
        register_setting($this->group_legal, 'lsr_cookie_notice_page', array('sanitize_callback' => 'sanitize_text_field','default' => ''));

        add_settings_field('lsr_data_privacy_page', 'Datenschutz', array($this, 'data_privacy_page_html'), $this->leesaar_settings_legal_slug, $this->section_legal);
        register_setting($this->group_legal, 'lsr_data_privacy_page', array('sanitize_callback' => 'sanitize_text_field','default' => ''));
    }

    function leesaar_add_menu_legal() {
        add_submenu_page($this->leesaar_settings_slug, 'Legal', 'Legal', 'manage_options', $this->leesaar_settings_legal_slug, array($this, 'legal_page_html'));
    }

    function legal_page_html() { ?>
        <div class="wrap">
            <h1>LeeSaaR Theme - Legal</h1>
            <form action="options.php" method="post">
            <?php
                settings_fields($this->group_legal);
                do_settings_sections($this->leesaar_settings_legal_slug); 
                submit_button(); 
            ?>
            </form>
        </div>
    <?php }

    function legal_notice_page_html() { ?>
        <select name="lsr_legal_notice_page">
            <?php
            $all_pages = get_pages();
            $i = 1;
            ?>
            <option value="" <?php selected(get_option('lsr_legal_notice_page'), ''); ?> ></option>
            <?php
            foreach ($all_pages as $one_page) { ?>
                <option value="<?php echo $one_page->post_name; ?>" <?php selected(get_option('lsr_legal_notice_page'), $one_page->post_name)?> ><?php echo $one_page->post_title; ?></option>
            <?php
                $i++;
            } ?>
        </select>
    <?php }

    function cookie_notice_page_html() { ?>
        <select name="lsr_cookie_notice_page">
            <?php
            $all_pages = get_pages();
            $i = 1;
            ?>
            <option value="" <?php selected(get_option('lsr_cookie_notice_page'), ''); ?> ></option>
            <?php
            foreach ($all_pages as $one_page) { ?>
                <option value="<?php echo $one_page->post_name; ?>" <?php selected(get_option('lsr_cookie_notice_page'), $one_page->post_name)?> ><?php echo $one_page->post_title; ?></option>
            <?php
                $i++;
            } ?>
        </select>
    <?php }

    function data_privacy_page_html() { ?>
        <select name="lsr_data_privacy_page">
            <?php
            $all_pages = get_pages();
            $i = 1;
            ?>
            <option value="" <?php selected(get_option('lsr_data_privacy_page'), ''); ?> ></option>
            <?php
            foreach ($all_pages as $one_page) { ?>
                <option value="<?php echo $one_page->post_name; ?>" <?php selected(get_option('lsr_data_privacy_page'), $one_page->post_name)?> ><?php echo $one_page->post_title; ?></option>
            <?php
                $i++;
            } ?>
        </select>
    <?php }

    // STYLE
    function settings_style() {

        add_settings_section($this->section_style, null, null, $this->leesaar_settings_style_slug);
        
        add_settings_field('lsr_style_color_main', 'Color Main', array($this, 'style_color_main_html'), $this->leesaar_settings_style_slug, $this->section_style);
        register_setting($this->group_style, 'lsr_style_color_main', array('sanitize_callback' => 'sanitize_text_field','default' => '#0d1c3e'));

        add_settings_field('lsr_style_menu_item_back_1', 'Color Main 2', array($this, 'style_menu_item_back_1_html'), $this->leesaar_settings_style_slug, $this->section_style);
        register_setting($this->group_style, 'lsr_style_menu_item_back_1', array('sanitize_callback' => 'sanitize_text_field','default' => '#1f3069'));

        add_settings_field('lsr_style_menu_item_back_2', 'Color Main 3', array($this, 'style_menu_item_back_2_html'), $this->leesaar_settings_style_slug, $this->section_style);
        register_setting($this->group_style, 'lsr_style_menu_item_back_2', array('sanitize_callback' => 'sanitize_text_field','default' => '#1c3a82;'));

        add_settings_field('lsr_style_color_body', 'Color Body', array($this, 'style_color_body_html'), $this->leesaar_settings_style_slug, $this->section_style);
        register_setting($this->group_style, 'lsr_style_color_body', array('sanitize_callback' => 'sanitize_text_field','default' => '#fdfdff;'));

        add_settings_field('lsr_style_menu_item', 'Menu Item Text', array($this, 'style_menu_item_html'), $this->leesaar_settings_style_slug, $this->section_style);
        register_setting($this->group_style, 'lsr_style_menu_item', array('sanitize_callback' => 'sanitize_text_field','default' => '#edb683;'));

        add_settings_field('lsr_style_menu_item_hover', 'Menu Item Text Hover', array($this, 'style_menu_item_hover_html'), $this->leesaar_settings_style_slug, $this->section_style);
        register_setting($this->group_style, 'lsr_style_menu_item_hover', array('sanitize_callback' => 'sanitize_text_field','default' => '#f2cba8'));

        add_settings_field('lsr_style_color_paragraph', 'Color Paragraph', array($this, 'style_color_paragraph_html'), $this->leesaar_settings_style_slug, $this->section_style);
        register_setting($this->group_style, 'lsr_style_color_paragraph', array('sanitize_callback' => 'sanitize_text_field','default' => '#243a6f'));

        add_settings_field('lsr_style_color_header_title', 'Color Header Title', array($this, 'style_color_header_title_html'), $this->leesaar_settings_style_slug, $this->section_style);
        register_setting($this->group_style, 'lsr_style_color_header_title', array('sanitize_callback' => 'sanitize_text_field','default' => '#0d1c3e;'));

        add_settings_field('lsr_style_color_header_big', 'Color Header Big', array($this, 'style_color_header_big_html'), $this->leesaar_settings_style_slug, $this->section_style);
        register_setting($this->group_style, 'lsr_style_color_header_big', array('sanitize_callback' => 'sanitize_text_field','default' => '#304474;'));

        add_settings_field('lsr_style_color_header_small', 'Color Header Small', array($this, 'style_color_header_small_html'), $this->leesaar_settings_style_slug, $this->section_style);
        register_setting($this->group_style, 'lsr_style_color_header_small', array('sanitize_callback' => 'sanitize_text_field','default' => '#546281'));

        add_settings_field('lsr_style_color_cookie_button', 'Cookie Button', array($this, 'style_color_cookie_button_html'), $this->leesaar_settings_style_slug, $this->section_style);
        register_setting($this->group_style, 'lsr_style_color_cookie_button', array('sanitize_callback' => 'sanitize_text_field','default' => '#3861c0'));

        add_settings_field('lsr_style_color_cookie_button_text', 'Cookie Button Text', array($this, 'style_color_cookie_button_text_html'), $this->leesaar_settings_style_slug, $this->section_style);
        register_setting($this->group_style, 'lsr_style_color_cookie_button_text', array('sanitize_callback' => 'sanitize_text_field','default' => '#ffffff'));
    }

    function leesaar_add_menu_style() {
        add_submenu_page($this->leesaar_settings_slug, 'Style', 'Style', 'manage_options', $this->leesaar_settings_style_slug, array($this, 'style_page_html'));
    }

    function style_page_html() { ?>
        <div class="wrap">
            <h1>LeeSaaR Theme - Style</h1>
            <form action="options.php" method="post">
            <?php
                settings_fields($this->group_style);
                do_settings_sections($this->leesaar_settings_style_slug); 
                submit_button(); 
            ?>
            </form>
        </div>
    <?php }

    function style_color_main_html() { ?>
        <input type="color" name="lsr_style_color_main" value="<?php echo esc_attr(get_option('lsr_style_color_main')); ?>">
    <?php }

    function style_color_body_html() { ?>
        <input type="color" name="lsr_style_color_body" value="<?php echo esc_attr(get_option('lsr_style_color_body')); ?>">
    <?php }

    function style_menu_item_html() { ?>
        <input type="color" name="lsr_style_menu_item" value="<?php echo esc_attr(get_option('lsr_style_menu_item')); ?>">
    <?php }

    function style_menu_item_back_1_html() { ?>
        <input type="color" name="lsr_style_menu_item_back_1" value="<?php echo esc_attr(get_option('lsr_style_menu_item_back_1')); ?>">
    <?php }

    function style_menu_item_back_2_html() { ?>
        <input type="color" name="lsr_style_menu_item_back_2" value="<?php echo esc_attr(get_option('lsr_style_menu_item_back_2')); ?>">
    <?php }

    function style_menu_item_hover_html() { ?>
        <input type="color" name="lsr_style_menu_item_hover" value="<?php echo esc_attr(get_option('lsr_style_menu_item_hover')); ?>">
    <?php }

    function style_color_paragraph_html() { ?>
        <input type="color" name="lsr_style_color_paragraph" value="<?php echo esc_attr(get_option('lsr_style_color_paragraph')); ?>">
    <?php }

    function style_color_header_title_html() { ?>
        <input type="color" name="lsr_style_color_header_title" value="<?php echo esc_attr(get_option('lsr_style_color_header_title')); ?>">
    <?php }

    function style_color_header_big_html() { ?>
        <input type="color" name="lsr_style_color_header_big" value="<?php echo esc_attr(get_option('lsr_style_color_header_big')); ?>">
    <?php }

    function style_color_header_small_html() { ?>
        <input type="color" name="lsr_style_color_header_small" value="<?php echo esc_attr(get_option('lsr_style_color_header_small')); ?>">
    <?php }

    function style_color_cookie_button_html() { ?>
        <input type="color" name="lsr_style_color_cookie_button" value="<?php echo esc_attr(get_option('lsr_style_color_cookie_button')); ?>">
    <?php }

    function style_color_cookie_button_text_html() { ?>
        <input type="color" name="lsr_style_color_cookie_button_text" value="<?php echo esc_attr(get_option('lsr_style_color_cookie_button_text')); ?>">
    <?php }

    // POST TYPE
    /**
     * This Variables are used in searchpage.php to display post type in search
    */
    function leesaar_add_menu_posttype() {
        add_submenu_page($this->leesaar_settings_slug, 'Post Types', 'Post Types', 'manage_options', $this->leesaar_settings_posttype_slug, array($this, 'posttype_page_html'));
    }

    function posttype_page_html() { ?>
        <div class="wrap">
            <h1>LeeSaaR Theme - Post Type</h1>
            <form action="options.php" method="post">
            <?php
                settings_fields($this->group_posttype);
                do_settings_sections($this->leesaar_settings_posttype_slug); 
                submit_button(); 
            ?>
            </form>
        </div>
    <?php }

    function settings_posttype() {
        add_settings_section($this->section_posttype, null, null, $this->leesaar_settings_posttype_slug);

        add_settings_field('lsr_cpt_apps', 'Enable Apps', array($this, 'posttype_apps_combobox_html'), $this->leesaar_settings_posttype_slug, $this->section_posttype, array('lsr_setting_name' => 'lsr_cpt_apps'));
        register_setting($this->group_posttype, 'lsr_cpt_apps', array('sanitize_callback' => 'sanitize_text_field','default' => '1'));

        add_settings_field('lsr_cpt_cheatsheets', 'Enable Cheat Sheets', array($this, 'posttype_cheatsheets_combobox_html'), $this->leesaar_settings_posttype_slug, $this->section_posttype, array('lsr_setting_name' => 'lsr_cpt_cheatsheets'));
        register_setting($this->group_posttype, 'lsr_cpt_cheatsheets', array('sanitize_callback' => 'sanitize_text_field','default' => '1'));

        add_settings_field('lsr_cpt_tools', 'Enable Tools', array($this, 'posttype_tools_combobox_html'), $this->leesaar_settings_posttype_slug, $this->section_posttype, array('lsr_setting_name' => 'lsr_cpt_tools'));
        register_setting($this->group_posttype, 'lsr_cpt_tools', array('sanitize_callback' => 'sanitize_text_field','default' => '1'));

        add_settings_field('lsr_cpt_games', 'Enable Games', array($this, 'posttype_games_combobox_html'), $this->leesaar_settings_posttype_slug, $this->section_posttype, array('lsr_setting_name' => 'lsr_cpt_games'));
        register_setting($this->group_posttype, 'lsr_cpt_games', array('sanitize_callback' => 'sanitize_text_field','default' => '1'));

        add_settings_field('lsr_cpt_music', 'Enable Musik', array($this, 'posttype_music_combobox_html'), $this->leesaar_settings_posttype_slug, $this->section_posttype, array('lsr_setting_name' => 'lsr_cpt_music'));
        register_setting($this->group_posttype, 'lsr_cpt_music', array('sanitize_callback' => 'sanitize_text_field','default' => '1'));

        add_settings_field('lsr_cpt_thoughts', 'Enable Thoughts', array($this, 'posttype_thoughts_combobox_html'), $this->leesaar_settings_posttype_slug, $this->section_posttype, array('lsr_setting_name' => 'lsr_cpt_thoughts'));
        register_setting($this->group_posttype, 'lsr_cpt_thoughts', array('sanitize_callback' => 'sanitize_text_field','default' => '1'));
    }

    function posttype_apps_combobox_html($args) { ?>
        <input type="checkbox" name="<?php echo $args['lsr_setting_name'] ?>" value="0" <?php checked(get_option($args['lsr_setting_name']), '0') ?> >
    <?php }

    function posttype_cheatsheets_combobox_html($args) { ?>
        <input type="checkbox" name="<?php echo $args['lsr_setting_name'] ?>" value="0" <?php checked(get_option($args['lsr_setting_name']), '0') ?> >
    <?php }

    function posttype_tools_combobox_html($args) { ?>
        <input type="checkbox" name="<?php echo $args['lsr_setting_name'] ?>" value="0" <?php checked(get_option($args['lsr_setting_name']), '0') ?> >
    <?php }

    function posttype_games_combobox_html($args) { ?>
        <input type="checkbox" name="<?php echo $args['lsr_setting_name'] ?>" value="0" <?php checked(get_option($args['lsr_setting_name']), '0') ?> >
    <?php }

    function posttype_music_combobox_html($args) { ?>
        <input type="checkbox" name="<?php echo $args['lsr_setting_name'] ?>" value="0" <?php checked(get_option($args['lsr_setting_name']), '0') ?> >
    <?php }

    function posttype_thoughts_combobox_html($args) { ?>
        <input type="checkbox" name="<?php echo $args['lsr_setting_name'] ?>" value="0" <?php checked(get_option($args['lsr_setting_name']), '0') ?> >
    <?php }
}

$leesaarSettings = new LeeSaaRSettings();