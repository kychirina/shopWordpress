
		<!-- загружаем файл header.php -->
		<?php get_header(); ?>
		<div class="content">
			<div class="main_content">
				<div><img src="<?php bloginfo('template_directory'); ?>/img/Layer_66.png" alt="Layer_66"></div>
				<div class="wraper">
				<!-- вывод результатов поиска -->
				<h2 class="page-title">Результаты поиска:</h2>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>						
					<div class="blog_content">
						<!-- вывод количества совпадений -->
						<div>							
							<?php $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e('');  echo $count . _e('найдено ');  ' '; _e(' совпадений для'); wp_reset_query(); ?>
							<span>&laquo;<?php echo get_search_query(); ?>&raquo;</span>
						</div>
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
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</div>
							<!-- текст анонса поста до тега далее-->
							<div class="text_box">
								<?php the_content('далее'); ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
                <!-- постраничная навигация -->
				<div class="pagination">			
					<?php
					global $wp_query;

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
					<div class="main_content search_none">
						<h3>По запросу ничего не найдено</h3>
					</div>
				<?php endif; ?>	

				</div>	
				<div class="krep"><img src="<?php bloginfo('template_directory'); ?>/img/Layer_55.png" alt="Layer_55"></div>
			</div>
		<!-- загружаем файл sidebar.php -->
		<?php get_sidebar(); ?>
		</div>
	<!-- загружаем файл footer.php -->
	<?php get_footer(); ?>
	</div>
</body>
</html>