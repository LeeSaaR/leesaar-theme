<?php
/**  
 * Functions Helper File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

function lsr_get_copyright_notice() {
    echo '&copy; 2024-'.date_i18n('Y').' '.wp_get_theme()->get('Author').'. All Rights Reserved.';
}