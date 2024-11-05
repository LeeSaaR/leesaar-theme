<?php 
/**  
 * 404 Template File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

get_header();
?>
<div class="four-o-four-container">
    <div class="four-o-four-title">
        <h1>404</h1>
    </div>
    <div class="four-o-four-text">
        <p>Ops! Etwas ist schief gelaufen.</p>
    </div>
    <div class="four-o-four-home">
        <a href="<?php echo esc_url(home_url());?>"><i class="fa-solid fa-house"></i></a>
    </div>
</div>      
<?php
get_footer();