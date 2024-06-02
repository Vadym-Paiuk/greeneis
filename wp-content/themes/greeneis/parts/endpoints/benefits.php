<?php
$section = get_field( 'benefits' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="cards-grid-content">
	<div class="container">
		<div class="cards-grid-content__inner">
			<div class="cards-grid-content__header">
				<?php if ( ! empty( $section['title'] ) ): ?>
					<h2>
						<?php echo $section['title']; ?>
					</h2>
				<?php endif; ?>
			</div>
			<?php if ( ! empty( $section['features_list'] ) ): ?>
				<div class="cards-grid-content__grid">
					<?php foreach ( $section['features_list'] as $key => $feature ): ?>
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
	</div>
</section>
