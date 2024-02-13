<?php

namespace SuperBuilder\Backend;

class DefineAcfOptionsPages
{
    
    public static function classInit() {
        add_action('init', [self::class, 'defineAcfOptionsPages']);
    }

    public static function defineAcfOptionsPages() {
        if( function_exists('acf_add_options_page') ) {
            acf_add_options_page(array(
                'page_title'    => 'SuperBuilder Settings',
                'menu_title'    => 'SuperBuilder',
                'menu_slug'     => 'superbuilder',
                'capability'    => 'edit_posts',
                'icon_url'      => 'dashicons-superhero-alt',
                'redirect'      => true
            ));
            acf_add_options_sub_page(array(
                'page_title'    => 'Settings',
                'menu_title'    => 'Settings',
                'capability'    => 'edit_plugins',
                'parent_slug'   => 'superbuilder',
            ));
            acf_add_options_sub_page(array(
                'page_title'    => 'Header',
                'menu_title'    => 'Header',
                'parent_slug'   => 'superbuilder',
            ));
            acf_add_options_sub_page(array(
                'page_title'    => 'Footer',
                'menu_title'    => 'Footer',
                'parent_slug'   => 'superbuilder',
            ));
            acf_add_options_sub_page(array(
                'page_title'    => 'Site Wide Content',
                'menu_title'    => 'Site Wide Content',
                'parent_slug'   => 'superbuilder',
            ));
            acf_add_options_sub_page(array(
                'page_title'    => 'Super Button',
                'menu_title'    => 'Button',
                'capability'    => 'edit_plugins',
                'parent_slug'   => 'super-site',
            ));
        }
    }    
    
}