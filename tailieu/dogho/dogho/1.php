<?php 
if($parent[0] == 'dich-vu'): 
$pass = new WP_Query(array('post_type'=>'pass'));
if($pass->have_posts()):
    while($pass->have_posts()):
        $pass->the_post();		
		 $idpost = get_field('bai_viet');
		 $mk = get_field('mat_khau'); ?>
		<?php if ( have_posts() ) : 
			    while ( have_posts() ) : 
			        the_post(); ?>
			        <?php if($idpost != get_the_ID()): ?>
			        	<div class="no-gutters <?php the_ID(); ?>">
        					<a href="javascript:;" class="gallery-img  animate-box click_show_gallery"  data-toggle="modal" data-target="#modalgallerys" data-img="<?php the_post_thumbnail_url( $post->ID ); ?>" data-id="<?php echo $post->ID ?>">
        					    
        					<img src="<?php the_post_thumbnail_url( $post->ID ); ?>">
        						<div class="desc text-center">
        							<h2><?php echo get_the_title($post->ID ); ?></h2>
        						</div>
        					</a>
        				</div>
			        	<?php else: ?>
						<div class="no-gutters <?php the_ID(); ?>">
        					<a href="javascript:void(0)" class="gallery-img  animate-box check_pass" data-id="<?php the_ID(); ?>" >
        					    <i class="fas fa-lock"></i>
        					<img src="<?php the_post_thumbnail_url( $post->ID ); ?>">
        						<div class="desc text-center">
        							<h2><?php echo get_the_title($post->ID ); ?></h2>
        						</div>
        					</a>
        				</div>
			        	<?php endif; ?>
			    <?php endwhile; ?>

			<?php endif; ?>

<?php endwhile;
else: ?>

<?php endif; ?>
<?php else: ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			    <div class="no-gutters <?php the_ID(); ?>">
					<a href="javascript:;" class="gallery-img  animate-box click_show_gallery"  data-toggle="modal" data-target="#modalgallerys" data-img="<?php the_post_thumbnail_url( $post->ID ); ?>" data-id="<?php echo $post->ID ?>">
					    
					<img src="<?php the_post_thumbnail_url( $post->ID ); ?>">
						<div class="desc text-center">
							<h2><?php echo get_the_title($post->ID ); ?></h2>
						</div>
					</a>
				</div>
	<?php endwhile;endif; wp_reset_postdata(); ?>
<?php endif; ?>

<?php		 
$pass = new WP_Query(array('post_type'=>'pass'));
	
		
if($pass->have_posts()):
    while($pass->have_posts()):
        $pass->the_post();		
		 $idpost = get_field('bai_viet');
		 $mk = get_field('mat_khau'); ?>

			<?php if ( have_posts() ) : 
			    while ( have_posts() ) : 
			        the_post(); ?>
			        <?php if($idpost != get_the_ID()): ?>
			        
        			    <div class="no-gutters <?php the_ID(); ?>">
        					<a href="javascript:;" class="gallery-img  animate-box click_show_gallery"  data-toggle="modal" data-target="#modalgallerys" data-img="<?php the_post_thumbnail_url( $post->ID ); ?>" data-id="<?php echo $post->ID ?>">
        					    
        					<img src="<?php the_post_thumbnail_url( $post->ID ); ?>">
        						<div class="desc text-center">
        							<h2><?php echo get_the_title($post->ID ); ?></h2>
        						</div>
        					</a>
        				</div>
        				
        				<?php else: ?>
        				<div class="no-gutters <?php the_ID(); ?>">
        					<a href="javascript:void(0)" class="gallery-img  animate-box check_pass" data-id="<?php the_ID(); ?>" >
        					    <i class="fas fa-lock"></i>
        					<img src="<?php the_post_thumbnail_url( $post->ID ); ?>">
        						<div class="desc text-center">
        							<h2><?php echo get_the_title($post->ID ); ?></h2>
        						</div>
        					</a>
        				</div>
        				<?php endif; ?>
			
			<?php endwhile; wp_reset_postdata(); ?>
			<?php else: ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			    <div class="no-gutters <?php the_ID(); ?>">
					<a href="javascript:;" class="gallery-img  animate-box click_show_gallery"  data-toggle="modal" data-target="#modalgallerys" data-img="<?php the_post_thumbnail_url( $post->ID ); ?>" data-id="<?php echo $post->ID ?>">
					    
					<img src="<?php the_post_thumbnail_url( $post->ID ); ?>">
						<div class="desc text-center">
							<h2><?php echo get_the_title($post->ID ); ?></h2>
						</div>
					</a>
				</div>
			<?php endwhile;endif;endif; wp_reset_postdata(); ?>
	<?php endwhile;
	endif; ?>
<?php endif; ?>