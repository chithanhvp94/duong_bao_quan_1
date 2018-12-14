<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => __( 'Text Block', 'fw' ),
	'description' => __( 'Add a Text Block', 'fw' ),
	'tab'         => __( 'Akasa block', 'fw' ),
    'template'      => '{{=title}}',
);
