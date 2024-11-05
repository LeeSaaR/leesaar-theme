<?php 
/**  
 * Template Part File: Maintenance
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

if (!headers_sent()) {
    status_header( $r['response'] );
    nocache_headers();
    header('Content-Type: text/html; charset=utf-8');
}
?>
<!DOCTYPE html>
<html lang="de-DE">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="<?php echo esc_url(get_site_icon_url()); ?>">
		<?php
		if ( function_exists( 'wp_robots_no_robots' ) ) {
			wp_robots_no_robots( array( 'noindex' ) );
		}
		?>
		<title><?php echo $title ?></title>
		<style type="text/css">
            @font-face {
                font-family: 'Ubuntu-R';
                src: url(<?php echo get_template_directory_uri() . '/assets/fonts/woff2/Ubuntu-Regular.woff2' ?>) format('woff2');
            }

            @font-face {
                font-family: 'Ubuntu-B';
                src: url(<?php echo get_template_directory_uri() . '/assets/fonts/woff2/Ubuntu-Bold.woff2' ?>) format('woff2');
            }
            
            @font-face {
                font-family: 'Ubuntu-L';
                src: url(<?php echo get_template_directory_uri() . '/assets/fonts/woff2/Ubuntu-L.woff2'?>) format('woff2');
            }

            @font-face {
                font-family: 'Ubuntu-Th';
                src: url(<?php echo get_template_directory_uri() . '/assets/fonts/woff2/Ubuntu-Th.woff2' ?>) format('woff2');
            }

            html {
                overflow: hidden;
            }
            body {
                overflow: hidden;
                font-family: 'Ubuntu-L';
                color: #ffffff;
                display: flex;
                justify-content: center;
                align-items: start;
                text-align: center;
                padding: 0;
                margin: 0;
                width: 100%;
                height: 100%;
                background-color: black;
            }
            img {
                object-fit: cover;
            }
            .container {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: calc(100% * 0.25);
                left: 10%;
                width: 80%;
                height: 50%;
            }
            h1 {
                font-family: 'Ubuntu-B';
                width: 100%;
                font-size: 250%;
            }
            h2, h3 {
                font-family: 'Ubuntu-R';
                width: 100%;
                font-size: 150%;
            }
            p {
                font-family: 'Ubuntu-Th';
                width: 100%;
                text-align: center;
                font-size: 100%;
            }
            .message {
                font-size: 200%;
            }
		</style>
	</head>
	<body id="error-page">
    <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/res/images/coming_soon.jpg' ?>" alt="">
		<div class="container">
            <h1>WARTUNGS&shy;ARBEITEN</h1>
            <h2>leesaar.de wird gerade gewartet.</h2>
            <h3>Was ist leesaar.de?</h3>
            <p>LeeSaaR ist Lisas' Webseite.</p>
            <p>Hier werden Code Projekte und ein bisschen elek&shy;tronische Musik vorgestellt.</p>
		</div>
	</body>
</html>