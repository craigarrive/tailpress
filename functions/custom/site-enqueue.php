<?php

// ENQUEUE CUSTOM SCRIPTS
function custom_scripts() {
  $theme = wp_get_theme();

  wp_enqueue_script( 'jq-link', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js', array(), null, false );
  wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
  // wp_enqueue_script( 'jq-inputmask', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js', array(), null, false );
  wp_enqueue_script( 'slick-link', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), null, false );
  // wp_enqueue_script( 'jq-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), null, false );
  // wp_enqueue_script( 'jq-scrollTrig', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array(), null, false );
  // wp_enqueue_script( 'jq-scrollSmooth', get_stylesheet_directory_uri() . '/js/ScrollSmoother.min.js', array(), null, false );  
  // wp_enqueue_script( 'jq-scrollTo', get_stylesheet_directory_uri() . '/js/ScrollToPlugin.min.js', array(), null, false ); 

  // wp_enqueue_script( 'jq-fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', array(), null, false ); 
  // wp_enqueue_script( 'backstretch-script', get_stylesheet_directory_uri() . '/js/vendor/backstretch.min.js', array(), null, true );
  // wp_enqueue_script( 'fancybox-script', get_stylesheet_directory_uri() . '/js/vendor/fancybox.min.js', array(), null, true );
  // wp_enqueue_script( 'gmap-link', 'https://maps.googleapis.com/maps/api/js?key=[ENTER API KEY]"', array(), null, true );

}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );


/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}


// ENQUEUE CUSTOM STYLES
function custom_styles() {
  $theme = wp_get_theme();

  // wp_enqueue_style( 'fancybox-style', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css', array(), null, false);
  wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
  wp_enqueue_style( 'slick-slider', tailpress_asset( 'css/slick-slider.css' ), array(), $theme->get( 'Version' ) );
  wp_enqueue_style( 'fa-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), null, false );
  //wp_enqueue_style( 'gfont-style', '{GOOGLE FONT LINK}', array(), null, 'all' );

}
add_action( 'wp_enqueue_scripts', 'custom_styles' );



?>