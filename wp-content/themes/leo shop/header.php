<!doctype html>
<html>
<head>
<!-- название сайта и текущей страницы	 -->
<title><?php bloginfo('name'); wp_title(); ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- безопасное подключение стилей и скриптов -->
<?php wp_enqueue_scripts('mystyle', 'jquery','myscript'); ?>

<!-- подключение админ.панели -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="main-wrapper">	
<header class="header">
	<div class="header__top">
		<div class="info">
			<div class="info__language">
				<span>Язык:</span>
				<!-- добавление виджетов -->	
				<?php if( !dynamic_sidebar('sidebar-3') ): ?>	
				<?php endif; ?>
			</div>
			<div class="info__currency">
				<a href="">Валюта:  USD
					
				</a>
			</div>
		</div>
		<nav class="header_menu">
			<?php wp_nav_menu(array('theme_location' => 'header_menu', 'container' => 'false', 'menu_class' => 'header_menu', 'nav_menu_css_class' => 'header_menu-link' )); ?>
		</nav>	 
	</div>
	<div  class="header__bottom">
		<!-- название и описание сайта -->
		<h1 class="logo"><a href="<?php echo home_url(); ?>">
			<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo">
			<!-- <?php bloginfo('name'); ?>	 -->		
		</a></h1>		
		<!-- подключение меню -->
		<nav class="main_menu">
			<?php wp_nav_menu(array('theme_location' => 'main_menu', 'container' => 'false', 'menu_class' => 'main_menu')); ?>
		</nav>
			<!-- подключение поиска -->
			<!-- добавление виджетов -->	
			<?php if( !dynamic_sidebar('sidebar-2') ): ?>	
			<?php endif; ?>
		<div class="label__button">
			<a href="">
				<img src="<?php bloginfo('template_directory'); ?>/img/label.png" alt="label">
			</a>			
		</div>
		<div class="basket__button">
			<!-- Вывести кнопку «Просмотр корзины»  -->
			<?php woocommerce_widget_shopping_cart_button_view_cart( ); ?>		
		</div>
		<div class="basket__count">
			<!-- Вывести итоговые значения корзины -->			  
			<?php woocommerce_cart_totals( ); ?>			
		</div>
			
			
	</div>

	<!-- слайдер -->
<!-- 	<?php $slider = new WP_Query(array('post_type' => 'slider', 'posts_per_page' => '-1','order' => 'ASC')); ?>
	<?php  if ( $slider -> have_posts() ) : ?>
	<div class="slaider" > 				
	<?php	while ( $slider -> have_posts() ) : $slider -> the_post(); ?>
		<div class="slaider-item">
			<?php the_post_thumbnail( 'full' ); ?>
			<div class="slaider-text slogan">Lets Make Something Great
				<div>I’m Front-End&nbsp;developer that prides ourself on being strategic brand</div>
			</div>			
		</div>
	<?php endwhile; ?>		
	</div>
	<?php else: ?>
	 <p>Место под слайдер</p>
	<?php endif; ?>  
	<?php wp_reset_query(); ?>	 -->
		


</header>
	
