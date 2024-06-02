<?php get_header();
//Template name: Social Events
$path = get_template_directory_uri();
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
						<h1>Social Events</h1>
						<p>
							Lorem ipsum dolor sit amet consectetur. Arcu ac odio vitae ante
							sociis volutpat posuere. Volutpat faucibus arcu sem fusce sed
							aliquet praesent fusce ultrices.
						</p>
					</div>
					<div class="site-archive__cats">
						<a class="active"
						   href="#">aLL</a>
						<a href="#">bUSINESS</a>
						<a href="#">wORK</a>
						<a href="#">fINANCE</a>
					</div>
				</div>
				<div class="site-archive__cards site-archive__cards--grid-2">
					<article class="card">
						<div class="card__img">
							<img src="<?php echo $path; ?>/assets/src/images/home/card-1.png"
							     alt=""
							     loading="lazy">
						</div>
						<div class="card__main">
							<div class="card__info">
								<div class="card__cats">
									<a href="#"
									   class="active">Business</a>
									<a href="#">Blog</a>
								</div>
								<time>March 8, 2024</time>
							</div>
							<div class="card__content">
								<p>Behind the Scenes: Success Stories of High-Performing Teams</p>
								<span>Today, your data quality issues are not just observed.</span>
							</div>
							<a href=""
							   class="card__btn btn--transparent"
							   data-fancybox
							   data-src="#dialog-content">Registrate</a>
						</div>
					</article>
					<article class="card">
						<div class="card__img">
							<img src="<?php echo $path; ?>/assets/src/images/home/card-2.png"
							     alt=""
							     loading="lazy">
						</div>
						<div class="card__main">
							<div class="card__info">
								<div class="card__cats">
									<a href="#"
									   class="active">Business</a>
									<a href="#">Blog</a>
								</div>
								<time>March 8, 2024</time>
							</div>
							<div class="card__content">
								<p>Tech Innovations Transforming the Landscape of Team Building</p>
								<span>Today, your data quality issues are not just observed.</span>
							</div>
							<a href=""
							   class="card__btn btn--transparent"
							   data-fancybox
							   data-src="#dialog-content">Registrate</a>
						</div>
					</article>
					<article class="card">
						<div class="card__img">
							<img src="<?php echo $path; ?>/assets/src/images/home/card-3.png"
							     alt=""
							     loading="lazy">
						</div>
						<div class="card__main">
							<div class="card__info">
								<div class="card__cats">
									<a href="#"
									   class="active">Business</a>
									<a href="#">Blog</a>
								</div>
								<time>March 8, 2024</time>
							</div>
							<div class="card__content">
								<p>Unlocking the Potential: How to Boost Team Productivity</p>
								<span>Today, your data quality issues are not just observed.</span>
							</div>
							<a href=""
							   class="card__btn btn--transparent"
							   data-fancybox
							   data-src="#dialog-content">Registrate</a>
						</div>
					</article>
					<article class="card">
						<div class="card__img">
							<img src="<?php echo $path; ?>/assets/src/images/home/card-1.png"
							     alt=""
							     loading="lazy">
						</div>
						<div class="card__main">
							<div class="card__info">
								<div class="card__cats">
									<a href="#"
									   class="active">Business</a>
									<a href="#">Blog</a>
								</div>
								<time>March 8, 2024</time>
							</div>
							<div class="card__content">
								<p>Behind the Scenes: Success Stories of High-Performing Teams</p>
								<span>Today, your data quality issues are not just observed.</span>
							</div>
							<a href=""
							   class="card__btn btn--transparent"
							   data-fancybox
							   data-src="#dialog-content">Registrate</a>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>