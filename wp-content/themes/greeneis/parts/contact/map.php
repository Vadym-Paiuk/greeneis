<?php
$section = get_field( 'map' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="contact-map">
	<div class="container">
		<div class="contact-map__inner">
			<div class="contact-map__info">
				<div class="contact-map__info-inner">
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
					<?php if ( ! empty( $section['link'] ) ): ?>
						<a href="<?php echo $section['link']['url']; ?>"
						   target="<?php echo $section['link']['target']; ?>"
						   class="btn--transparent">
							<?php echo $section['link']['title']; ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
			<div class="contact-map__map">
				<?php if ( ! empty( $section['iframe'] ) ): ?>
					<?php echo $section['iframe']; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
