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
				<a href="#">
					<img  src="<?php echo $path;?>/assets/src/images/icons/logo.svg" alt="" loading="lazy">
				</a>
			</div>
			<div class="header__menu">
				<nav>
					<ul>
						<li><a href="#">Home</a></li>
						<li class="menu-item-has-children">
							<a href="#">Services</a>
							<ul class="sub-menu">
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
							</ul>
						</li>
						<li><a href="#">About</a></li>
						<li>
							<a href="#">Resources</a>
							<ul class="sub-menu">
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
							</ul>
						</li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</nav>
			</div>
			<a class="btn" href="#" >Get Started</a>

		</div>
	</div>
</header>

<main>