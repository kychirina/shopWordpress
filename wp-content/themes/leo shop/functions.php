<?php
/* функция стилей и скриптов*/
function registr_style_script()
{
 	wp_enqueue_style( 'mystyle', get_template_directory_uri() . '/css/style.css'); 
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js');	
	wp_enqueue_script('myscript', get_template_directory_uri() . '/js/script.js');		
}

/* добавление стилей и скриптов - wp_enqueue_scripts*/
add_action( 'wp_enqueue_scripts', 'registr_style_script' );

/* добавление меню*/
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'main_menu', 'main_menu' );
	register_nav_menu( 'header_menu', 'header_menu' );
	register_nav_menu( 'footer_menu', 'footer_menu' );
}
/*Добавим CSS классы ко всем меню*/
add_filter( 'footer_menu', 'menu_li_class' );
function menu_li_class($classes){
	$classes = 'footer_menu-link';
	return $classes;
}
/* добавление миниатюры записи*/
add_theme_support('post-thumbnails');
set_post_thumbnail_size('680', '9999', true);

/* добавление виджетов*/
/*add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
	register_sidebar( array(
		'name'          => "Sidebar",
		'id'            => "sidebar",
		'before_widget' => '<div class="sidebar_vidget">',
		'after_widget'  => "</div>",
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		)	
	);
}*/


add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){	
	$args = array(
		'name'          => 'Sidebar %d',
		'id'            => "sidebar",
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>' 
	);
	register_sidebars( 3, $args );
}



/*добавить слайдер*/
add_action( 'init', 'slider' );
function slider()
{
	register_post_type( 'slider', array(
		'public' => true,
		'supports' => array ('title', 'thumbnail'),
		'labels' => array(
			'name' => 'Слайдер',
			'all_items' => 'Все слайды',
			'add_new' => 'Добавить новый',
			'add_new_item' => 'Добавить новый слайд'
			)
	) );
}

/*поддержка woocommerce*/
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

$storefront = (object) array(
	'version' => $storefront_version,
	'main'    => require 'inc/class-storefront.php',	
);



?>