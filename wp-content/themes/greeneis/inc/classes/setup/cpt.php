<?php

namespace Theme\Inc\Classes\Setup;

use Theme\Inc\Traits\Singleton_Trait;

class CPT {
	use Singleton_Trait;
	
	private function __construct() {
		add_action( 'init', [ $this, 'register_post_type' ], 20 );
	}
	
	public function register_post_type() {
		register_post_type(
			'event',
			array(
				'labels'            => array(
					'name'               => 'Social Events',
					'singular_name'      => 'Social Events',
					'add_new'            => 'Add New',
					'add_new_item'       => 'Add New Social Events',
					'edit_item'          => 'Edit Video',
					'new_item'           => 'New Social Events',
					'view_item'          => 'View Social Events',
					'search_items'       => 'Search Social Events',
					'not_found'          => 'Social Events Not Found',
					'not_found_in_trash' => 'is empty',
					'menu_name'          => 'Social Events',
				),
				'public'            => true,
				'show_ui'           => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'show_in_rest'      => true,
				'show_tagcloud'     => true,
				'query_var'         => true,
				'menu_icon'         => 'dashicons-groups',
				'supports'          => array( 'title', 'thumbnail', 'custom-fields', 'excerpt' ),
				'hierarchical'      => true,
				'has_archive'       => true,
				'rewrite'           => array(
					'slug'       => 'events',
					'with_front' => false
				),
			
			)
		);
	}
}