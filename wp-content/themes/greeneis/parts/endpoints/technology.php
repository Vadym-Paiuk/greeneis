<?php
$section = get_field( 'technology' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="list-info">
	<div class="container">
		<div class="list-info__inner">
			<div class="list-info__header">
				<?php if ( ! empty( $section['title'] ) ): ?>
					<h2>
						<?php echo $section['title']; ?>
					</h2>
				<?php endif; ?>
			</div>
			<?php if ( ! empty( $section['features_list'] ) ): ?>
				<div class="list-info__list">
					<?php foreach ( $section['features_list'] as $key => $feature ): ?>
						<div class="list-info__item">
							<div class="list-info__item-icon icon-decor">
								<?php
								if ( ! empty( $feature['image'] ) ) {
									echo wp_get_attachment_image( $feature['image'], 'full' );
								}
								?>
							</div>
							<div class="list-info__item-main">
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
