<?php
namespace BookAwesome\PostType;

use BookAwesome\PostType\MetaBox\HotelMetaBox\TestMetaBox;

class HotelPostType extends AbstractPostType {

	protected $posType = 'bookawesome_acmdt';

	public function __construct(){
		parent::__construct();
	}

	/**
	 * Handle add metabox for post type.
	 * @return void
	 */
	public function metaBox(){
		add_action( 'add_meta_boxes', array(new TestMetaBox($this), 'register') );
	}

	public function labels(){
		return array(
			'name'                  => _x( 'Accomodations', 'Accomodation General Name', 'bookawesome' ),
			'singular_name'         => _x( 'Accomodation', 'Accomodation Singular Name', 'bookawesome' ),
			'menu_name'             => __( 'Accomodations', 'bookawesome' ),
			'name_admin_bar'        => __( 'Accomodations', 'bookawesome' ),
			'archives'              => __( 'Item Archives', 'bookawesome' ),
			'attributes'            => __( 'Item Attributes', 'bookawesome' ),
			'parent_item_colon'     => __( 'Parent Item:', 'bookawesome' ),
			'all_items'             => __( 'All Items', 'bookawesome' ),
			'add_new_item'          => __( 'Add New Item', 'bookawesome' ),
			'add_new'               => __( 'Add New', 'bookawesome' ),
			'new_item'              => __( 'New Item', 'bookawesome' ),
			'edit_item'             => __( 'Edit Item', 'bookawesome' ),
			'update_item'           => __( 'Update Item', 'bookawesome' ),
			'view_item'             => __( 'View Item', 'bookawesome' ),
			'view_items'            => __( 'View Items', 'bookawesome' ),
			'search_items'          => __( 'Search Item', 'bookawesome' ),
			'not_found'             => __( 'Not found', 'bookawesome' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'bookawesome' ),
			'featured_image'        => __( 'Featured Image', 'bookawesome' ),
			'set_featured_image'    => __( 'Set featured image', 'bookawesome' ),
			'remove_featured_image' => __( 'Remove featured image', 'bookawesome' ),
			'use_featured_image'    => __( 'Use as featured image', 'bookawesome' ),
			'insert_into_item'      => __( 'Insert into item', 'bookawesome' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'bookawesome' ),
			'items_list'            => __( 'Items list', 'bookawesome' ),
			'items_list_navigation' => __( 'Items list navigation', 'bookawesome' ),
			'filter_items_list'     => __( 'Filter items list', 'bookawesome' )
		);
	}

	public function argsRegister(){
		return array(
			'label'                 => __( 'Accomodation', 'bookawesome' ),
			'description'           => __( 'Accomodation Description', 'bookawesome' ),
			'labels'                => $this->labels(),
			'supports'              => array( 'title', 'editor' ),
			'taxonomies'            => array( 'post_tag', 'bookawesome_test' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'menu_icon'             => BOOKAWESOME_BASE_URL_PLUGIN . '/assets/backend/imgs/icon-hotel.png',
		);
	}

	public function postTypeName(){
		return $this->posType;
	}
}
