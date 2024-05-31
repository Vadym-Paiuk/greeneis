<?php
$section = get_field( 'about' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="content-bg">
	<div class="content-bg__bg">
		<?php if ( ! empty( $section['image'] ) ): ?>
			<?php echo wp_get_attachment_image( $section['image'], 'full' ); ?>
		<?php endif; ?>
	</div>
	<div class="content-bg__bg-decor">
		<img src="<?php echo $path; ?>/assets/src/images/icons/decor-web.svg"
		     alt="web"
		     loading="lazy">
	</div>
	<div class="container">
		<div class="content-bg__main">
			<div class="content-bg__content">
				<?php if ( ! empty( $section['subtitle'] ) ): ?>
					<div class="sub-title">
						<?php echo $section['subtitle']; ?>
					</div>
				<?php endif; ?>
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
					   class="content-bg__btn btn btn--white">
						<?php echo $section['link']['title']; ?>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
