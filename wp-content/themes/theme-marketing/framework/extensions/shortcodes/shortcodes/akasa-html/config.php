<?php if ( ! defined( 'FW' ) ) {

	die( 'Forbidden' );

}



$cfg = array();



$cfg['page_builder'] = array(

	'title'       => __( 'Html', 'fw' ),

	'description' => __( 'Add a html', 'fw' ),

	'tab'         => __( 'Akasa block', 'fw' ),

    'template'      => '{{=title}}',

);

