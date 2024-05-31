<?php

namespace Theme\Inc\Classes\Setup;

use Theme\Inc\Traits\Singleton_Trait;

class Taxonomy {
	use Singleton_Trait;
	
	private function __construct() {
		add_action( 'init', [ $this, 'create_taxonomy' ] );
	}
	
	public function create_taxonomy() {
		register_taxonomy( 'event_cat', [ 'event' ], [
			'label'             => '', // определяется параметром $labels->name
			'labels'            => [
				'name'              => 'Event Category',
				'singular_name'     => 'Event Category',
				'search_items'      => 'Search Event Category',
				'all_items'         => 'All Event Category',
				'view_item '        => 'View Event Category',
				'parent_item'       => 'Parent Event Category',
				'parent_item_colon' => 'Parent Event Category:',
				'edit_item'         => 'Edit Event Category',
				'update_item'       => 'Update Event Category',
				'add_new_item'      => 'Add New Event Category',
				'new_item_name'     => 'New Event Category Name',
				'menu_name'         => 'Event Category',
				'back_to_items'     => '← Back to Event Category',
			],
			'description'       => '',
			'public'            => true,
			'hierarchical'      => false,
			'rewrite'           => true,
			'capabilities'      => array(),
			'meta_box_cb'       => 'post_categories_meta_box',
			'show_admin_column' => false,
			'show_in_rest'      => null,
			'rest_base'         => null,
		] );
	}
}