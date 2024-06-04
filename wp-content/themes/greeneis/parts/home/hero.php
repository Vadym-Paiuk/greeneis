<?php
$section = get_field( 'hero' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="hero">
	<div class="hero__bg">
		<!-- <img  src="<?php echo $path; ?>/assets/src/images/home/hero.jpg" alt="" loading="lazy"> -->
		<?php if ( ! empty( $section['video'] ) ): ?>
			<video src="<?php echo $section['video']['url']; ?>"
			       muted=""
			       loop="true"
			       autoplay=""
			       preload="  "
			       poster=""></video>
		<?php endif; ?>
	</div>
	<div class="container">
		<div class="hero__inner">
			<div class="hero__content">
				<?php if ( ! empty( $section['title'] ) ): ?>
					<h1>
						<?php echo $section['title']; ?>
					</h1>
				<?php endif; ?>
				<?php if ( ! empty( $section['description'] ) ): ?>
					<p>
						<?php echo $section['description']; ?>
					</p>
				<?php endif; ?>
				<?php if ( ! empty( $section['link'] ) ): ?>
					<a href="<?php echo $section['link']['url']; ?>"
					   target="<?php echo $section['link']['target']; ?>"
					   class="btn">
						<?php echo $section['link']['title']; ?>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>