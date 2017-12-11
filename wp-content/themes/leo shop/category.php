<!-- загружаем файл header.php -->
<?php get_header(); ?>
	
			

		<div class="content">			
			<div class="main_content">				
				<!-- подключение изображений -->
				<div><img src="<?php bloginfo('template_url'); ?>/img/Layer_66.png" alt="Layer_66"></div>
				<div class="wraper">
				<!-- вывод названия категории -->
				<h2 class=" "><?php single_cat_title( 'Category: ' ); ?></h2>	
				<!-- цикл вывода записей theloop -->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
					<div class="blog_content">
						<div class="box_blog">
							<div class="line"></div>
							<!-- заголовок поста и ссылка на него -->
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	
							<!-- дата поста -->
							<div class="data_box">
								<?php the_time('j F Y'); ?>
							</div>
							<!-- рубрика поста -->
							<div class="category_box">
								<?php the_category(); ?>
							</div>
							<!-- автор поста -->
							<div class="author_box">
								author: <?php the_author(); ?>
							</div>
							<!-- коментарии к посту и их количество -->
							<div class="comments_box">
								<a href="<?php comments_link(); ?>">comments ( <?php comments_number('0', '1', '%'); ?> )</a>
							</div>						
							<div class="line"></div>
							<!-- миниатюра анонса поста -->
							<div class="picture_box">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full','class=picture_min'); ?></a>
							</div>
							<!-- текст анонса поста -->
							<div class="text_box">
								<!-- до тега далее -->
								<?php the_content('далее'); ?>
								<!-- отрывок -->
								<?php the_excerpt(); ?>	
								<a href="<?php the_permalink(); ?>">Далее ...</a>							
							</div>
						</div>
					</div>
				<?php endwhile; ?>
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
					) );
					?>
				</div>				
				<?php else: ?>
				<?php endif; ?>						
				</div>	
				<!-- подключение изображений -->
				<div class="krep"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Layer_55.png" alt="Layer_55"></div>
			</div>
		<!-- загружаем файл sidebar.php -->
		<?php get_sidebar(); ?>
		</div>
	<!-- загружаем файл footer.php -->
	<?php get_footer(); ?>
	</div>