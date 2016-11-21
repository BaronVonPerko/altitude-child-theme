<div class="xs-col-12">
	<div class="page-content">

		<?php $query = new WP_Query( array( 'post_type' => 'portfolio' ) ); ?>
		<?php while( $query->have_posts() ) : $query->the_post(); ?>

			<?php echo get_the_post_thumbnail(); ?>
			<?php echo the_content(); ?>

		<?php endwhile; // end of the loop. ?>
	</div>
</div><!-- col -->
