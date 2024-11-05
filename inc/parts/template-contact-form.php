<?php 
/**  
 * Template Contact Form
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

// TODO: FINISH CONTACT FORM
?>
<form role="search" method="post" id="contact-form" action="" class="contact-input-group" >
    <div class="contact-input-group">
        <div class="contact-input-field">
            <label class="contact-label" for="contact-form-email">Email</label>
            <input type="email" class="contact-text-edit" name="Email" id="contact-form-email" value=""/>
        </div>
        <div class="contact-input-field">
            <label class="contact-label" for="contact-form-name">Name</label>
            <input type="text" class="contact-text-edit" name="Name" id="contact-form-name" value=""/>
        </div>
        <div class="contact-input-field contact-input-field-name-last">
            <label class="contact-label" for="contact-form-namelast">Nachname</label>
            <input type="text" class="contact-text-edit" name="Nachname" id="contact-form-namelast" value=""/>
        </div>
        <div class="contact-input-field">
            <label class="contact-label" for="contact-form-subject">Betreff</label>
            <input type="email" class="contact-text-edit" name="Email" id="contact-form-subject" value=""/>
        </div>
        <div class="contact-input-field">
            <label class="contact-label" for="contact-form-message">Nachricht</label>
            <textarea class="contact-text-area" name="Message" id="contact-form-message" rows="6"></textarea>
        </div>
        <div class="contact-input-field-submit">
            <input type="submit" class="contact-submit-button" id="contact-form-submit" value="Senden"/>
        </div>
    </div>
</form>