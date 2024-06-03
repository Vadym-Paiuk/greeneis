<?php
$section = get_field( 'bonuses' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<div class="cards-dark">
	<div class="container">
		<?php if ( ! empty( $section['features_list'] ) ): ?>
			<div class="cards-dark__inner">
				<?php foreach ( $section['features_list'] as $key => $feature ): ?>
					<div class="cards-dark__card">
						<div class="cards-dark__count text-decor"><?php echo $key + 1; ?></div>
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
