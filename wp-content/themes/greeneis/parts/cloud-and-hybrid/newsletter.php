<?php
$section = get_field( 'newsletter' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="subscribe subscribe--gray">
	<div class="container">
		<div class="subscribe__inner">
			<div class="subscribe__form-wrap">
				<div class="subscribe__form-header">
					<?php if ( ! empty( $section['title'] ) ): ?>
						<h3>
							<?php echo $section['title']; ?>
						</h3>
					<?php endif; ?>
					<?php if ( ! empty( $section['description'] ) ): ?>
						<p>
							<?php echo $section['description']; ?>
						</p>
					<?php endif; ?>
				</div>
				<div class="subscribe__form form">
					<?php
					if ( ! empty( $section['shortcode'] ) ) {
						echo do_shortcode( $section['shortcode'] );
					}
					?>
				</div>
			</div>
			<div class="subscribe__img">
				<?php
				if ( ! empty( $section['image'] ) ) {
					echo wp_get_attachment_image( $section['image'], 'full' );
				}
				?>
			</div>
		</div>
	</div>
</section>
