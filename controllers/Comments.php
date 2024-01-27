<?php

namespace SDSS;

class Comments
{

    public static function disableComments()
    {
        // Actions
        add_action('admin_init', [self::class, 'redirectCommentsPage']); // Redirect any user trying to access comments page
        add_action('admin_init', [self::class, 'disableCommentsTrackbacksSupport']); // Redirect any user trying to access comments page
        add_action('admin_init', [self::class, 'removeCommentsMetabox']); // Remove comments metabox from dashboard
        add_action('admin_menu', [self::class, 'removeCommentsMenuPage']); // Remove comments page in menu
        add_action('init', [self::class, 'removeCommentsWpAdminBar']); // Remove comments links from admin bar
        // Filters
        add_filter('comments_open', '__return_false', 20, 2); // Close comments on the front-end
        add_filter('pings_open', '__return_false', 20, 2);
        add_filter('comments_array', '__return_empty_array', 10, 2); // Hide existing comments
    }
    
    public static function redirectCommentsPage() {
        global $pagenow;
        if ($pagenow === 'edit-comments.php') {
            wp_redirect(admin_url());
            exit;
        }
    }
    
    public static function disableCommentsTrackbacksSupport() {
        foreach (get_post_types() as $post_type) {
            if (post_type_supports($post_type, 'comments')) {
                remove_post_type_support($post_type, 'comments');
                remove_post_type_support($post_type, 'trackbacks');
            }
        }
    }

    public static function removeCommentsMetabox() {
        remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
    }

    public static function removeCommentsMenuPage() {
        remove_menu_page('edit-comments.php');
    }

    public static function removeCommentsWpAdminBar() {
        if (is_admin_bar_showing()) {
            remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
        }
    }

}