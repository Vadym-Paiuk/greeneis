<?php
$section = get_field( 'why' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<div class="columns-cards__cards-wrapper">
	<?php if ( ! empty( $section['title'] ) ): ?>
		<h2>
			<?php echo $section['title']; ?>
		</h2>
	<?php endif; ?>
	<div class="columns-cards__cards-inner">
		<?php if ( ! empty( $section['feature_list'] ) ): ?>
			<?php foreach ( $section['feature_list'] as $key => $feature ): ?>
				<div class="columns-cards__card">
					<div class="columns-cards__card-count">
						<p><?php echo $key + 1; ?></p>
					</div>
					<?php if ( ! empty( $feature['title'] ) ): ?>
						<span>
							<?php echo $feature['title']; ?>
						</span>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>
