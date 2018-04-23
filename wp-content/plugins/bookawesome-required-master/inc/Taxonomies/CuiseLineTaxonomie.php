<?php
namespace BookAwesome\Taxonomies;

class CuiseLineTaxonomie extends AbstractTaxonomies {

	protected $taxonomie = 'bookawesome_cruise_line';

	protected $argsPostType = ['bookawesome_cruise'];

	public function __construct(){
		parent::__construct();
	}

	public function labels(){
		return array(
				'name'              => _x( 'Cruise Line', 'taxonomy general name', 'bookawesome' ),
				'singular_name'     => _x( 'Cruise Line', 'taxonomy singular name', 'bookawesome' ),
				'search_items'      => __( 'Search Cruise Line', 'bookawesome' ),
				'all_items'         => __( 'All Cruise Line', 'bookawesome' ),
				'parent_item'       => __( 'Parent Cruise Line', 'bookawesome' ),
				'parent_item_colon' => __( 'Parent Cruise Line:', 'bookawesome' ),
				'edit_item'         => __( 'Edit Cruise Line', 'bookawesome' ),
				'update_item'       => __( 'Update Cruise Line', 'bookawesome' ),
				'add_new_item'      => __( 'Add New Cruise Line', 'bookawesome' ),
				'new_item_name'     => __( 'New Cruise Line Name', 'bookawesome' ),
				'menu_name'         => __( 'Cruise Line', 'bookawesome' ),
			);
	}

	public function argsRegister(){
		return array(
			'hierarchical'      => true,
			'labels'            => $this->labels(),
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'bookawesome_cruise_line' ),
		);
	}

	public function taxonomieName(){
		return $this->taxonomie;
	}
}
