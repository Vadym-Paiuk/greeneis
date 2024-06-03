<?php
$section = get_field( 'orchestration' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="cards-list">
	<div class="container">
		<?php if ( ! empty( $section['feature_list'] ) ): ?>
			<div class="cards-list__inner">
				<?php foreach ( $section['feature_list'] as $key => $feature ): ?>
					<div class="cards-list__item">
						<div class="cards-list__card-icon">
							<?php
							if ( ! empty( $feature['image'] ) ) {
								echo wp_get_attachment_image( $feature['image'], 'full' );
							}
							?>
						</div>
						<div class="cards-list__card-main">
							<?php if ( ! empty( $feature['title'] ) ): ?>
								<p>
									<?php echo $feature['title']; ?>
								</p>
							<?php endif; ?>
							<?php if ( ! empty( $feature['description'] ) ): ?>
								<span>
									<?php echo $feature['description']; ?>
								</span>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
