<?php

namespace SDSS;

class Block
{

    public static function blockTitle(string $title = '', array $titleSettings = ['importance' => 'h3', 'colour' => 'primary']) {
        Helpers::echoIfExists( $title, $titleSettings['importance'], 'block-title font-' . $titleSettings['colour'] );
    }

    public static function blockButtons($buttonsRepeater) {
        $buttonString = '';

        if (empty($buttonsRepeater)) {
            return '';
        }

        foreach ($buttonsRepeater as $buttonGroup) {
            $buttonString .= self::blockButton($buttonGroup['button']);
        }

        return $buttonString;
    }

    public static function blockButton($buttonGroup) {
        $button = '';

        if ($buttonGroup['enabled'] !== true || !$buttonGroup['link'] || !$buttonGroup['display_text']) {
            return $button;
        }

        $buttonClasses = [
            $buttonGroup['colour'],
            $buttonGroup['hover'],
        ];

        $button .= '<a class="theme-btn ' . rtrim(implode(' ', $buttonClasses)) . '" href="' . $buttonGroup['link'] . '" ' . Helpers::newTabCheck($buttonGroup['open_in_new_tab']) . '>';
        $button .= $buttonGroup['display_text'];
        $button .= '</a>';

        return $button;
    }

    public static function blockPartial($selectorName = 'style', $subFolder = '', $sectionIndex = '') {
        $dir = BASE_DIR . 'templates/partials/' . get_row_layout() . '/';
        if ($subFolder !== '') {
            $dir .= $subFolder . '/';
        }
        $dir .= get_sub_field($selectorName) . '.php';
        return include $dir;
    }

    public static function splitContent() {
        $splitOrder = get_sub_field('split_order');
        if (empty($splitOrder)) {
            return '';
        }

        $output = '';
        $iteration = 0;

        foreach (explode('-', $splitOrder) as $split) {
            $contentType = get_sub_field('split_' . $split . '_content_type');
            $location = $iteration == 0 ? 'left' : 'right';
            $fields = get_sub_field('split_' . $split . '_content')[$contentType . '_content'];

            $output .= include __DIR__ . '/../templates/partials/split_content/' . $contentType . '.php';
            $iteration++;
        }

        return $output;
    }

    public static function blockClasses() {
        return rtrim(
            self::getBlockAcfField('style') .
            self::getBlockAcfField('height', 'height_') .
            self::getBlockAcfField('background', 'block_bg_') .
            self::getBlockPadding() .
            self::getBlockSplitContentClasses()
        );
    }
    
    public static function blockLayout() {
        return 'fc-' . get_sub_field('content_layout') . ' fc-' . get_sub_field('content_width');
    }

    public static function getBlockAcfField($fieldValue, $prefix = '') {
        if (!get_sub_field($fieldValue)) {
            return '';
        }
        return $prefix . get_sub_field($fieldValue) . ' ';
    }

    public static function getBlockPadding() {
        $top = '0';
        $bottom = '0';

        $blockPadding = get_sub_field('padding');
        if ($blockPadding) {
            $top = ($blockPadding['top'] > 0) ? $blockPadding['top'] : '0';
            $bottom = ($blockPadding['bottom'] > 0) ? $blockPadding['bottom'] : '0';
        }

        return 'pt_' . $top . ' pb_' . $bottom . ' ';
    }

    private static function getBlockSplitContentClasses() {
        $splits = explode('-', get_sub_field('split_order'));
        if (!$splits) {
            return '';
        }

        $classes = '';
        foreach ($splits as $split) {
            $classes .= get_sub_field('split_' . $split . '_content_type') . ' ';
        }

        return rtrim($classes);
    }

}