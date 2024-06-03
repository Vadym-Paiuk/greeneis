<?php
$section = get_field( 'team' );
$path    = get_stylesheet_directory_uri();

if ( empty( $section ) ) {
	return;
}
?>

<section class="our-team">
	<div class="container">
		<div class="our-team__inner">
			<div class="our-team__header">
				<?php if ( ! empty( $section['title'] ) ): ?>
					<h2>
						<?php echo $section['title']; ?>
					</h2>
				<?php endif; ?>
			</div>
			<?php if ( ! empty( $section['team_list'] ) ): ?>
				<div class="our-team__main">
					<?php foreach ( $section['team_list'] as $key => $member ): ?>
						<a href="#"
						   class="our-team__card <?php if ( $key > 11 ) {
							   echo 'hidden';
						   } ?>">
                            <span class="our-team__card-img">
								<?php
								if ( ! empty( $member['image'] ) ) {
									echo wp_get_attachment_image( $member['image'], 'full' );
								}
								?>
                            </span>
							<div class="our-team__card-main">
								<?php if ( ! empty( $member['name'] ) ): ?>
									<span class="our-team__card-title">
	                                  <?php echo $member['name']; ?>
                                  </span>
								<?php endif; ?>
								<?php if ( ! empty( $member['position'] ) ): ?>
									<div class="our-team__card-desc">
										<?php echo $member['position']; ?>
									</div>
								<?php endif; ?>
							</div>
						</a>
					<?php endforeach; ?>
				</div>
				<?php if ( count( $section['team_list'] ) > 12 ): ?>
					<a href=""
					   class="our-team__loadmore  btn--transparent">See more team</a>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
