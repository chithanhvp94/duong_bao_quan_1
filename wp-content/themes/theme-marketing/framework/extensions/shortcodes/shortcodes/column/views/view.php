<?php if (!defined('FW')) die('Forbidden');

$bg_color = '';

if ( ! empty( $atts['background_color'] ) ) {

    $bg_color = 'background-color:' . $atts['background_color'] . ';';

}

$bg_image = '';

if( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) && ! empty( $atts['background_gradien_pri'] ) && ! empty( $atts['background_gradien_sec'] )){
    if(! empty( $atts['background_gradien_opt'] )){
        $bg_image = 'background-image: url(' . $atts['background_image']['data']['icon'] . '), -webkit-linear-gradient('.$atts['background_gradien_opt'].','.$atts['background_gradien_pri'].', '.$atts['background_gradien_sec'].'); '.
                'background-image: url(' . $atts['background_image']['data']['icon'] . '), -o-linear-gradient('.$atts['background_gradien_opt'].','.$atts['background_gradien_pri'].', '.$atts['background_gradien_sec'].'); '.
                'background-image: url(' . $atts['background_image']['data']['icon'] . '), linear-gradient('.$atts['background_gradien_opt'].','.$atts['background_gradien_pri'].', '.$atts['background_gradien_sec'].'); ';
    }else{
    $bg_image = 'background-image: url(' . $atts['background_image']['data']['icon'] . '), -webkit-linear-gradient('.$atts['background_gradien_pri'].', '.$atts['background_gradien_sec'].'); '.
                    'background-image: url(' . $atts['background_image']['data']['icon'] . '), -o-linear-gradient('.$atts['background_gradien_pri'].', '.$atts['background_gradien_sec'].'); '.
                    'background-image: url(' . $atts['background_image']['data']['icon'] . '), linear-gradient('.$atts['background_gradien_pri'].', '.$atts['background_gradien_sec'].'); ';
    }
}else if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {

    $bg_image = 'background-image:url(' . $atts['background_image']['data']['icon'] . ');';

}else if(! empty( $atts['background_gradien_pri'] ) && ! empty( $atts['background_gradien_sec'] )){
    if(! empty( $atts['background_gradien_opt'] )){
        $bg_image = 'background-image: -webkit-linear-gradient('.$atts['background_gradien_opt'].','.$atts['background_gradien_pri'].', '.$atts['background_gradien_sec'].'); '.
                'background-image: -o-linear-gradient('.$atts['background_gradien_opt'].','.$atts['background_gradien_pri'].', '.$atts['background_gradien_sec'].'); '.
                'background-image: linear-gradient('.$atts['background_gradien_opt'].','.$atts['background_gradien_pri'].', '.$atts['background_gradien_sec'].'); ';
    }else{
    $bg_image = 'background-image: -webkit-linear-gradient('.$atts['background_gradien_pri'].', '.$atts['background_gradien_sec'].'); '.
                    'background-image: -o-linear-gradient('.$atts['background_gradien_pri'].', '.$atts['background_gradien_sec'].'); '.
                    'background-image: linear-gradient('.$atts['background_gradien_pri'].', '.$atts['background_gradien_sec'].'); ';
    }
    
}
$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');

$class_child_options = $atts['class_child_options'];

$class_child_child_options = $atts['class_child_child_options'];

$section_style   = ( $bg_color || $bg_image ) ? 'style="' . esc_attr($bg_color . $bg_image) . '"' : '';
// print_r($atts['background_gradien']);
?>

<div class="<?php echo esc_attr($class); ?> <?php echo $atts['class_options']?>" <?php echo $section_style; ?>>

    <?php

    if($class_child_options){?>

        <div class="<?php echo $class_child_options;?>">

            <?php

            if($class_child_child_options){?>

                <div class="<?php echo $class_child_child_options;?>"><?php echo do_shortcode($content);?></div>

            <?php }else{

                echo do_shortcode($content);

            }

            ?>

        </div>

    <?php }else{

        if($class_child_child_options){?>

            <div class="<?php echo $class_child_child_options;?>"><?php echo do_shortcode($content);?></div>

        <?php }else{

            echo do_shortcode($content);

        }

    }

    ?>

</div>

