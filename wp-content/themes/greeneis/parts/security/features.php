<?php
$section = get_field( 'features' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="card-steps">
	<div class="container">
		<?php if ( ! empty( $section['features_list'] ) ): ?>
			<div class="card-steps__inner">
				<?php foreach ( $section['features_list'] as $key => $feature ): ?>
					<div class="card-steps__card">
						<div class="card-steps__card-count">
							<p><?php echo $key + 1; ?></p>
						</div>
						<div class="card-steps__card-main">
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
