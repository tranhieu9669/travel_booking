<?php
namespace BookAwesome\Taxonomies;

class LocationTaxonomie extends AbstractTaxonomies {

	protected $taxonomie = 'bookawesome_location';

	protected $argsPostType = ['bookawesome_tour'];

	public function __construct(){
		parent::__construct();
	}

	public function labels(){
		return array(
				'name'              => _x( 'Locations', 'taxonomy general name', 'bookawesome' ),
				'singular_name'     => _x( 'Location', 'taxonomy singular name', 'bookawesome' ),
				'search_items'      => __( 'Search Locations', 'bookawesome' ),
				'all_items'         => __( 'All Locations', 'bookawesome' ),
				'parent_item'       => __( 'Parent Location', 'bookawesome' ),
				'parent_item_colon' => __( 'Parent Location:', 'bookawesome' ),
				'edit_item'         => __( 'Edit Location', 'bookawesome' ),
				'update_item'       => __( 'Update Location', 'bookawesome' ),
				'add_new_item'      => __( 'Add New Location', 'bookawesome' ),
				'new_item_name'     => __( 'New Location Name', 'bookawesome' ),
				'menu_name'         => __( 'Locations', 'bookawesome' ),
			);
	}

	public function argsRegister(){
		return array(
			'hierarchical'      => true,
			'labels'            => $this->labels(),
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'bookawesome_location' ),
		);
	}

	public function taxonomieName(){
		return $this->taxonomie;
	}
}
