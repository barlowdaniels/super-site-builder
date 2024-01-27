<?php
acf_add_local_field_group( array(
    'key' => 'group_6549022a5ae29',
    'title' => 'The global button settings',
    'fields' => array(
        array(
            'key' => 'field_6549022c8f6c6',
            'label' => '',
            'name' => 'super_site_button_settings',
            'aria-label' => '',
            'type' => 'group',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'layout' => 'table',
            'sub_fields' => array(
                array(
                    'key' => 'field_654902468f6c7',
                    'label' => 'Border Radius',
                    'name' => 'border_radius',
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
                    'default_value' => '30px',
                    'placeholder' => '',
                ),
                array(
                    'key' => 'field_6549028a8f6c8',
                    'label' => 'Font Weight',
                    'name' => 'font_weight',
                    'aria-label' => '',
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 400,
                    'min' => 100,
                    'max' => 900,
                    'placeholder' => '',
                    'step' => 100,
                    'prepend' => '',
                    'append' => '',
                ),
                array(
                    'key' => 'field_654902dd8f6c9',
                    'label' => 'Font Size',
                    'name' => 'font_size',
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
                    'default_value' => '1.1rem',
                    'placeholder' => '',
                ),
            ),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'acf-options-button',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
) );