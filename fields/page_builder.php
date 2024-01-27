<?php

$sections = array(
    'key' => 'group_6501ccec13381',
    'title' => 'Page Builder',
    'fields' => array(
        array(
            'key' => 'field_6454cb43fdf69',
            'label' => 'Sections',
            'name' => 'sections',
            'aria-label' => '',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'layout' => 'block',
            'pagination' => 0,
            'min' => 0,
            'max' => 0,
            'collapsed' => 'field_6454cbacfdffa',
            'button_label' => 'Add Section',
            'rows_per_page' => 20,
            'sub_fields' => array(
                array(
                    'key' => 'field_6454cbacfdffa',
                    'label' => 'Section Name',
                    'name' => 'section_name',
                    'aria-label' => '',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => 'Enter section name',
                    'prepend' => '',
                    'append' => '',
                    'parent_repeater' => 'field_6454cb43fdf69',
                ),
            ),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'page',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array(
        0 => 'the_content',
    ),
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
);

require_once BASE_DIR . 'fields/flexible_content.php';

acf_add_local_field_group($sections);