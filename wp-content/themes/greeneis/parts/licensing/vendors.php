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
				<div class="companies__slider swiper">
            	<div class="companies__wrapper swiper-wrapper">
							<?php foreach ( $section['features_list'] as $vendor ) {?>
								<div class="companies__slider swiper-slide">
									<?php if ( ! empty( $vendor['image'] ) ) {?>							
										<?php echo wp_get_attachment_image( $vendor['image'], 'full' );  ?>
									<?php  } ?>
								</div>
							<?php  } ?>
					</div>
            </div>
			</div>
		<?php endif; ?>
	</div>
</section>
