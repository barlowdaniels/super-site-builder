<?php

namespace SDSS;

class Enqueue {
    public static function init() {
        add_action('wp_enqueue_scripts', [self::class, 'frontendScripts']);
        add_action('admin_enqueue_scripts', [self::class, 'adminScripts']);
    }

    public static function frontendScripts() {
        self::enqueueGoogleFonts();
        wp_enqueue_style( 'sb-front', BASE_URL . 'assets/css/sb-front.css');
        wp_enqueue_script('jquery'); // Force enqueue jQuery - it is always required for SB to work properly
        wp_enqueue_script( 'sb-front-min', BASE_URL . 'assets/js/sb-front.min.js', [], '1.0.0', true );

        $blockTypes = self::detectBlockTypes();
        // Vimeo JS
        if(in_array('hero_video', $blockTypes) || in_array('split_content_video', $blockTypes)) {
            wp_enqueue_script('vimeo', 'https://player.vimeo.com/api/player.js');
        }
        // GoogleMaps
        if(in_array('split_content_map', $blockTypes)) {
            wp_enqueue_script('acf-googlemaps', get_field('googlemaps_api_key', 'options'));
        }
    }

    public static function detectBlockTypes() {
        $blockTypes = [];
        $sections = get_field('sections', get_the_id());

        if($sections) {
            foreach ($sections as $section) {
                foreach ($section['flexible_content'] as $block) {
                    // Add the block type to the array
                    $blockTypes[] = $block['acf_fc_layout'];
                    // Set detectable subtypes
                    $subTypes = [
                        'style',
                        'image_video',
                        'split_one_content_type',
                        'split_two_content_type',
                    ];
                    // Add the block subtype to the array
                    foreach($subTypes as $subType) {
                        if(isset($block[$subType])) {
                            $blockTypes[] = $block['acf_fc_layout'] . '_' . $block[$subType];
                        }
                    }
                }
            }
        }
        return $blockTypes;
    }

    public static function enqueueGoogleFonts() {
        $googleFonts = get_field('super_site_googlefonts', 'options');
        if(!$googleFonts) {
            return;
        }
        foreach($googleFonts as $font) {
            $i = 0; $i++;
            wp_enqueue_style('googlefonts-' . $i, $font['link']);
        }
    }
    
    public static function adminScripts() {
        wp_enqueue_style( 'sb-admin', BASE_URL . '/assets/css/sb-admin.css');
        wp_enqueue_script('acf-googlemaps', get_field('googlemaps_api_key', 'options'));
    }

}