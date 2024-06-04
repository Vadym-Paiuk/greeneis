<?php
$section = get_field( 'advisory' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="list-grid">
	<div class="container">
		<div class="list-grid__inner">
			<?php if ( ! empty( $section['title'] ) ): ?>
				<h2>
					<?php echo $section['title']; ?>
				</h2>
			<?php endif; ?>
			<?php if ( ! empty( $section['feature_list'] ) ): ?>
				<div class="list-grid__grid">
					<div class="list-grid__slider swiper">
               	<div class="list-grid__wrapper swiper-wrapper">
							<?php foreach ( $section['feature_list'] as $key => $feature ): ?>
								<div class="list-grid__slide swiper-slide">
									<div class="list-grid__item">
										<div class="list-grid__item-icon icon-decor">
											<?php
											if ( ! empty( $feature['image'] ) ) {
												echo wp_get_attachment_image( $feature['image'], 'full' );
											}
											?>
										</div>
										<div class="list-grid__item-main">
											<?php if ( ! empty( $feature['title'] ) ): ?>
												<h4>
													<?php echo $feature['title']; ?>
												</h4>
											<?php endif; ?>
											<?php if ( ! empty( $feature['feature'] ) ): ?>
												<ul>
													<?php foreach ( $feature['feature'] as $item ): ?>
														<?php if ( ! empty( $item['title'] ) ): ?>
															<li>
																<?php echo $item['title']; ?>
															</li>
														<?php endif; ?>
													<?php endforeach; ?>
												</ul>
											<?php endif; ?>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
						<div class="swiper-pagination"></div>
         		</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
