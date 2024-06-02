<?php
$section = get_field( 'soft' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="content-steps">
	<div class="container">
		<div class="content-steps__inner">
			<div class="content-steps__header">
				<?php if ( ! empty( $section['title'] ) ): ?>
					<h2>
						<?php echo $section['title']; ?>
					</h2>
				<?php endif; ?>
			</div>
			<?php if ( ! empty( $section['features_list'] ) ): ?>
				<div class="content-steps__cards">
					<?php foreach ( $section['features_list'] as $key => $feature ): ?>
						<div class="content-steps__item">
							<div class="content-steps__item-count">
								<p><?php echo $key + 1; ?></p>
							</div>
							<div class="content-steps__item-main">
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
