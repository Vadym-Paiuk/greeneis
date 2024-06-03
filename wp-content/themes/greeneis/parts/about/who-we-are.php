<?php
$section = get_field( 'who_we_are' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="content-columns">
	<div class="container">
		<div class="content-columns__inner">
			<div class="content-columns__header">
				<?php if ( ! empty( $section['subtitle'] ) ): ?>
					<p class="sub-title">
						<?php echo $section['subtitle']; ?>
					</p>
				<?php endif; ?>
				<?php if ( ! empty( $section['title'] ) ): ?>
					<h3>
						<?php echo $section['title']; ?>
					</h3>
				<?php endif; ?>
			</div>
			<div class="content-columns__img">
				<?php
				if ( ! empty( $section['image'] ) ) {
					echo wp_get_attachment_image( $section['image'], 'full' );
				}
				?>
			</div>
			<div class="content-columns__main">
				<div class="content-columns__item">
					<?php if ( ! empty( $section['description_left'] ) ): ?>
						<?php echo $section['description_left']; ?>
					<?php endif; ?>
				</div>
				<div class="content-columns__item">
					<?php if ( ! empty( $section['description_right'] ) ): ?>
						<?php echo $section['description_right']; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
