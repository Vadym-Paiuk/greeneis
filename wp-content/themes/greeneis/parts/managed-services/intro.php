<?php
$section = get_field( 'intro' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="content-col">
	<div class="container">
		<div class="content-col__inner">
			<div class="content-col__header">
				<?php if ( ! empty( $section['title'] ) ): ?>
					<h2>
						<?php echo $section['title']; ?>
					</h2>
				<?php endif; ?>
			</div>
			<div class="content-col__main">
				<?php if ( ! empty( $section['subtitle'] ) ): ?>
					<p>
						<?php echo $section['subtitle']; ?>
					</p>
				<?php endif; ?>
				<div class="content-col__text">
					<?php if ( ! empty( $section['description'] ) ): ?>
						<p>
							<?php echo $section['description']; ?>
						</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>