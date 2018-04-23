<?php
namespace BookAwesome\Taxonomies;

class AreaTaxonomie extends AbstractTaxonomies {

	protected $taxonomie = 'bookawesome_area';

	protected $argsPostType = [
								'bookawesome_cruise',
								'bookawesome_tour', 
								'bookawesome_acmdt', 
								'bookawesome_car', 
								'bookawesome_flight', 
								'bookawesome_package'
							];

	public function __construct(){
		parent::__construct();
	}

	public function labels(){
		return array(
				'name'              => _x( 'Area', 'taxonomy general name', 'bookawesome' ),
				'singular_name'     => _x( 'Area', 'taxonomy singular name', 'bookawesome' ),
				'search_items'      => __( 'Search Area', 'bookawesome' ),
				'all_items'         => __( 'All Area', 'bookawesome' ),
				'parent_item'       => __( 'Parent Area', 'bookawesome' ),
				'parent_item_colon' => __( 'Parent Area:', 'bookawesome' ),
				'edit_item'         => __( 'Edit Area', 'bookawesome' ),
				'update_item'       => __( 'Update Area', 'bookawesome' ),
				'add_new_item'      => __( 'Add New Area', 'bookawesome' ),
				'new_item_name'     => __( 'New Area Name', 'bookawesome' ),
				'menu_name'         => __( 'Area', 'bookawesome' ),
			);
	}

	public function argsRegister(){
		return array(
			'hierarchical'      => true,
			'labels'            => $this->labels(),
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'bookawesome_area' ),
		);
	}

	public function taxonomieName(){
		return $this->taxonomie;
	}
}
