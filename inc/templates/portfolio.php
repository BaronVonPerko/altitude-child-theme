<div class="xs-col-12 portfolio">
	<div class="page-content">

		<?php $query = new WP_Query( array( 'post_type' => 'portfolio' ) ); ?>
		<?php while( $query->have_posts() ) : $query->the_post(); ?>

			<h3><?php echo the_title(); ?></h3>
			<?php echo get_the_post_thumbnail(); ?>
			<div class="portfolio-content">
				<?php echo the_content(); ?>
			</div>

			<hr class="s-divider" />

		<?php endwhile; // end of the loop. ?>
	</div>
</div>
