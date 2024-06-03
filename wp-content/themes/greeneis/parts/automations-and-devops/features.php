<?php
$section = get_field( 'features' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="columns-cards">
	<div class="container">
		<div class="columns-cards__inner">
			<div class="columns-cards__columns">
				<?php if ( ! empty( $section['features_list'] ) ): ?>
					<?php foreach ( $section['features_list'] as $key => $feature ): ?>
						<div class="columns-cards__column">
							<div class="columns-cards__column-main">
								<?php if ( ! empty( $feature['title'] ) ): ?>
									<h2>
										<?php echo $feature['title']; ?>
									</h2>
								<?php endif; ?>
								<?php if ( ! empty( $feature['feature'] ) ): ?>
									<ul>
										<?php foreach ( $feature['feature'] as $item ): ?>
											<li>
												<img src="<?php echo $path; ?>/assets/src/images/icons/check.svg"
												     alt=""
												     loading="lazy">
												<?php if ( ! empty( $item['title'] ) ): ?>
													<span>
														<?php echo $item['title']; ?>
													</span>
												<?php endif; ?>
											</li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
							</div>
							<div class="columns-cards__column-img">
								<?php
								if ( ! empty( $feature['image'] ) ) {
									echo wp_get_attachment_image( $feature['image'], 'full' );
								}
								?>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<?php get_template_part( 'parts/automations-and-devops/why' ); ?>
		</div>
	</div>
</section>
