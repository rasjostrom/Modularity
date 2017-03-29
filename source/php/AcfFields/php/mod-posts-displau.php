<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_571dfd3c07a77',
    'title' => 'Data display',
    'fields' => array(
        0 => array(
            'layout' => 'horizontal',
            'choices' => array(
                'list' => __('List', 'modularity'),
                'expandable-list' => __('Expandable List', 'modularity'),
                'items' => __('Post items', 'modularity'),
                'news' => __('News items', 'modularity'),
                'index' => __('Index', 'modularity'),
                'grid' => __('Grid', 'modularity'),
                'circular' => __('Circular', 'modularity'),
            ),
            'default_value' => 'list',
            'other_choice' => 0,
            'save_other_choice' => 0,
            'allow_null' => 0,
            'return_format' => 'value',
            'key' => 'field_571dfd4c0d9d9',
            'label' => __('Display as', 'modularity'),
            'name' => 'posts_display_as',
            'type' => 'radio',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        1 => array(
            'multiple' => 0,
            'allow_null' => 0,
            'choices' => array(
                'grid-md-12' => __('1', 'modularity'),
                'grid-md-6' => __('2', 'modularity'),
                'grid-md-4' => __('3', 'modularity'),
                'grid-md-3' => __('4', 'modularity'),
            ),
            'default_value' => array(
                0 => 'grid-md-12',
            ),
            'ui' => 0,
            'ajax' => 0,
            'placeholder' => '',
            'return_format' => 'value',
            'key' => 'field_571dfdf50d9da',
            'label' => __('Columns', 'modularity'),
            'name' => 'posts_columns',
            'type' => 'select',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'items',
                    ),
                ),
                1 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'index',
                    ),
                ),
                2 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'grid',
                    ),
                ),
                3 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'circular',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        2 => array(
            'default_value' => 0,
            'message' => __('Yes, alter grid size automatically', 'modularity'),
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
            'key' => 'field_571e046536f0e',
            'label' => __('Altering grid size', 'modularity'),
            'name' => 'posts_alter_columns',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'grid',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        3 => array(
            'layout' => 'horizontal',
            'choices' => array(
                'date' => __('Show date published', 'modularity'),
                'excerpt' => __('Show excerpt', 'modularity'),
                'title' => __('Show title', 'modularity'),
                'image' => __('Show featured image', 'modularity'),
            ),
            'default_value' => array(
                0 => 'date',
                1 => 'excerpt',
                2 => 'title',
                3 => 'image',
            ),
            'allow_custom' => 0,
            'save_custom' => 0,
            'toggle' => 0,
            'return_format' => 'value',
            'key' => 'field_571e01e7f246c',
            'label' => __('Fields', 'modularity'),
            'name' => 'posts_fields',
            'type' => 'checkbox',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '!=',
                        'value' => 'expandable-list',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        4 => array(
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'key' => 'field_57e3bcae3826e',
            'label' => __('Title column label', 'modularity'),
            'name' => 'title_column_label',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'expandable-list',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        5 => array(
            'sub_fields' => array(
                0 => array(
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'key' => 'field_571f5790592e7',
                    'label' => __('Column header', 'modularity'),
                    'name' => 'column_header',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'readonly' => 0,
                    'disabled' => 0,
                ),
            ),
            'min' => 0,
            'max' => 0,
            'layout' => 'table',
            'button_label' => __('Lägg till rad', 'modularity'),
            'collapsed' => '',
            'key' => 'field_571f5776592e6',
            'label' => __('List column labels', 'modularity'),
            'name' => 'posts_list_column_titles',
            'type' => 'repeater',
            'instructions' => __('A title field will always be added as the first column. You will need to go to each post in this list to give the values for each column.', 'modularity'),
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'expandable-list',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'mod-posts',
            ),
        ),
    ),
    'menu_order' => -10,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
    'modified' => 1485442638,
    'local' => 'json',
));
}