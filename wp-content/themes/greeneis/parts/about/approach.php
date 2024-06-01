<?php
$section = get_field( 'approach' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="content-img">
	<div class="container">
		<div class="content-img__inner">
			<div class="content-img__header">
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
			<div class="content-img__main">
				<div class="content-img__img">
					<?php
					if ( ! empty( $section['image'] ) ) {
						echo wp_get_attachment_image( $section['image'], 'full' );
					}
					?>
				</div>
				<div class="content-img__content">
					<?php if ( ! empty( $section['description'] ) ): ?>
						<?php echo $section['description']; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
