<?php
/**  
 * Remove Defaults
 * @package leesaar-theme
 * @author Lisa Richards (LeeSaaR)
 * @license https://www.gnu.org/licenses/gpl-2.0.html
*/

// prevent direct access
if (!defined('ABSPATH')) exit;

// ADMIN MENU
function remove_default_post_type() {
    remove_menu_page('edit.php');
}

add_action('admin_menu', 'remove_default_post_type');

// MENU BAR
function remove_default_post_type_menu_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node('new-post');
}

add_action('admin_bar_menu', 'remove_default_post_type_menu_bar', 999);

// QUICK DRAFT WIDGET
function remove_draft_widget() {
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
}

add_action('wp_dashboard_setup', 'remove_draft_widget', 999);

// COMMENTS LINKS ADMIN BAR
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
     
    if ($pagenow === 'edit-comments.php') {
        wp_safe_redirect(admin_url());
        exit;
    }
 
    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
 
    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});


add_action( 'wp_before_admin_bar_render', function() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu( 'comments' );
}, 999 );