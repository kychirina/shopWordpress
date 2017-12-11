<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Storefront' ) ) :

	class Storefront {

		private static $structured_data;

		public function __construct() {
			add_action( 'after_setup_theme',          array( $this, 'setup' ) );			
		}

		public function setup() {
			// Declare WooCommerce support.
			add_theme_support( 'woocommerce' );
			add_theme_support( 'wc-product-gallery-zoom' );
			add_theme_support( 'wc-product-gallery-lightbox' );
			add_theme_support( 'wc-product-gallery-slider' );
		}		
	}
endif;

return new Storefront();
