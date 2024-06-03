<?php
$section = get_field( 'provision' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="list-desc">
	<div class="container">
		<div class="list-desc__inner">
			<?php if ( ! empty( $section['title'] ) ): ?>
				<h2>
					<?php echo $section['title']; ?>
				</h2>
			<?php endif; ?>
			<?php if ( ! empty( $section['features_list'] ) ): ?>
				<div class="list-desc__items">
					<?php foreach ( $section['features_list'] as $key => $feature ): ?>
						<div class="list-desc__item">
							<div class="list-desc__item-icon">
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
