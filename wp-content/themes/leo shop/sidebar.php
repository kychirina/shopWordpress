<div class="sidebar">
	<!-- слайдер -->

	<div class="slaider_container">
	<?php $slider = new WP_Query(array('post_type' => 'slider', 'posts_per_page' => '-1','order' => 'ASC')); ?>
		<?php  if ( $slider -> have_posts() ) : ?>		
		<div class="slider">
			<input checked type="radio" name="slider" id="switch1">
			<input type="radio" name="slider" id="switch2">
			<input type="radio" name="slider" id="switch3">
			<input type="radio" name="slider" id="switch4">
			<div id="slides">
				<div class="overflow">
					<ul class="image">
						<?php	while ( $slider -> have_posts() ) : $slider -> the_post(); ?>
						<li><?php the_post_thumbnail('full','class=picture_min'); ?>
							
						</li>
						<?php endwhile; ?>
					</ul>
					<div class="slide_text">Featured Products</div>
					<div class="slide_buton">
						<?php woocommerce_widget_shopping_cart_proceed_to_checkout(); ?>
					</div> 																
				</div>
			</div>
			<div id="controls">
				<label for="switch1"></label>
				<label for="switch2"></label>
				<label for="switch3"></label>
			</div>
			<div id="active">
				<label for="switch1"></label>
				<label for="switch2"></label>
				<label for="switch3"></label>
			</div>				
		</div>
		<?php else: ?>
		 <p>Место под слайдер</p>
		<?php endif; ?>  
		<?php wp_reset_query(); ?> 
	</div> 


	<!-- добавление виджетов -->	
	<?php if( !dynamic_sidebar('sidebar-1') ): ?>	
	<?php endif; ?> 
</div>




