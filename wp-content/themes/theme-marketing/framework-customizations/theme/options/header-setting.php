<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'general-header' => array(
        'title'   => __( 'Cấu hình header', 'unyson' ),
        'type'    => 'tab',
        'options' => array(
            'header-builder-box' => array(
                'type' => 'box',
                'title' => false,
                'options' => array(
                    'header-builder' => array(
                        'type' => 'page-builder',
                        // this will make it full width
                        'label' => false,
                    ),
                ),
            ),
        )
    )
);