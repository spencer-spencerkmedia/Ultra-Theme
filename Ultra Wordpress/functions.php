<?php
/**
* Functions and definitions
**/


if ( ! function_exists( 'ultra_setup' )) :

  function ultra_setup() {
    load_theme_textdomain( 'ultra', get_template_directory() . '/languages' );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    register_nav_menus(
      array(
          'primary' => __( 'Primary', 'ultra' ),
          'footer' => __( 'Footer', 'ultra' ),
      )
    );

    add_theme_support(
      'html5', array('search-form','gallery','caption',)
    );

    add_theme_support('custom-logo');

    add_theme_support( 'responsive-embeds' );

    /*
     * Editor Style
     */
    add_editor_style( 'editor-style.css' );

    /*
     * WooCommerce
     */
    if ( apply_filters( 'ultra_add_woocommerce_support', true ) ) {
      // WooCommerce in general:
      add_theme_support( 'woocommerce' );
      // Enabling WooCommerce product gallery features (are off by default since WC 3.0.0):
      // zoom:
      add_theme_support( 'wc-product-gallery-zoom' );
      // lightbox:
      add_theme_support( 'wc-product-gallery-lightbox' );
      // swipe:
      add_theme_support( 'wc-product-gallery-slider' );
    }
  }

  require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

endif;
add_action( 'after_setup_theme', 'ultra_setup');

function ultra_scripts() {
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array());
  wp_enqueue_style( 'ultra-style', get_stylesheet_uri(), array());
  wp_enqueue_script( 'bootstrap-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' );
  wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' );
  wp_enqueue_script( 'ultra-script', get_template_directory_uri() . '/js/scripts.js' );
}
add_action( 'wp_enqueue_scripts', 'ultra_scripts' );

?>
