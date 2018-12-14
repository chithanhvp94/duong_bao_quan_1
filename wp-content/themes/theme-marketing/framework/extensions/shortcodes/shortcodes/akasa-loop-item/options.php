<?php if ( ! defined( 'FW' ) ) {

	die( 'Forbidden' );

}



$options = array(

    'item' => array(

        'type'          => 'addable-popup',

        'label'         => __( 'Chọn phần tử', 'fw' ),

        'popup-title'   => __( 'Add/Edit Tabs', 'fw' ),

        'desc'          => __( 'Create your tabs', 'fw' ),

        'template'      => '{{=item_title}}',

        'popup-options' => array(

            'item_title'   => array(

                'type'  => 'text',

                'label' => __('Tiêu đề', 'fw')

            ),

            'item_links' => array(

                'type'  => 'text',

                'label' => __('Đường link (nếu có)', 'fw')

            ),
            'item_target' => array(
                'type'  => 'switch',
                'label'   => __( 'Open Link in New Window', 'fw' ),
                'desc'    => __( 'Select here if you want to open the linked page in a new window', 'fw' ),
                'right-choice' => array(
                    'value' => '_blank',
                    'label' => __('Yes', 'fw'),
                ),
                'left-choice' => array(
                    'value' => '_self',
                    'label' => __('No', 'fw'),
                ),
            ),

            'item_image'            => array(

                'type'  => 'upload',

                'label' => __( 'Chọn hình ảnh', 'fw' ),

                'desc'  => __( 'Chọn hình ảnh hiển thị nếu sử dụng', 'fw' )

            ),
            'item_alt'   => array(

                'type'  => 'text',

                'label' => __('alt text', 'fw')

            ),

            'item_class' => array(

                'type'  => 'text',

                'label' => __('Class items', 'fw')

            ),

            'icon'       => array(

                'type' => 'icon',

                'label' => __( 'Icon (nếu sử dụng)', 'fw' )

            ),

            'class_icon'       => array(

                'type' => 'text',

                'label' => __( 'Class Icon (nếu icon không có)', 'fw' )

            ),

        )

    ),

    'containe_class'    => array(

        'type'      => 'text',

        'label'     => 'container class'

    ),

    'list_class'    => array(

        'type'      => 'text',

        'label'     => 'list class'

    ),

);



