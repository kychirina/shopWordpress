
<!-- загружаем файл header.php -->
<?php get_header(); ?>
	<div class="content__box">
		<div class="content">
			<!-- подключаем каталог товаров -->
	        <?php woocommerce_content();?> 

	<!-- 		<div  class="products__box">
				<div class="content__tytle"><?php woocommerce_template_single_meta(); ?></div>			
			</div>
	        <div class="product__box">
	        	<a class="product__link" href="http://magazinewordpress/product/lorem-ipsum-is-simply/">
	        		<div class="product__ground"></div>
	        		<div class="product__pict"><?php woocommerce_template_loop_product_thumbnail(); ?></div>        		 							
	        	</a>
	        	<div class="product__title"><?php woocommerce_template_single_title(); ?></div>
	        	<div class="product__price"><?php woocommerce_template_loop_price(); ?></div>
	        	<div class="product__icon">
	        		<?php woocommerce_external_add_to_cart(); ?>
	        		<img src="<?php bloginfo('template_directory'); ?>/img/product_icon.png" alt="product_icon">
	        	</div>					
	        </div> -->


		</div>
		<!-- загружаем файл header.php -->
		<?php get_sidebar(); ?>
	</div>

	<!-- постраничная навигация -->
	<div class="pagination">			
		<?php
			//global $wp_query;
			$big = 999999999; // need an unlikely integer
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'prev_text' => __('« '),
				'next_text' => __(' »'),
				'total' => $wp_query->max_num_pages
			));
		?>
	</div>
	
	<!-- загружаем файл footer.php -->
	<?php get_footer(); ?>
<!-- подключение админ.панели -->
<?php wp_footer(); ?>		

</div>



</body>
</html>