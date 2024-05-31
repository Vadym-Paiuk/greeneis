<?php
$section = get_field( 'services' );

if ( empty( $section ) ) {
	return;
}
?>

<section class="cards-content">
	<div class="container">
		<div class="cards-content__header">
			<?php if ( ! empty( $section['subtitle'] ) ): ?>
				<p class="sub-title">
					<?php echo $section['subtitle']; ?>
				</p>
			<?php endif; ?>
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
		<?php if ( ! empty( $section['services_list'] ) ): ?>
			<div class="cards-content__cards">
				<?php foreach ( $section['services_list'] as $key => $service ): ?>
					<div class="cards-content__card">
						<div class="cards-content__card-header">
							<span><?php echo $key + 1; ?></span>
							<?php if ( ! empty( $service['title'] ) ): ?>
								<p>
									<?php echo $service['title']; ?>
								</p>
							<?php endif; ?>
						</div>
						<div class="cards-content__card-text">
							<?php if ( ! empty( $service['description'] ) ): ?>
								<p>
									<?php echo $service['description']; ?>
								</p>
							<?php endif; ?>
						</div>
						<?php if ( ! empty( $service['link'] ) ): ?>
							<a class="cards-content__card-link btn--transparent"
							   href="<?php echo $service['link']; ?>">Learn more</a>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
