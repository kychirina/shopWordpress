<!-- создать файл .htaccess в корневой папке WordPress -->

<!-- загружаем файл header.php -->
<?php get_header(); ?>
		<div class="content">
			<div class="main_content">
				<div class="wraper">
					<h2 class="page-title">Ничего не найдено .....</h2>
				</div>
			</div>
		<!-- загружаем файл sidebar.php -->
		<?php get_sidebar(); ?>
		</div>
<!-- загружаем файл footer.php -->
<?php get_footer(); ?>
</div>