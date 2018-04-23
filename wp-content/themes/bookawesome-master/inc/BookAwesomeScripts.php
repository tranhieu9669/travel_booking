<?php

/**
* 
*/
class BookAwesomeScripts
{
	
	public function __construct(){
		add_action( 'wp_enqueue_scripts', array($this, 'frontendScripts') );
		add_action( 'wp_enqueue_scripts', array($this, 'frontendStyles') );
	}

	public function frontendScripts(){
		global $bookAwesomeTheme;
		wp_enqueue_script( 'bookawesome-admin-jquery', get_template_directory_uri() . '/assets/js/library/jquery-1.11.0.min.js', array(), $bookAwesomeTheme->version, true );
		wp_enqueue_script( 'bookawesome-maps', 'http://maps.google.com/maps/api/js?sensor=false', array(), $bookAwesomeTheme->version, true );
		wp_enqueue_script( 'jquery-ui-core' );
		wp_enqueue_script( 'jquery-ui-datepicker' );
		wp_enqueue_script( 'bookawesome-parallax', get_template_directory_uri() . '/assets/js/library/parallax.min.js', array('jquery'), $bookAwesomeTheme->version, true );
		wp_enqueue_script( 'bookawesome-carousel', get_template_directory_uri() . '/assets/js/library/owl.carousel.min.js', array('jquery'), $bookAwesomeTheme->version, true );

		wp_enqueue_script( 'bookawesome-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), $bookAwesomeTheme->version, true );
	}

	public function frontendStyles(){
		global $bookAwesomeTheme;
		wp_enqueue_style( 'bookawesome-googleapis', 'http://fonts.googleapis.com/css?family=Lato:300,400%7COpen+Sans:300,400,600', $bookAwesomeTheme->version, true );
		wp_enqueue_style( 'bookawesome-awesome', get_template_directory_uri() . '/assets/css/library/font-awesome.min.css', $bookAwesomeTheme->version, true );
		wp_enqueue_style( 'bookawesome-bootstrap', get_template_directory_uri() . '/assets/css/library/bootstrap.min.css', $bookAwesomeTheme->version, true );
		wp_enqueue_style( 'bookawesome-jquery-ui', get_template_directory_uri() . '/assets/css/library/jquery-ui.min.css', $bookAwesomeTheme->version, true );
		wp_enqueue_style( 'bookawesome-owl-carousel', get_template_directory_uri() . '/assets/css/library/owl.carousel.css', $bookAwesomeTheme->version, true );
		wp_enqueue_style( 'style-bookawesome', get_template_directory_uri() . '/assets/css/style.css' );
	}
}
