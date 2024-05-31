<?php
$section = get_field( 'intro' );

if ( empty( $section ) ) {
	return;
}
?>

<section class="section-content">
	<div class="container">
		<div class="section-content__inner">
			<div class="section-content__top">
				<?php if ( ! empty( $section['title'] ) ): ?>
					<h2>
						<?php echo $section['title']; ?>
					</h2>
				<?php endif; ?>
			</div>
			<div class="section-content__bottom">
				<?php if ( ! empty( $section['subtitle'] ) ): ?>
					<p class="sub-title">
						<?php echo $section['subtitle']; ?>
					</p>
				<?php endif; ?>
				<div class="section-content__bottom-text">
					<?php if ( ! empty( $section['description'] ) ): ?>
						<p>
							<?php echo $section['description']; ?>
						</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
