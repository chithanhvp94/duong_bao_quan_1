<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<?php
if(!empty($atts['options_class'])){
    echo '<div class="'.$atts['options_class'].'">';
}
if(!empty($atts['options_child_class'])){
    echo '<div class="'.$atts['options_child_class'].'">';
}
if(!empty($atts['title'])){
    echo '<div class="title_textbox">'.$atts['title'].'</div>';
}
echo '<div class="main_textbox">'.do_shortcode( $atts['text'] ).'</div>';
if(!empty($atts['options_child_class'])){
    echo '</div>';
}
if(!empty($atts['options_class'])){
    echo '</div>';
}
?>