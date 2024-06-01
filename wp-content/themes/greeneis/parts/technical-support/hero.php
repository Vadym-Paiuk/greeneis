<?php
$section = get_field( 'hero' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="site-archive">
	<div class="site-archive__bg">
		<img src="<?php echo $path; ?>/assets/src/images/icons/web-3.svg"
		     alt="web"
		     loading="lazy">
	</div>
	<div class="container">
		<div class="site-archive__inner">
			<div class="site-archive__header">
				<div class="site-archive__header-content">
					<?php if ( ! empty( $section['title'] ) ): ?>
						<h1>
							<?php echo $section['title']; ?>
						</h1>
					<?php endif; ?>
				</div>
			</div>
			<?php if ( ! empty( $section['support_list'] ) ): ?>
				<div class="site-archive__cards site-archive__cards--flex">
					<?php foreach ( $section['support_list'] as $support ): ?>
						<div class="card-support">
							<div class="card-support__img">
								<?php
								if ( ! empty( $support['image'] ) ) {
									echo wp_get_attachment_image( $support['image'], 'full' );
								}
								?>
							</div>
							<?php if ( ! empty( $support['title'] ) ): ?>
								<p>
									<?php echo $support['title']; ?>
								</p>
							<?php endif; ?>
							<?php if ( ! empty( $support['link'] ) ): ?>
								<a href="<?php echo $support['link']['url']; ?>"
								   target="<?php echo $support['link']['target']; ?>">
									<?php echo $support['link']['title']; ?>
								</a>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
