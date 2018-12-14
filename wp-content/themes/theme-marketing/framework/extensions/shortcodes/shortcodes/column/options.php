<?php if (!defined('FW')) die('Forbidden');



$options = array(

    'class_options' => array(

        'label'   => 'Class options',

        'type'    => 'text'

    ),

    'class_child_options' => array(

        'label'   => 'Class child options',

        'type'    => 'text'

    ),

    'class_child_child_options' => array(

        'label'   => 'Class child child options',

        'type'    => 'text'

    ),

    'background_color' => array(

        'label' => __('Background Color', 'fw'),

        'desc'  => __('Please select the background color', 'fw'),

        'type'  => 'color-picker',

    ),

    'background_image' => array(

        'label'   => __('Background Image', 'fw'),

        'desc'    => __('Please select the background image', 'fw'),

        'type'    => 'background-image',

        'choices' => array(//	in future may will set predefined images

        )

    ),
    'background_gradien_opt' => array(
        'label'   => 'Background gradien options',
        'type'    => 'text'
    ),
    'background_gradien_pri' => array(
        'label'   => 'Background gradien from',
        'type'    => 'text'
    ),
    'background_gradien_sec' => array(
        'label'   => 'Background gradien to',
        'type'    => 'text'
    ),



);