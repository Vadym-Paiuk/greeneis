<?php
$section = get_field( 'hero' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="site-contact site-archive">
	<div class="site-archive__bg">
		<img src="<?php echo $path; ?>/assets/src/images/icons/web-3.svg"
		     alt="web"
		     loading="lazy">
	</div>
	<div class="container">
		<div class="site-contact__inner site-archive__inner ">
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
			</div>
			<div class="site-contact__form  form">
				<?php
				if ( ! empty( $section['shortcode'] ) ) {
					echo do_shortcode( $section['shortcode'] );
				}
				?>
			</div>
		</div>
	</div>
</section>
