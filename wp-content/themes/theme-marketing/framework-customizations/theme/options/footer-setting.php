<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'general-footet' => array(
        'title'   => __( 'Cấu hình footer', 'unyson' ),
        'type'    => 'tab',
        'options' => array(
            'lists-builder-box-footer' => array(
                'type' => 'box',
                'title' => false,
                'options' => array(
                    'lists-builder-footer' => array(
                        'type' => 'page-builder',
                        // this will make it full width
                        'label' => false,
                    ),
                ),
            ),
        )
    )
);