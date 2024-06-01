<?php
$section = get_field( 'endpoints' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="cards-info">
	<div class="container">
		<div class="cards-info__inner">
			<?php if ( ! empty( $section['title'] ) ): ?>
				<h2>
					<?php echo $section['title']; ?>
				</h2>
			<?php endif; ?>
			<?php if ( ! empty( $section['features_list'] ) ): ?>
				<div class="cards-info__cards">
					<?php foreach ( $section['features_list'] as $key => $feature ): ?>
						<div class="cards-info__card">
							<div class="cards-info__card-icon icon-decor">
								<?php
								if ( ! empty( $feature['image'] ) ) {
									echo wp_get_attachment_image( $feature['image'], 'full' );
								}
								?>
							</div>
							<?php if ( ! empty( $feature['title'] ) ): ?>
								<p>
									<?php echo $feature['title']; ?>
								</p>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
