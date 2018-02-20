<?php
/**
 * Enqueue scripts and styles.
 */
function eshop_scripts() {

	wp_enqueue_style('bootstrap', get_theme_file_uri('css/bootstrap.min.css'));
	wp_enqueue_style('fontawesome', get_theme_file_uri('/css/font-awesome.min.css'));
	wp_enqueue_style('rangeSlider', get_theme_file_uri('/css/ion.rangeSlider.css'));
	wp_enqueue_style('rangeSlider-skinFlat', get_theme_file_uri('/css/ion.rangeSlider.skinFlat.css'));
	wp_enqueue_style('bxslider', get_theme_file_uri('/css/jquery.bxslider.css'));
	wp_enqueue_style('fancybox', get_theme_file_uri('/css/jquery.fancybox.css'));
	wp_enqueue_style('flexslider', get_theme_file_uri('/css/flexslider.css'));
	wp_enqueue_style('swiper', get_theme_file_uri('/css/swiper.css'));
	wp_enqueue_style( 'eshop-style', get_stylesheet_uri() );
	wp_enqueue_style('eshop-media', get_theme_file_uri('/css/media.css'));

	// wp_enqueue_script( 'eshop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_theme_file_uri('/js/bootstrap.min.js', array('jquery') ,'1.3.5', true));
	
	wp_enqueue_script('bxslider', get_theme_file_uri('/js/jquery.bxslider.min.js', array('jquery') ,'1.3.5', true));
	wp_enqueue_script('fancybox', get_theme_file_uri('/js/fancybox/fancybox.js', array('jquery') ,'1.3.5', true));
	wp_enqueue_script('fancybox-thumb', get_theme_file_uri('/js/fancybox/helpers/jquery.fancybox-thumbs.js', array('jquery') ,'1.3.5', true));
	wp_enqueue_script('flexslider', get_theme_file_uri('/js/jquery.flexslider-min.js', array('jquery') ,'1.3.5', true));
	wp_enqueue_script('swiper', get_theme_file_uri('/js/swiper.jquery.min.js', array('jquery') ,'1.3.5', true));
	wp_enqueue_script('waypoints', get_theme_file_uri('/js/jquery.waypoints.min.js', array('jquery') ,'1.3.5', true));
	wp_enqueue_script('progressbar', get_theme_file_uri('/js/progressbar.min.js', array('jquery') ,'1.3.5', true));
	wp_enqueue_script('rangeSlider', get_theme_file_uri('/js/ion.rangeSlider.min.js', array('jquery') ,'1.3.5', true));
	wp_enqueue_script('chosen', get_theme_file_uri('/js/chosen.jquery.min.js', array('jquery') ,'1.3.5', true));
	wp_enqueue_script('Brazzers-Carousel', get_theme_file_uri('/js/jQuery.Brazzers-Carousel.js', array('jquery') ,'1.3.5', true));
	wp_enqueue_script('eshop-plugins', get_theme_file_uri('/js/plugins.js', array('jquery') ,'1.3.5', true));
	wp_enqueue_script('eshop-main', get_theme_file_uri('/js/main.js', array('jquery') ,'1.3.5', true));
	
	wp_enqueue_script( 'eshop-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'eshop_scripts' );