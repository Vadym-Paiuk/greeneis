<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
	<meta http-equiv="Content-Type"
	      content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta http-equiv="X-UA-Compatible"
	      content="IE=edge">
	<meta name="viewport"
	      content="width=device-width, initial-scale=1.0">
	
	<link rel="alternate"
	      type="application/rdf+xml"
	      title="RDF mapping"
	      href="<?php bloginfo( 'rdf_url' ); ?>"/>
	<link rel="alternate"
	      type="application/rss+xml"
	      title="RSS"
	      href="<?php bloginfo( 'rss_url' ); ?>"/>
	<link rel="alternate"
	      type="application/rss+xml"
	      title="Comments RSS"
	      href="<?php bloginfo( 'comments_rss2_url' ); ?>"/>
	<link rel="pingback"
	      href="<?php bloginfo( 'pingback_url' ); ?>"/>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open();
$path = get_template_directory_uri();
?>

<?php $header = get_field( 'header', 'options' ); ?>
<header class="header">
	<div class="container">
		<div class="header__inner">
			<div class="header__logo">
				<?php echo get_custom_logo(); ?>
			</div>
			<div class="header__menu">
				<?php
				$menu_name = 'header-menu';
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
			<div class="header__button">
				<?php if ( ! empty( $header['link'] ) ): ?>
					<a class="btn"
					   href="<?php echo $header['link']['url']; ?>"
					   target="<?php echo $header['link']['target']; ?>">
						<?php echo $header['link']['title']; ?>
					</a>
				<?php endif; ?>
			</div>

			<button class="header__btn-burger btn-burger">
            <span></span>
            <span></span>
            <span></span>
         </button>

		</div>
	</div>
</header>

<main>