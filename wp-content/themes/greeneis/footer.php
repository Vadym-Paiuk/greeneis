<?php
$footer = get_field( 'footer', 'options' );
$path   = get_template_directory_uri();
?>
</main>

<footer class="footer">
	<?php if ( ! is_page_template( 'templates/contact.php' ) ) : ?>
		<div class="footer__top">
			<div class="container">
				<div class="footer__top-inner">
					<div class="footer__top-img">
						<?php
						if ( ! empty( $footer['form']['image'] ) ) {
							echo wp_get_attachment_image( $footer['form']['image'], 'full' );
						}
						?>
					</div>
					<div class="footer__form-wrap">
						<div class="footer__form-header">
							<?php if ( ! empty( $footer['form']['title'] ) ): ?>
								<h3>
									<?php echo $footer['form']['title']; ?>
								</h3>
							<?php endif; ?>
							<?php if ( ! empty( $footer['form']['description'] ) ): ?>
								<p>
									<?php echo $footer['form']['description']; ?>
								</p>
							<?php endif; ?>
						</div>
						<div class="footer__form form">
							<?php
							if ( ! empty( $footer['form']['shortcode'] ) ) {
								echo do_shortcode( $footer['form']['shortcode'] );
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<div class="footer__main">
		<div class="container">
			<div class="footer__main-inner">
				<div class="footer__content">
					<?php echo get_custom_logo(); ?>
					<?php if ( ! empty( $footer['info'] ) ): ?>
						<div class="footer__info">
							<?php if ( ! empty( $footer['info']['title'] ) ): ?>
								<p>
									<?php echo $footer['info']['title']; ?>
								</p>
							<?php endif; ?>
							<?php if ( ! empty( $footer['info']['description'] ) ): ?>
								<span>
                                   <?php echo $footer['info']['description']; ?>
                                </span>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="footer__navs">
					<div class="footer__nav">
						<?php
						$menu_name = 'footer-menu-1';
						if ( has_nav_menu( $menu_name ) ) {
							wp_nav_menu( [
								'theme_location'  => $menu_name,
								'menu'            => '',
								'container'       => 'nav',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => '',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => '',
							] );
						}
						?>
					</div>
					<div class="footer__nav">
						<?php
						$menu_name = 'footer-menu-2';
						if ( has_nav_menu( $menu_name ) ) {
							wp_nav_menu( [
								'theme_location'  => $menu_name,
								'menu'            => '',
								'container'       => 'nav',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => '',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => '',
							] );
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer__bottom">
		<div class="container">
			<div class="footer__bottom-inner">
				<?php if ( ! empty( $footer['copyright'] ) ): ?>
					<p>
						<?php echo str_replace( '{YEAR}', date( 'Y' ), $footer['copyright'] ); ?>
					</p>
				<?php endif; ?>
				<div class="footer__social">
					<?php if ( ! empty( $footer['socials'] ) ): ?>
						<?php foreach ( $footer['socials'] as $social ): ?>
							<a href="<?php echo $social['link']; ?>"
							   target="_blank">
								<?php
								if ( ! empty( $social['image'] ) ) {
									echo wp_get_attachment_image( $social['image'], 'full' );
								}
								?>
							</a>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>