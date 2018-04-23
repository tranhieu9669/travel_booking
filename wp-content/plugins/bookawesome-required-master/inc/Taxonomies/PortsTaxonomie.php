<?php
namespace BookAwesome\Taxonomies;

class PortsTaxonomie extends AbstractTaxonomies {

	protected $taxonomie = 'bookawesome_ports';

	protected $argsPostType = ['bookawesome_cruise'];

	public function __construct(){
		parent::__construct();
	}

	public function labels(){
		return array(
				'name'              => _x( 'Ports', 'taxonomy general name', 'bookawesome' ),
				'singular_name'     => _x( 'Port', 'taxonomy singular name', 'bookawesome' ),
				'search_items'      => __( 'Search Ports', 'bookawesome' ),
				'all_items'         => __( 'All Ports', 'bookawesome' ),
				'parent_item'       => __( 'Parent Port', 'bookawesome' ),
				'parent_item_colon' => __( 'Parent Port:', 'bookawesome' ),
				'edit_item'         => __( 'Edit Port', 'bookawesome' ),
				'update_item'       => __( 'Update Port', 'bookawesome' ),
				'add_new_item'      => __( 'Add New Port', 'bookawesome' ),
				'new_item_name'     => __( 'New Port Name', 'bookawesome' ),
				'menu_name'         => __( 'Ports', 'bookawesome' ),
			);
	}

	public function argsRegister(){
		return array(
			'hierarchical'      => true,
			'labels'            => $this->labels(),
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'bookawesome_port' ),
		);
	}

	public function taxonomieName(){
		return $this->taxonomie;
	}
}
