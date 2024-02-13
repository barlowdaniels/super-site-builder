<?php

namespace SuperBuilder\Backend;

class RegisterDefaultNavMenus
{

    public static function classInit() {
        add_action('after_setup_theme', [self::class, 'registerDefaultNavMenus']);        
    }
    
    
    public static function registerDefaultNavMenus() {
        // Register WP menu locations
        register_nav_menus( array(
            'sb-main' => esc_html__( 'SuperBuilder: Main' ),
            'sb-footer-1' => esc_html__( 'SuperBuilder: Footer 1' ),
            'sb-footer-2' => esc_html__('SuperBuilder: Footer 2'),
            'sb-legal' => esc_html__( 'SuperBuilder: Legal' ),
        ) );
    }
}