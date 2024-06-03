<?php
$section = get_field( 'soft' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="info-cards">
	<div class="container">
		<?php if ( ! empty( $section['soft_list'] ) ): ?>
			<div class="info-cards__inner">
				<?php foreach ( $section['soft_list'] as $soft ): ?>
					<div class="info-cards__item">
						<div class="info-cards__item-icon">
							<?php
							if ( ! empty( $soft['image'] ) ) {
								echo wp_get_attachment_image( $soft['image'], 'full' );
							}
							?>
						</div>
						<div class="info-cards__main">
							<?php if ( ! empty( $soft['title'] ) ): ?>
								<h3>
									<?php echo $soft['title']; ?>
								</h3>
							<?php endif; ?>
							<?php if ( ! empty( $soft['description'] ) ): ?>
								<p>
									<?php echo $soft['description']; ?>
								</p>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
