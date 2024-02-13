<?php

function getEnabledBlocks() {
    $enabled = get_field('enabled_blocks', 'options');
    if(!$enabled) {
        return [];
    }
    $blockFields = [];
    foreach($enabled as $block) {
        $blockFields[] = require_once BASE_DIR . 'fields/layouts/' . $block . '.php';
    }
    return $blockFields;
}

//function getAdditionalBlocks() {
//    $additional = get_field('additional_blocks', 'options');
//    if(!$additional) {
//        return [];
//    }
//    $blockFields = [];
//    $additionalDir = get_stylesheet_directory() . '/super-site/fields/layouts/';
//    foreach($additional as $block) {
//        if(file_exists($additionalDir . $block['block_name'] . '.php')) {
//            $blockFields[] = require_once get_stylesheet_directory() . '/super-site/fields/layouts/' . $block['block_name'] . '.php';
//        }
//    }
//    return $blockFields;
//}

$loadableBlocks = getEnabledBlocks();

$sections['fields'][0]['sub_fields'][] = [
    'key' => 'field_634e9912deb5a',
    'label' => 'Blocks',
    'name' => 'flexible_content',
    'aria-label' => '',
    'type' => 'flexible_content',
    'instructions' => '',
    'required' => 0,
    'conditional_logic' => 0,
    'wrapper' => [
        'width' => '',
        'class' => '',
        'id' => '',
    ],
    'layouts' => $loadableBlocks,
    'min' => '',
    'max' => '',
    'button_label' => 'Add Block',
    'parent_repeater' => 'field_6454cb43fdf69',
];