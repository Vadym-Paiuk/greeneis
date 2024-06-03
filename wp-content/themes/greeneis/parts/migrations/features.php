<?php
$section = get_field( 'features' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="cards-grid-mod cards-grid-mod--green">
	<div class="container">
		<?php if ( ! empty( $section['features_list'] ) ): ?>
			<div class="cards-grid-mod__inner">
				<?php foreach ( $section['features_list'] as $feature ): ?>
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