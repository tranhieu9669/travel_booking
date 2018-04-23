<?php
namespace BookAwesome\Taxonomies;

class FacilitiesTaxonomie extends AbstractTaxonomies {

	protected $taxonomie = 'bookawesome_facilitie';

	protected $argsPostType = ['bookawesome_acmdt'];

	public function __construct(){
		parent::__construct();
	}

	public function labels(){
		return array(
				'name'              => _x( 'Facilities', 'taxonomy general name', 'bookawesome' ),
				'singular_name'     => _x( 'Facilitie', 'taxonomy singular name', 'bookawesome' ),
				'search_items'      => __( 'Search Facilities', 'bookawesome' ),
				'all_items'         => __( 'All Facilities', 'bookawesome' ),
				'parent_item'       => __( 'Parent Facilitie', 'bookawesome' ),
				'parent_item_colon' => __( 'Parent Facilitie:', 'bookawesome' ),
				'edit_item'         => __( 'Edit Facilitie', 'bookawesome' ),
				'update_item'       => __( 'Update Facilitie', 'bookawesome' ),
				'add_new_item'      => __( 'Add New Facilitie', 'bookawesome' ),
				'new_item_name'     => __( 'New Facilitie Name', 'bookawesome' ),
				'menu_name'         => __( 'Facilities', 'bookawesome' ),
			);
	}

	public function argsRegister(){
		return array(
			'hierarchical'      => true,
			'labels'            => $this->labels(),
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'bookawesome_facilitie' ),
		);
	}

	public function taxonomieName(){
		return $this->taxonomie;
	}
}
