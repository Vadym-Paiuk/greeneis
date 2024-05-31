<article class="card">
	<div class="card__img">
		<?php the_post_thumbnail( 'full' ); ?>
	</div>
	<div class="card__main">
		<div class="card__info">
			<?php
			$categories = get_the_category();
			if ( ! empty( $categories ) ):
				?>
				<div class="card__cats">
					<?php foreach ( $categories as $category ): ?>
						<?php
						$active_class = '';
						if ( is_category( $category->term_id ) ) {
							$active_class = 'active';
						}
						?>
						<a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"
						   class="<?php echo $active_class; ?>"><?php echo esc_html( $category->name ); ?></a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
			<time><?php echo get_the_date( 'F j, Y' ); ?></time>
		</div>
		<div class="card__content">
			<p><?php the_title(); ?></p>
			<span>
											<?php echo get_the_excerpt(); ?>
										</span>
		</div>
		<a href="<?php the_permalink(); ?>"
		   class="card__btn btn--transparent">Read more</a>
	</div>
</article>