<div class="xs-col-12 portfolio">
	<div class="page-content">

		<?php $query = new WP_Query( array( 'post_type' => 'portfolio' ) ); ?>
		<?php while( $query->have_posts() ) : $query->the_post(); ?>

			<h1><?php echo the_title(); ?></h1>
			<?php echo get_the_post_thumbnail(); ?>
			<div class="portfolio-content">
				<?php echo the_content(); ?>
			</div>

		<?php endwhile; // end of the loop. ?>
	</div>
</div>
