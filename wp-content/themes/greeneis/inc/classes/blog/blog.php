<?php

namespace Theme\inc\classes\blog;

use Theme\inc\traits\Ajax_Trait;
use Theme\Inc\Traits\Singleton_Trait;
use WP_Query;

class Blog {
	use Singleton_Trait, Ajax_Trait;
	
	public function __construct() {
		$this->wp_ajax_action( 'loadmore' );
	}
	
	public function loadmore() {
		$paged = $_POST['page'] + 1;
		$query = new WP_Query( array(
			'post_type' => 'post',
			'paged'     => $paged,
		) );
		
		if ( $query->have_posts() ) :
			while ( $query->have_posts() ): $query->the_post();
				get_template_part( 'parts/global/post' );
			endwhile;
		endif;
		
		wp_die();
	}
}