<?php
$section = get_field( 'partners' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="partners">
	<div class="container">
		<?php if ( ! empty( $section['partners_list'] ) ): ?>
			<div class="partners__inner">
				<?php foreach ( $section['partners_list'] as $partner ): ?>
					<div class="partners__item partners__item--<?php echo $partner['text_color']; ?>">
						<div class="partners__item-img">
							<?php
							if ( ! empty( $partner['image'] ) ) {
								echo wp_get_attachment_image( $partner['image'], 'full' );
							}
							?>
						</div>
						<?php if ( ! empty( $partner['feature'] ) ): ?>
							<div class="partners__item-text">
								<?php foreach ( $partner['feature'] as $feature ): ?>
									<?php if ( ! empty( $feature['title'] ) ): ?>
										<p>
											<?php echo $feature['title']; ?>
										</p>
									<?php endif; ?>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
