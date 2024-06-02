<?php
$section = get_field( 'plan' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="cards-grid-mod">
	<div class="container">
		<div class="cards-grid-mod__header">
			<?php if ( ! empty( $section['title'] ) ): ?>
				<h2>
					<?php echo $section['title']; ?>
				</h2>
			<?php endif; ?>
		</div>
		<?php if ( ! empty( $section['feature_list'] ) ): ?>
			<div class="cards-grid-mod__inner">
				<?php foreach ( $section['feature_list'] as $feature ): ?>
					<div class="cards-grid__card">
						<div class="cards-grid__card-icon">
							<?php
							if ( ! empty( $feature['image'] ) ) {
								echo wp_get_attachment_image( $feature['image'], 'full' );
							}
							?>
						</div>
						<div class="cards-grid__card-main">
							<?php if ( ! empty( $feature['title'] ) ): ?>
								<h3>
									<?php echo $feature['title']; ?>
								</h3>
							<?php endif; ?>
							<?php if ( ! empty( $feature['description'] ) ): ?>
								<p>
									<?php echo $feature['description']; ?>
								</p>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
