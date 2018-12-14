<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php if($atts['style_container'] != ''){?>
    <div class="<?php echo $atts['style_container']?>">
<?php }?>
<a href="<?php echo esc_attr($atts['link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="<?php echo $atts['style_button']?>">
	<span><?php echo $atts['label']; ?></span>
</a>
<?php if($atts['style_container'] != ''){?>
    </div>
<?php }?>