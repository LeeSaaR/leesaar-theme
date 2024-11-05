<?php
/**  
 * Functions File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

$leesaar_inc_functions_dir = 'inc/function';

$leesaar_inc_functions = array(
    '/function-setup.php',   
    '/function-scripts.php', 
    '/function-leesaar-settings.php',
    '/function-styles.php',
    '/function-filters.php',    
    '/function-pagination.php',  
    '/function-global-variables.php',  
    '/function-remove-defaults.php',  
    '/function-helper.php',  
);

foreach ($leesaar_inc_functions as $lsr_file) {
    require_once get_theme_file_path($leesaar_inc_functions_dir . $lsr_file);
}

// Maintenance Mode
if ('0' == get_option('lsr_maintenance_active')) {
    require_once get_theme_file_path($leesaar_inc_functions_dir .'/function-maintenance.php');
}