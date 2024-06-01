<?php
$section = get_field( 'how_we_can_help' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="cards-dec">
	<div class="cards-dec__wrapper">
		<div class="container">
			<div class="cards-dec__inner">
				<div class="cards-dec__header">
					<?php if ( ! empty( $section['title'] ) ): ?>
						<h2>
							<?php echo $section['title']; ?>
						</h2>
					<?php endif; ?>
				</div>
				<div class="cards-dec__cards">
					<?php if ( ! empty( $section['feature_list'] ) ): ?>
						<?php foreach ( $section['feature_list'] as $key => $feature ): ?>
							<div class="cards-dec__card">
								<div class="cards-dec__card-count">
									<p><?php echo $key + 1; ?></p>
								</div>
								<div class="cards-dec__card-main">
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
					<?php endif; ?>
				</div>
			</div>
		</div>
</section>
