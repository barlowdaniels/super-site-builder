<?php
return array(
    'key' => 'layout_652400d83ad1c',
    'name' => 'carousel',
    'label' => 'Carousel',
    'display' => 'block',
    'sub_fields' => array(
        array(
            'key' => 'field_652400de3ad1e',
            'label' => 'Settings',
            'name' => '',
            'aria-label' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'left',
            'endpoint' => 0,
        ),
        array(
            'key' => 'field_652400f03ad20',
            'label' => 'Style',
            'name' => 'style',
            'aria-label' => '',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'images' => 'Images',
            ),
            'default_value' => 'images',
            'return_format' => 'value',
            'multiple' => 0,
            'allow_null' => 0,
            'ui' => 0,
            'ajax' => 0,
            'placeholder' => '',
        ),
        array(
            'key' => 'field_652401113ad21',
            'label' => 'Background',
            'name' => 'background',
            'aria-label' => '',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'primary' => 'Primary',
                'secondary' => 'Secondary',
                'tertiary' => 'Tertiary',
                'light-grey' => 'Light Grey',
                'white' => 'White',
            ),
            'default_value' => 'white',
            'return_format' => 'value',
            'multiple' => 0,
            'allow_null' => 0,
            'ui' => 0,
            'ajax' => 0,
            'placeholder' => '',
        ),
        array(
            'key' => 'field_654e4e328cb2d',
            'label' => 'Navigation',
            'name' => 'navigation',
            'aria-label' => '',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'arrows' => 'Arrows',
                'dots' => 'Dots',
            ),
            'default_value' => 'arrows',
            'return_format' => 'value',
            'multiple' => 0,
            'allow_null' => 0,
            'ui' => 0,
            'ajax' => 0,
            'placeholder' => '',
        ),
        array(
            'key' => 'field_654e4e6d8cb2e',
            'label' => 'Autoplay',
            'name' => 'autoplay',
            'aria-label' => '',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_654e4e838cb2f',
            'label' => 'Autoplay Speed',
            'name' => 'autoplay_speed',
            'aria-label' => '',
            'type' => 'number',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 3000,
            'min' => '',
            'max' => '',
            'placeholder' => '',
            'step' => 1,
            'prepend' => '',
            'append' => 'ms',
        ),
        array(
            'key' => 'field_652401153ad22',
            'label' => 'Padding',
            'name' => 'padding',
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
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_652401153ad23',
                    'label' => 'Top',
                    'name' => 'top',
                    'aria-label' => '',
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '25',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 5,
                    'min' => 0,
                    'max' => 5,
                    'placeholder' => '',
                    'step' => 1,
                    'prepend' => '',
                    'append' => '',
                ),
                array(
                    'key' => 'field_652401153ad24',
                    'label' => 'Bottom',
                    'name' => 'bottom',
                    'aria-label' => '',
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '25',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 5,
                    'min' => 0,
                    'max' => 5,
                    'placeholder' => '',
                    'step' => 1,
                    'prepend' => '',
                    'append' => '',
                ),
                array(
                    'key' => 'field_652401153ad25',
                    'label' => '',
                    'name' => '',
                    'aria-label' => '',
                    'type' => 'message',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '<strong>Set a value 0-5.</strong>
0 = 0px | 1 = 20px | 2 = 40px | 3 = 60px | 4 = 80px | 5 = 100px',
                    'new_lines' => 'wpautop',
                    'esc_html' => 0,
                ),
            ),
        ),
        array(
            'key' => 'field_652400e73ad1f',
            'label' => 'Content',
            'name' => '',
            'aria-label' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'left',
            'endpoint' => 0,
        ),
        array(
            'key' => 'field_654e4e0a8cb2c',
            'label' => 'Images',
            'name' => 'carousel_images',
            'aria-label' => '',
            'type' => 'gallery',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
            'library' => 'all',
            'min' => '',
            'max' => '',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
            'insert' => 'append',
            'preview_size' => 'medium',
        ),
    ),
    'min' => '',
    'max' => '',
);