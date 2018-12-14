<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'title'   => array(
        'type'  => 'text',
        'label' => __( 'Tiêu đề', 'fw' )
    ),
	'text' => array(
		'type'   => 'wp-editor',
		'label'  => __( 'Content', 'fw' ),
		'desc'   => __( 'Enter some content for this texblock', 'fw' )
	),
    'options_class'   => array(
        'type'  => 'text',
        'label' => __( 'Options class', 'fw' )
    ),
    'options_child_class'   => array(
        'type'  => 'text',
        'label' => __( 'Options child class', 'fw' )
    ),
);
