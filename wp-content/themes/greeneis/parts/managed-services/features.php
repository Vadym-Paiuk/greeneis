<?php
$section = get_field( 'features' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="web-content">
	<div class="container">
		<div class="web-content__inner">
			<div class="web-content__items">
				<?php if ( ! empty( $section['features_left'] ) ): ?>
					<?php foreach ( $section['features_left'] as $feature ): ?>
						<div class="web-content__item">
							<button class="web-content__item-btn">
								<?php if ( ! empty( $feature['title'] ) ): ?>
									<p>
										<?php echo $feature['title']; ?>
									</p>
								<?php endif; ?>
								<div class="web-content__item-icon">
									<?php
									if ( ! empty( $feature['image'] ) ) {
										echo wp_get_attachment_image( $feature['image'], 'full' );
									}
									?>
								</div>
							</button>
							<div class="web-content__modal">
								<div class="web-content__modal-header">
									<div class="web-content__modal-icon">
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
								<div class="web-content__modal-text">
									<?php if ( ! empty( $feature['description'] ) ): ?>
										<p>
											<?php echo $feature['description']; ?>
										</p>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			
			<div class="web-content__middle">
				<div class="web-content__middle-inner">
					<div class="web-content__middle-img">
						<img src="<?php echo $path; ?>/assets/src/images/icons/content-logo.svg"
						     alt=""
						     loading="lazy">
					</div>
					<div class="web-content__middle-border">
						<img src="<?php echo $path; ?>/assets/src/images/icons/border-decor.svg"
						     alt=""
						     loading="lazy">
					</div>
				</div>
				<div class="web-content__img-web">
					<img src="<?php echo $path; ?>/assets/src/images/automation_3/web-2.png"
					     alt=""
					     loading="lazy">
				</div>
			</div>
			
			<div class="web-content__items">
				<?php if ( ! empty( $section['features_right'] ) ): ?>
					<?php foreach ( $section['features_right'] as $feature ): ?>
						<div class="web-content__item">
							<button class="web-content__item-btn">
								<?php if ( ! empty( $feature['title'] ) ): ?>
									<p>
										<?php echo $feature['title']; ?>
									</p>
								<?php endif; ?>
								<div class="web-content__item-icon">
									<?php
									if ( ! empty( $feature['image'] ) ) {
										echo wp_get_attachment_image( $feature['image'], 'full' );
									}
									?>
								</div>
							</button>
							<div class="web-content__modal">
								<div class="web-content__modal-header">
									<div class="web-content__modal-icon">
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
								<div class="web-content__modal-text">
									<?php if ( ! empty( $feature['description'] ) ): ?>
										<p>
											<?php echo $feature['description']; ?>
										</p>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>