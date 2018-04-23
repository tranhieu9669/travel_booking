<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'No direct script access allowed' );
}

/**
* @package AfterSetupTheme
* @version 1.0
* @author lookawesome team
*
* Class after setup theme
*/
// file nay de setup cac setting luc active cai theme len nhe.
// vv/ noi chung ong can luc active len no lam gi thi viet vao day.
class AfterSetupTheme{

	public function __construct(){
		add_action( 'after_setup_theme', array( $this, 'setup' ) );

		add_filter( 'the_title', array( $this, 'siteTitle' ) );

		add_action( 'widgets_init', array( $this, 'widgetsInit' ) );
	}

	public function setup(){
		load_theme_textdomain( 'bookawesome', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'automatic-feed-links' );

		// set kich thuoc anh upload. biet roi ys gi. them vao day
		add_theme_support( 'post-thumbnails' );

		global $content_width;

		if ( ! isset( $content_width ) ) $content_width = 640;

		// dang ky menu
		register_nav_menus(
			array(
				'bookawesome-main-menu' => __( 'Primary Menu', 'bookawesome' ),
				'bookawesome-nav-menu-1' => __( 'Nav Menu 1', 'bookawesome' ),
				'bookawesome-nav-menu-2' => __( 'Nav Menu 2', 'bookawesome' )
			)
		);
	}

	public function siteTitle($title){
		if ( $title == '' ) {
			return '&rarr;';
		} else {
			return $title;
		}
	}

	public function widgetsInit(){

		//dang ky wwidget
		register_sidebar( array (
			'name' => __( 'BookAwesome Sidebar', 'bookawesome' ),
			'id'   => 'blog-sidebar-area',
			'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
			'after_widget'  => "</li>",
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			) 
		);

		register_sidebar( array (
			'name' => __( 'BookAwesome Footer 1', 'bookawesome' ),
			'id'   => 'bookawesome-footer-area-1',
			'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
			'after_widget'  => "</li>",
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			) 
		);

		register_sidebar( array (
			'name' => __( 'BookAwesome Footer 2', 'bookawesome' ),
			'id'   => 'bookawesome-footer-area-2',
			'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
			'after_widget'  => "</li>",
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			) 
		);

		register_sidebar( array (
			'name' => __( 'BookAwesome Footer 3', 'bookawesome' ),
			'id'   => 'bookawesome-footer-area-3',
			'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
			'after_widget'  => "</li>",
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			) 
		);

		register_sidebar( array (
			'name' => __( 'BookAwesome Footer 4', 'bookawesome' ),
			'id'   => 'bookawesome-footer-area-4',
			'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
			'after_widget'  => "</li>",
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			) 
		);
	}
}

new AfterSetupTheme;
