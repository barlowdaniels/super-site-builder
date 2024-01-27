<?php

namespace SDSS;

use SDSS\Comments;

class SuperAdmin
{
    
    public static function init() {
        add_action('init', function () {
            if(!current_user_can('administrator')) {
                add_filter('acf/settings/show_admin', '__return_false'); // Hide the ACF menu
                remove_all_actions('admin_notices'); // Hide admin notifications
                add_action('admin_menu', [self::class, 'removeNonAdministratorMenus']); // Remove menus not needed by non-admins
            }
        });
        add_action('init', [self::class, 'defineSettingsPages']); // Define Super Site settings pages
        add_action( 'init', [self::class, 'disableWpEmojis'] ); // Disable WP emojis
        add_action( 'admin_init', [self::class, 'limitPageRevisions'] ); // Limit the number of revisions for pages (set in Builder Settings)
        add_filter( 'tiny_mce_plugins', [self::class, 'disableEmojiconsTinyMce'] ); // Disable TinyMCE emojis
        add_action( 'admin_init', [self::class, 'createSiteAdminUserRole'] ); // Create 'Site Admin' role & set capabilities
        add_action( 'admin_init', [self::class, 'convertUnapprovedAdministrators'] ); // Revert unapproved administrators back to site_admin role
        Comments::disableComments(); // Disable WP comments
    }

    public static function defineSettingsPages() {
        if( function_exists('acf_add_options_page') ) {
            acf_add_options_page(array(
                'page_title'    => 'Super Site',
                'menu_title'    => 'Super Site',
                'menu_slug'     => 'super-site',
                'capability'    => 'edit_posts',
                'icon_url'      => 'dashicons-superhero-alt',
                'redirect'      => true
            ));
            acf_add_options_sub_page(array(
                'page_title'    => 'Site Wide Content',
                'menu_title'    => 'Site Wide Content',
                'parent_slug'   => 'super-site',
            ));
            acf_add_options_sub_page(array(
                'page_title'    => 'Super Button',
                'menu_title'    => 'Button',
                'capability'    => 'edit_plugins',
                'parent_slug'   => 'super-site',
            ));
            acf_add_options_sub_page(array(
                'page_title'    => 'Settings',
                'menu_title'    => 'Settings',
                'capability'    => 'edit_plugins',
                'parent_slug'   => 'super-site',
            ));
        }
    }

    public static function removeNonAdministratorMenus() {
        remove_menu_page('index.php');
        remove_menu_page('options-general.php');
        remove_menu_page('tools.php');
        remove_menu_page('users.php');
    }
    
    public static function createSiteAdminUserRole() {
        $role = get_role('site_admin');
        if(!$role) {
            add_role(
                'site_admin',
                __('Site Administrator'),
                [
                    'activate_plugins' => false,
                    'assign_product_terms' => true,
                    'copy_posts' => true,
                    'create_posts' => true,
                    'create_users' => false,
                    'delete_others_pages' => true,
                    'delete_others_posts' => true,
                    'delete_pages' => true,
                    'delete_plugins' => false,
                    'delete_posts' => true,
                    'delete_private_pages' => true,
                    'delete_private_posts' => true,
                    'delete_published_pages' => true,
                    'delete_published_posts' => true,
                    'delete_others_products' => true,
                    'delete_private_products' => true,
                    'delete_product' => true,
                    'delete_product_terms' => true,
                    'delete_products' => true,
                    'delete_published_products' => true,
                    'delete_themes' => false,
                    'delete_users' => false,
                    'edit_dashboard' => false,
                    'edit_others_pages' => true,
                    'edit_others_posts' => true,
                    'edit_pages' => true,
                    'edit_plugins' => false,
                    'edit_posts' => true,
                    'edit_private_pages' => true,
                    'edit_private_posts' => true,
                    'edit_published_pages' => true,
                    'edit_published_posts' => true,
                    'edit_others_products' => true,
                    'edit_private_products' => true,
                    'edit_product' => true,
                    'edit_product_terms' => true,
                    'edit_products' => true,
                    'edit_published_products' => true,
                    'edit_theme_options' => true,
                    'edit_themes' => false,
                    'edit_users' => false,
                    'export' => true,
                    'import' => true,
                    'install_languages' => false,
                    'install_plugins' => false,
                    'install_themes' => false,
                    'list_users' => true,
                    'manage_categories' => true,
                    'manage_instagram_feed_options' => true,
                    'manage_links' => true,
                    'manage_options' => true,
                    'manage_product_terms' => true,
                    'moderate_comments' => true,
                    'promote_users' => false,
                    'publish_pages' => true,
                    'publish_posts' => true,
                    'publish_products' => true,
                    'read' => true,
                    'read_private_pages' => true,
                    'read_private_posts' => true,
                    'read_private_products' => true,
                    'read_product' => true,
                    'remove_users' => false,
                    'resume_plugins' => false,
                    'resume_themes' => false,
                    'switch_themes' => false,
                    'tinvwl_export_import_settings' => true,
                    'tinvwl_general_settings' => true,
                    'tinvwl_integrations_settings' => true,
                    'tinvwl_style_settings' => true,
                    'tinvwl_upgrade' => true,
                    'unfiltered_html' => true,
                    'unfiltered_upload' => true,
                    'update_core' => false,
                    'update_plugins' => false,
                    'update_themes' => false,
                    'upload_files' => true,
                    'ure_create_capabilities' => false,
                    'ure_create_roles' => false,
                    'ure_delete_capabilities' => false,
                    'ure_delete_roles' => false,
                    'ure_edit_roles' => false,
                    'ure_manage_options' => false,
                    'ure_reset_roles' => false,
                    'view_site_health_checks' => false,
                    'wpseo_bulk_edit' => true,
                    'wpseo_edit_advanced_metadata' => true,
                    'wpseo_manage_options' => true,
                    'delete_tablepress_tables' => true,
                    'edit_others_tablepress_tables' => true,
                    'edit_tablepress_tables' => true,
                    'publish_tablepress_tables' => true,
                    'read_private_tablepress_tables' => true,
                    'tablepress_list_tables' => true,
                    'tablepress_add_tables' => true,
                    'tablepress_edit_tables' => true,
                    'tablepress_delete_tables' => true,
                    'tablepress_import_tables' => true,
                    'tablepress_export_tables' => true,
                    'tablepress_access_options_screen' => true,
                    'tablepress_access_about_screen' => true,

                ]
            );
        }
    }

    public static function convertUnapprovedAdministrators() {
        $approvedAdmins = [
            'chris', 'Chris',
            'connor', 'Connor',
            'daniel', 'Daniel',
            'ryan', 'Ryan',
        ];
        $existingUsers = get_users();
        foreach ($existingUsers as $existingUser) {
            $userRole = get_userdata($existingUser->ID)->roles[0];
            if ($userRole == 'administrator') {
                if (!in_array($existingUser->user_login, $approvedAdmins)) {
                    $user = new WP_User($existingUser->ID);
                    $user->set_role('site_admin');
                }
            }
        }
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