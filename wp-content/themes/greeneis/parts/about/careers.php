<?php
$section = get_field( 'careers' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="careers">
	<div class="container">
		<div class="careers__inner">
			<div class="careers__header">
				<?php if ( ! empty( $section['title'] ) ): ?>
					<h2>
						<?php echo $section['title']; ?>
					</h2>
				<?php endif; ?>
				<?php if ( ! empty( $section['description'] ) ): ?>
					<p>
						<?php echo $section['description']; ?>
					</p>
				<?php endif; ?>
			</div>
			<?php if ( ! empty( $section['careers_list'] ) ): ?>
				<div class="careers__cards">
					<?php foreach ( $section['careers_list'] as $item ): ?>
						<article class="card-location">
							<div class="card-location__top">
								<div class="card-location__info">
									<?php if ( ! empty( $item['position'] ) ): ?>
										<a href="<?php echo $item['link']; ?>"
										   target="_blank"
										   class="card-location__location">
											<img src="<?php echo $path; ?>/assets/src/images/icons/location.svg"
											     alt="location"
											     loading="lazy">
											<span>
											<?php echo $item['position']; ?>
										</span>
										</a>
									<?php endif; ?>
									<?php if ( ! empty( $item['date'] ) ): ?>
										<p>
											<?php echo $item['date']; ?>
										</p>
									<?php endif; ?>
								</div>
								<?php if ( ! empty( $item['title'] ) ): ?>
									<h4>
										<?php echo $item['title']; ?>
									</h4>
								<?php endif; ?>
							</div>
							<div class="card-location__main">
								<p>About Us:</p>
								<?php if ( ! empty( $item['description'] ) ): ?>
									<span>
										<?php echo $item['description']; ?>
									</span>
								<?php endif; ?>
							</div>
							<?php if ( ! empty( $item['link'] ) ): ?>
								<a href="<?php echo $item['link']; ?>"
								   target="_blank"
								   class="card-location__btn btn">APPLY NOW</a>
							<?php endif; ?>
						</article>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	
	</div>
</section>
