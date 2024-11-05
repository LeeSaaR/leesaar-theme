<?php 
/**  
 * Template Name: Search Form
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;
?>
<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url('/') );?>" class="input-group" >
    <div class="input-group">
        <input type="search" class="form-control" placeholder="Search" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() );?>"/>
        <input type="submit" class="search-submit-button" id="search-submit" value="Search"/>
    </div>
</form>