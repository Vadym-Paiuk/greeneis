<?php
$modal = get_field( 'archive_events', 'options' )['modal'];
?>

<div class="card-modal"
     id="dialog-content"
     style="display:none;max-width:788px;">
	<div class="card-modal__inner">
		<div class="card-modal__header">
			<?php if ( ! empty( $modal['title'] ) ): ?>
				<h2>
					<?php echo $modal['title']; ?>
				</h2>
			<?php endif; ?>
			<?php if ( ! empty( $modal['description'] ) ): ?>
				<p>
					<?php echo $modal['description']; ?>
				</p>
			<?php endif; ?>
		</div>
		<div class="card-modal__form form ">
			<?php
			if ( ! empty( $modal['shortcode'] ) ) {
				echo do_shortcode( $modal['shortcode'] );
			}
			?>
		</div>
	</div>
</div>