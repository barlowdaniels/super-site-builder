<?php

namespace SuperBuilder\Frontend;

use SuperBuilder\Helpers\Helper;

class HeaderBuilder
{
    
    public static function classInit() {
        add_action('wp_body_open', [self::class, 'buildHeader']);
    }

    public static function buildHeader() {
        $header = self::headerWrapperStart();
        $header .= self::headerLogo();
        $header .= self::headerNav();
        $header .= self::headerWrapperEnd();
        $header .= self::headerNavHamburgerMenu();

        echo $header;
    }
    
    public static function headerLogo() {
        return '
            <a href="' . get_site_url() . '" class="header-logo">
                <img src="' . get_field('header_logo','options')['url'] . '" alt="' . get_field('header_logo','options')['alt'] . '"/>
            </a>
        ';
    }
   
    public static function headerNav() {

        if(self::getHeaderNavStyle() == 'default') {
            $nav = self::headerNavDefault();
        } else {
            $nav = self::headerNavHamburgerIcons();
        }

        return '<div class="nav-menu">' . $nav . '</div>';
    }

    public static function headerNavDefault() {
        return
        wp_nav_menu( [
            'theme_location' => 'sb-main',
            'menu_class'     => 'main',
            'container'      => false,
            'echo'           => false,
        ]);
    }
    
    public static function headerNavHamburgerIcons() {
        return '
            <div class="hamburger open show">' . Helper::getAsset('menu.svg') . '</div>
            <div class="hamburger close">' . Helper::getAsset('close.svg') . '</div>
        ';
    }
    
    public static function headerNavHamburgerMenu() {
        $return = '<div class="hamburger-nav-menu';
        
        if(self::getHeaderLogoLocation() == 'right') {
            $return .= ' reverse';
        }
        
        $return .= '">' . self::headerLogo() . self::headerNavDefault() . '</div>';

        return $return;
    }

    // Wrappers
    public static function headerWrapperStart() {
        $headerStartTag = '<header';

        if(self::getHeaderLogoLocation() == 'right') {
            $headerStartTag .= ' class="flex-row-reverse"';
        }

        $headerStartTag .= '>';

        return $headerStartTag;
    }
    
    public static function headerWrapperEnd() {
        return '</header>';
    }
    
    // Field getters
    public static function getHeaderLogoLocation() {
        return get_field('header_logo_location', 'options');
    }

    public static function getHeaderNavStyle() {
        return get_field('header_nav_style', 'options');
    }


}