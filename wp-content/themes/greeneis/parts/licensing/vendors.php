<?php
$section = get_field( 'vendors' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="companies companies--block">
	<div class="container">
		<?php if ( ! empty( $section['title'] ) ): ?>
			<h2>
				<?php echo $section['title']; ?>
			</h2>
		<?php endif; ?>
		<?php if ( ! empty( $section['features_list'] ) ): ?>
			<div class="companies__inner">
				<?php
				foreach ( $section['features_list'] as $vendor ) {
					if ( ! empty( $vendor['image'] ) ) {
						echo wp_get_attachment_image( $vendor['image'], 'full' );
					}
				}
				?>
			</div>
		<?php endif; ?>
	</div>
</section>
