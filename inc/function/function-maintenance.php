<?php
/**  
 * Functions Maintenance File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

function lsr_maintenance_mode() {
    // logout all non-admins
    if (!current_user_can( 'administrator' )) {
        wp_logout();
    }

    // Mode Selection
    $maintenance_mode_type = get_option('lsr_maintenance_type'); // TODO: change this via Plugin

    if ('0' == $maintenance_mode_type) {
        wp_die(
            '<h1 class="title">Maintenance</h1>'.
            '<h3 class="message">Please come back later.</h3>', 
            'LeeSaaR' 
        );
        
    }
    else if ('1' == $maintenance_mode_type) {
        wp_die(
            '<h1 class="title">Coming Soon</h1>'.
            '<h3 class="message">LeeSaaR\'s Development Portfolio</h3>', 
            'LeeSaaR' 
        ); 
    }
}

function is_wp_login() {
    if(isset( $GLOBALS['pagenow']) && 'wp-login.php' === $GLOBALS['pagenow']) {
        return true;
    }
    return false;
}

if (false === is_user_logged_in() && false === is_wp_login()) {
    add_action('get_header', 'lsr_maintenance_mode');
}
else {
    if (!current_user_can( 'administrator' )) {
        add_action('admin_init', 'lsr_maintenance_mode');
    }
}

function lsr_custom_wp_die_handler($message, $title = '', $args = array() ) {
    $defaults = array('response' => 500);
    $r = wp_parse_args($args, $defaults);

    if ( function_exists('is_wp_error') && is_wp_error( $message )) {
        $errors = $message->get_error_messages();
        switch ( count($errors) ) {
            case 0:
                $message = '';
                break;
            
            case 1:
                $message = $errors[0];
                break;

            default:
                $message = "<ul\n\t\t<li>>" . join("</li>\n\t\t", $errors) . "</li>\n\t</ul>";
                break;
        }
    }

    $maintenance_mode_type = get_option('lsr_maintenance_type');

    if ('0' == $maintenance_mode_type) {
        require_once get_theme_file_path('inc/parts/template-maintenance.php');
    }
    else if ('1' == $maintenance_mode_type) {
        require_once get_theme_file_path('inc/parts/template-coming-soon.php');
    }

    die();
}

add_filter( 'wp_die_handler', function($handler){
    return ! is_admin() ? 'lsr_custom_wp_die_handler' : $handler;
}, 10 );