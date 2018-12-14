<div class="item <?php echo $item['tab_class_main']?>" style="background: <?php echo $item['tab_background_color']?> url('<?=trim($item['tab_background_image']['data']['icon'])?>') center no-repeat;">
	<div class="the_content">
		<div class="row">
			<div class="col-8">
				<div class="the_text">
					<div class="the_des"><?=$item['tab_content']?></div>
					<div class="the_title"><?=$item['tab_title']?></div>
				</div>
			</div>
			<div class="col-4">
				<div class="the_img">
                    <?php
                    echo $item['tab_background_icon']['data']['icon']?"<img src='".$item['tab_background_icon']['data']['icon']."' alt='".$item['tab_title']."'/>":"<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGwAAADXCAQAAABVYnzwAAAAzklEQVR42u3PAQEAAAgCoPx/uh8KD8iVipiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJiYmJjYeOwBnVYA2EPYHRsAAAAASUVORK5CYII=\">
";
                    ?>
                </div>
			</div>
		</div>

	</div>
</div>