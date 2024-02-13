<?php

namespace SuperBuilder\Frontend;

class SuperCodes
{

    public static function classInit() {
        add_shortcode( 'post_address', [self::class, 'addressString'] );
        add_shortcode( 'contact_details', [self::class, 'contactDetails'] );
        add_shortcode( 'social_icons', [self::class, 'socialIcons'] );
    }

    public static function addressString() {
        $addressArray = get_field('address', 'options');
        if(!$addressArray) {
            return '';
        }
        $count = (is_countable($addressArray)) ? count($addressArray) : null;
        $i = 0;
        $string = '';
        foreach ($addressArray as $line) {
            $i++;
            $string .= $line['line'];
            if($i < $count) {
                $string .= ', ';
            }
        }
        return $string;
    }

    public static function contactDetails() {
        $email = get_field('email_address', 'options');
        $phone = get_field('phone_number', 'options');
        $return = '<a href="mailto:' . $email . '" class="email">' . $email . '</a><a href="tel:' . $phone . '" class="phone">' . $phone . '</a>';
        return $return;
    }

    public static function socialIcons() {
        $return = '<div class="social-icons">';
        if (have_rows('socials', 'options')) : while (have_rows('socials', 'options')) : the_row();
            $channel = get_sub_field('channel');
            $linkClass = explode('-', $channel)[1];
            $return .= '<a class="' . $linkClass . '" href="' . get_sub_field('link_url') . '" target="_blank">
						<i class="' . $channel . '"></i>
					</a>';
        endwhile; endif;
        $return .= '</div>';
        return $return;
    }
    
}