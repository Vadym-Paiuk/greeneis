<?php
$section = get_field( 'process' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="process">
	<div class="container">
		<div class="process__inner">
			<?php
			if ( ! empty( $section['image'] ) ) {
				echo wp_get_attachment_image( $section['image'], 'full' );
			}
			?>
		</div>
	</div>
</section>