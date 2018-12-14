<?php if ( ! defined( 'FW' ) ) {

	die( 'Forbidden' );

}

$list_chose_menu = array();


$menus = get_registered_nav_menus();

foreach ( $menus as $location => $description ) {
    $list_chose_menu += [$location => $description];
}

// $list_nav_menu = get_terms( 'nav_menu', array( 'hide_empty' => true ) );

// foreach ($list_nav_menu as $item){

//     $list_chose_menu += [$item->term_id => $item->name];

// }

$options = array(

    'title'   => array(

        'type'  => 'text',

        'label' => __( 'Tiêu đề menu', 'fw' )

    ),

	'menu' => array(

        'type'  => 'select',

        'label' => 'Chọn menu',

        'choices' => $list_chose_menu,

        /**

         * Allow save not existing choices

         * Useful when you use the select to populate it dynamically from js

         */

        'no-validate' => false,

	),

    'options_class'   => array(

        'type'  => 'text',

        'label' => __( 'Options class', 'fw' )

    ),

    'menu_class'   => array(

        'type'  => 'text',

        'label' => __( 'menu class', 'fw' )

    ),

    'menu_id'   => array(

        'type'  => 'text',

        'label' => __( 'menu class', 'fw' )

    ),

    'show_mobile' => array(

        'type'         => 'switch',

        'label'        => __( 'Chức năng menu mobile không?', 'fw' ),

        'right-choice' => array(

            'value' => '1',

            'label' => __( 'Yes', 'fw' ),

        ),

        'left-choice'  => array(

            'value' => '0',

            'label' => __( 'No', 'fw' ),

        ),

    ),

);

