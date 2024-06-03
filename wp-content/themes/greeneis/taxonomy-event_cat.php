<?php
get_header();
$path          = get_template_directory_uri();
$blog_page_url = get_post_type_archive_link( 'event' );
$section       = get_field( 'archive_events', 'options' );
?>
	
	<section class="site-archive">
		<div class="site-archive__bg">
			<img src="<?php echo $path; ?>/assets/src/images/icons/web-3.svg"
			     alt="web"
			     loading="lazy">
		</div>
		<div class="container">
			<div class="site-archive__inner">
				<div class="site-archive__header">
					<div class="site-archive__header-content">
						<?php if ( ! empty( $section['title'] ) ): ?>
							<h1>
								<?php echo $section['title']; ?>
							</h1>
						<?php endif; ?>
						<?php if ( ! empty( $section['description'] ) ): ?>
							<p>
								<?php echo $section['description']; ?>
							</p>
						<?php endif; ?>
					</div>
					<div class="site-archive__cats">
						<a class="<?php if ( is_post_type_archive() ) {
							echo 'active';
						} ?>"
						   href="<?php echo $blog_page_url; ?>">All</a>
						<?php
						$categories = get_terms( array(
							'taxonomy'   => 'event_cat',
							'hide_empty' => true,
						) );
						
						if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
							foreach ( $categories as $category ) {
								$active_class = '';
								if ( is_tax( 'event_cat', $category->term_id ) ) {
									$active_class = 'active';
								}
								echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="' . $active_class . '">' . esc_html( $category->name ) . '</a>';
							}
						}
						?>
					</div>
				</div>
				<div class="site-archive__cards site-archive__cards--grid-2 post-container">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) :
							the_post(); ?>
							<?php get_template_part( 'parts/global/event' ); ?>
						<?php endwhile; ?>
					<?php else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>
				<?php
				global $wp_query;
				$posts_per_page = get_option( 'posts_per_page' );
				if ( $wp_query->found_posts > $posts_per_page ) : ?>
					<div class="site-archive__btn-loadmore">
						<button class="btn loadmore">SEE MORE</button>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>