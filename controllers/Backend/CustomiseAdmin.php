<?php

namespace SuperBuilder\Backend;

class CustomiseAdmin
{
    
    public static function classInit() {
        add_action('init', function () {
            if(!current_user_can('administrator')) {
                add_filter('acf/settings/show_admin', '__return_false'); // Hide the ACF menu
                remove_all_actions('admin_notices'); // Hide admin notifications
                add_action('admin_menu', [self::class, 'removeNonAdministratorMenus']); // Remove menus not needed by non-admins
            }
        });
        add_action( 'init', [self::class, 'disableWpEmojis'] ); // Disable WP emojis
        add_action( 'admin_init', [self::class, 'limitPageRevisions'] ); // Limit the number of revisions for pages (set in Builder Settings)
        add_filter( 'tiny_mce_plugins', [self::class, 'disableEmojiconsTinyMce'] ); // Disable TinyMCE emojis
    }


    public static function removeNonAdministratorMenus() {
        remove_menu_page('index.php');
        remove_menu_page('options-general.php');
        remove_menu_page('tools.php');
        remove_menu_page('users.php');
    }
    
    public static function disableWpEmojis() {
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_filter('the_content_feed', 'wp_staticize_emoji');
        remove_filter('comment_text_rss', 'wp_staticize_emoji');
        remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
        add_filter('emoji_svg_url', '__return_false');
    }
    
    public static function disableEmojiconsTinyMce($plugins) {
        if (is_array($plugins)) {
            return array_diff($plugins, ['wpemoji']);
        }
        return array();
    }

    public static function limitPageRevisions() {
        $max_page_revisions = get_field('max_page_revisions', 'options');

        if($max_page_revisions) {
            if (post_type_supports('page', 'revisions')) {
                add_filter('wp_revisions_to_keep', function ($num, $post) use ($max_page_revisions) {
                    if ($post->post_type === 'page') {
                        return $max_page_revisions;
                    }
                    return $num;
                }, 10, 2);
            }
        }
    }
    
}