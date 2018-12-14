<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<?php
if($atts['data_template'] != ''){?>
<div class="<?php echo $atts['container_class']?>" <?=$atts['data_template']?>>
<?php }else{?>
<div class="<?php echo $atts['container_class']?>">
<?php }
?>

    <?php
    if(!empty($atts['title']) || $atts['title'] != ''){?>
    <div class="the_title"><?php print_r($atts['title']);?></div>
    <?php } ?>
    <?php
    if(!empty($atts['main_class']) || $atts['main_class'] != ''){?>
        <div class="<?php echo $atts['main_class']?>">
    <?php } ?>
    <?php foreach ( fw_akg( 'tabs', $atts, array() ) as $item ) :
        include(AKASA_LINK_THEME.$atts['chon_template']);
    endforeach; ?>
    <?php
    if(!empty($atts['main_class']) || $atts['main_class'] != ''){?>
        </div>
    <?php } ?>
</div>