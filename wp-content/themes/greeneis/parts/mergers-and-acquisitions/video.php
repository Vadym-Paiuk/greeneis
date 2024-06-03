<?php
$section = get_field( 'video' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<div class="block-video">
	<div class="container">
		<?php if ( ! empty( $section['file'] ) ): ?>
			<div class="block-video__inner">
				<video class="block-video__video"
				       src="<?php echo $section['file']; ?>"
				       preload="none"
					<?php if ( ! empty( $section['image'] ) ) {
						echo 'poster="' . $section['image'] . '"';
					} ?>
					   playsinline=""></video>
				<button class="block-video__btn">
					<img src="<?php echo $path; ?>/assets/src/images/icons/play.svg"
					     alt=""
					     loading="lazy">
				</button>
			</div>
		<?php endif; ?>
	</div>
</div>
