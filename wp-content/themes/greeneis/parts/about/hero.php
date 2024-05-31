<?php
$section = get_field( 'hero' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="hero-type-2">
	<?php if ( ! empty( $section['image'] ) ): ?>
		<div class="hero-type-2__bg">
			<?php echo wp_get_attachment_image( $section['image'], 'full' ); ?>
		</div>
		<div class="hero-type-2__dec">
			<img src="<?php echo $path; ?>/assets/src/images/icons/web-2.svg"
			     alt="web"
			     loading="lazy">
		</div>
	<?php endif; ?>
	<div class="container">
		<div class="hero-type-2__inner">
			<div class="hero-type-2__content">
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
				<?php if ( ! empty( $section['link'] ) ): ?>
					<a href="<?php echo $section['link']['url']; ?>"
					   target="<?php echo $section['link']['target']; ?>"
					   class="btn">
						<?php echo $section['link']['title']; ?>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
