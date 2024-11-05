<?php
/**  
 * Cookie Banner Template File
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

$banner_title = esc_attr(get_option('lsr_cookie_banner_title'));
$banner_text = esc_attr(get_option('lsr_cookie_banner_text'));
$banner_info_text = esc_attr(get_option('lsr_cookie_banner_info_text'));
$legal_notice_slug = esc_attr(get_option('lsr_legal_notice_page'));
$cookie_notice_slug = esc_attr(get_option('lsr_cookie_notice_page'));
$data_privacy_slug = esc_attr(get_option('lsr_data_privacy_page'));
?>
<div class="cookie-banner-dimmer" visible="false">
        <div class="cookie-banner">
            <div class="cookie-banner-top">
                <div class="cookie-banner-title">
                    <?php echo $banner_title; ?>
                </div>
                <div class="cookie-banner-btn-close">
                    x
                </div>
            </div>
            <div class="cookie-banner-text" visible="visible">
                <?php echo $banner_text; ?>
            </div>
            <div class="cookie-banner-settings" visible="hidden">
                <?php echo nl2br(stripcslashes($banner_info_text));?>
            </div>
            <div class="cookie-banner-buttons">
                <form class="cookie-buttons" action="" method="POST">
                    <input id="input-accept-cookies" value="true" name="accept_cookie" style="display: none;">
                    <button class="btn-cookie-accept" type="submit">Akzeptieren</button>
                </form>
                <form class="cookie-buttons" action="" method="POST">
                    <input id="input-decline-cookies" value="false" name="decline_cookie" style="display: none;">
                    <button class="btn-cookie-decline" type="submit">Ablehnen</button>
                </form>
                <button class="btn-cookie-settings" visible="visible">Cookie Informationen</button>
                <button class="btn-cookie-back" visible="hidden">zurück</button>
            </div>
            <div class="cookie-banner-footer">
                <a class="cookie-banner-link" href="<?php echo site_url() . '/' . $data_privacy_slug ?>">Datenschutz</a>
                <a class="cookie-banner-link" href="<?php echo site_url() . '/' . $cookie_notice_slug ?>">Cookie-Richtlinie</a>
                <a class="cookie-banner-link" href="<?php echo site_url() . '/' . $legal_notice_slug ?>">Impressum</a>
            </div>
        </div>
    </div>
    <div class="cookie-banner-btn-open">Cookies verwalten</div>