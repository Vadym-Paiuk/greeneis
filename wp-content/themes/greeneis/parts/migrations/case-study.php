<?php
$section = get_field( 'case_study' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="content-list">
	<div class="container">
		<div class="content-list__inner">
			<div class="content-list__header">
				<?php if ( ! empty( $section['subtitle'] ) ): ?>
					<p>
						<?php echo $section['subtitle']; ?>
					</p>
				<?php endif; ?>
				<?php if ( ! empty( $section['title'] ) ): ?>
					<h2>
						<?php echo $section['title']; ?>
					</h2>
				<?php endif; ?>
			</div>
			<?php if ( ! empty( $section['features_list'] ) ): ?>
				<div class="content-list__lists">
					<?php foreach ( $section['features_list'] as $feature ): ?>
						<div class="content-list__item">
							<div class="content-list__item-capture">
								<?php if ( ! empty( $feature['title'] ) ): ?>
									<p>
										<?php echo $feature['title']; ?>
									</p>
								<?php endif; ?>
							</div>
							<?php if ( ! empty( $feature['features'] ) ): ?>
								<div class="content-list__item-content">
									<ul>
										<?php foreach ( $feature['features'] as $item ): ?>
											<?php if ( ! empty( $item['title'] ) ): ?>
												<li>
													<?php echo $item['title']; ?>
												</li>
											<?php endif; ?>
										<?php endforeach; ?>
									</ul>
								</div>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>