<?php if ( ! defined( 'FW' ) ) {

    die( 'Forbidden' );

}



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



$bg_video_data_attr    = '';

$section_extra_classes = '';

if ( ! empty( $atts['video'] ) ) {

    $filetype           = wp_check_filetype( $atts['video'] );

    $filetypes          = array( 'mp4' => 'mp4', 'ogv' => 'ogg', 'webm' => 'webm', 'jpg' => 'poster' );

    $filetype           = array_key_exists( (string) $filetype['ext'], $filetypes ) ? $filetypes[ $filetype['ext'] ] : 'video';

    $data_name_attr = version_compare( fw_ext('shortcodes')->manifest->get_version(), '1.3.9', '>=' ) ? 'data-background-options' : 'data-wallpaper-options';

    $bg_video_data_attr = $data_name_attr.'="' . fw_htmlspecialchars( json_encode( array( 'source' => array( $filetype => $atts['video'] ) ) ) ) . '"';

    $section_extra_classes .= ' background-video';

}



$section_style   = ( $bg_color || $bg_image ) ? 'style="' . esc_attr($bg_color . $bg_image) . '"' : '';

//$container_class = ( isset( $atts['is_fullwidth'] ) && $atts['is_fullwidth'] ) ? 'container-fluid' : 'container';

$container_class = ( isset( $atts['is_fullwidth'] ) && $atts['is_fullwidth'] ) ? '' : 'container';

?>

<?php if($container_class != ''){?>

<section class="<?php echo $atts['main_section']?> <?php echo esc_attr($container_class); ?> <?php echo esc_attr($section_extra_classes) ?>" <?php echo $section_style; ?> <?php echo $bg_video_data_attr; ?> id="<?php echo $atts['main_section']?>">



<?php }else{?>

    <section class="<?php echo $atts['main_section']?> <?php echo esc_attr($section_extra_classes) ?>" <?php echo $section_style; ?> <?php echo $bg_video_data_attr; ?> id="<?php echo $atts['main_section']?>">

<?php }?>

    <?php if($atts['container_section'] != ''){?>

    <div class="<?php echo $atts['container_section']?>">

        <?php }?>

        <?php echo do_shortcode( $content ); ?>

        <?php if($atts['container_section'] != ''){?>

    </div>

<?php }?>

</section>

