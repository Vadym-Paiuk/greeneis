<?php
$section = get_field( 'circles' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="circles">
	<div class="container">
		<div class="circles__inner">
			<div class="circles__circle circles__circle--1">
				<?php if ( ! empty( $section['circle_1'] ) ): ?>
					<?php foreach ( $section['circle_1'] as $key => $circle ): ?>
						<div class="circles__circle-item circles__circle-item--<?php echo $circle['background']; ?> circles__circle-item--1-<?php echo $key + 1; ?>">
							<?php
							if ( ! empty( $circle['image'] ) ) {
								echo wp_get_attachment_image( $circle['image'], 'full' );
							}
							?>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<div class="circles__circle circles__circle--2">
			</div>
			<div class="circles__circle circles__circle--3">
				<?php if ( ! empty( $section['circle_2'] ) ): ?>
					<?php foreach ( $section['circle_2'] as $key => $circle ): ?>
						<div class="circles__circle-item circles__circle-item--<?php echo $circle['background']; ?> circles__circle-item--3-<?php echo $key + 1; ?>">
							<?php
							if ( ! empty( $circle['image'] ) ) {
								echo wp_get_attachment_image( $circle['image'], 'full' );
							}
							?>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<div class="circles__circle circles__circle--4">
				<?php if ( ! empty( $section['circle_3'] ) ): ?>
					<?php foreach ( $section['circle_3'] as $key => $circle ): ?>
						<div class="circles__circle-item circles__circle-item--<?php echo $circle['background']; ?> circles__circle-item--4-<?php echo $key + 1; ?>">
							<?php
							if ( ! empty( $circle['image'] ) ) {
								echo wp_get_attachment_image( $circle['image'], 'full' );
							}
							?>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<div class="circles__circle circles__circle--5">
			</div>
			<div class="circle__main">
				<div class="circle__main-top">
					<?php
					if ( ! empty( $section['image'] ) ) {
						echo wp_get_attachment_image( $section['image'], 'full' );
					}
					?>
				</div>
				<div class="circle__main-text">
					<?php if ( ! empty( $section['title'] ) ): ?>
						<h3>
							<?php echo $section['title']; ?>
						</h3>
					<?php endif; ?>
				</div>
				<div class="circle__main-bottom">
					<?php
					if ( ! empty( $section['devices'] ) ) {
						foreach ( $section['devices'] as $device ) {
							echo wp_get_attachment_image( $device['image'], 'full' );
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>