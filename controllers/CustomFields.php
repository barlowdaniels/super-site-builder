<?php

namespace SDSS;

class CustomFields {
    public static function init() {
        add_action('acf/include_fields', [self::class, 'registerACFFields']);
        // DEV DEBUGGER
        add_action('admin_init', [self::class, 'superDebug']); 
    }

    public static function superDebug() {
        // var_dump(get_field('max_page_revisions', 'options'));
    }

    public static function registerACFFields() {
        if ( ! function_exists( 'acf_add_local_field_group' ) ) {
            return;
        }
        include BASE_DIR . 'fields/settings.php';
        include BASE_DIR . 'fields/super_button.php';
        include BASE_DIR . 'fields/site_wide_content.php';
        include BASE_DIR . 'fields/page_builder.php';
    }
        
}