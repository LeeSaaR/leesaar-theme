<?php
/**  
 * Functions Set Cookies File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

if ( !isset($_COOKIE['user_accepted_cookies']) ) {
    setcookie("user_accepted_cookies", "false", time() + 604800, "/");
    setcookie("user_made_cookie_selection", "false", time() + 604800, "/");
    header("Refresh:0");
}

if (!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["accept_cookie"])) {
        setcookie("user_accepted_cookies", "true", time() + 604800, "/");
        setcookie("user_made_cookie_selection", "true", time() + 604800, "/");
        header("Refresh:0");
    }
    if (isset($_POST["decline_cookie"])) {
        setcookie("user_accepted_cookies", "false", time() + 604800, "/");
        setcookie("user_made_cookie_selection", "true", time() + 604800, "/");
        header("Refresh:0");
    }
}