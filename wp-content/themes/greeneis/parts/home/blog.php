<?php
$section = get_field( 'blog' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="cards-slider">
	<div class="container">
		<div class="cards-slider__header">
			<div class="cards-slider__header-inner">
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
			</div>
			<div class="cards-slider__slider-actions ">
				<button class="swiper-button-prev">
					<img src="<?php echo $path; ?>/assets/src/images/icons/arrow-left.svg"
					     alt=""
					     loading="lazy"></button>
				<button class="swiper-button-next">
					<img src="<?php echo $path; ?>/assets/src/images/icons/arrow-left.svg"
					     alt=""
					     loading="lazy"></button>
			</div>
		</div>
		<?php if ( ! empty( $section['posts'] ) ): ?>
			<div class="cards-slider__slider swiper">
				<div class="cards-slider__wrapper swiper-wrapper">
					<?php foreach ( $section['posts'] as $post ): ?>
						<div class="cards-slider__slide swiper-slide">
							<?php get_template_part( 'parts/global/post' ); ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</section>
