<?php
get_header();
$path          = get_template_directory_uri();
$blog_page_id  = get_option( 'page_for_posts' );
$blog_page_url = get_permalink( $blog_page_id );
$section       = get_field( 'hero', $blog_page_id );
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
						<h1>
							<?php the_title(); ?>
						</h1>
					</div>
					<div class="site-archive__cats">
						<?php
						$categories = get_the_terms( get_the_ID(), 'category' );
						
						if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
							foreach ( $categories as $category ) {
								echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
							}
						}
						?>
					</div>
				</div>
				<div class="site-archive__cards site-archive__cards--grid post-container">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) :
							the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>