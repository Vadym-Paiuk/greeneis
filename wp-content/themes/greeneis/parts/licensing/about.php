<?php
$section = get_field( 'about' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="content-additional">
	<div class="container">
		<div class="content-additional__inner">
			<div class="content-additional__content">
				<?php if ( ! empty( $section['title'] ) ): ?>
					<h3>
						<?php echo $section['title']; ?>
					</h3>
				<?php endif; ?>
				<?php if ( ! empty( $section['subtitle'] ) ): ?>
					<p>
						<?php echo $section['subtitle']; ?>
					</p>
				<?php endif; ?>
			</div>
			<div class="content-additional__img-wrap">
				<div class="content-additional__img">
					<?php
					if ( ! empty( $section['image'] ) ) {
						echo wp_get_attachment_image( $section['image'], 'full' );
					}
					?>
				</div>
				<?php if ( ! empty( $section['description'] ) ): ?>
					<p>
						<?php echo $section['description']; ?>
					</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
