<?php
/**
 * Portfolio Page Template
 *
 */

get_header(); ?>

<div id="primary" class="content-area container">
	<main id="main" class="site-main row" role="main">

		<?php altitude_get_sidebar( 'left' ); ?>

		<div class="s-col-12">
			<div class="page-content">

        <?php $query = new WP_Query( array( 'post_type' => 'portfolio' ) ); ?>
				<?php while( $query->have_posts() ) : $query->the_post(); ?>

					<?php echo get_the_post_thumbnail(); ?>

				<?php endwhile; // end of the loop. ?>
			</div>
		</div><!-- col -->

		<?php //altitude_get_sidebar( 'right' ); ?>

	</main>
</div><!-- #primary -->

<?php get_footer(); ?>
