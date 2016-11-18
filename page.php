<?php
/**
 * Page Template
 *
 */

get_header(); ?>

<div id="primary" class="content-area container">
	<main id="main" class="site-main row" role="main">

		<?php altitude_get_sidebar( 'left' ); ?>

		<div class="s-col-12">
			<div class="page-content">
				<?php while( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template
					if( comments_open() || '0' != get_comments_number() ) {
						comments_template();
					}
					?>

				<?php endwhile; // end of the loop. ?>
			</div>
		</div><!-- col -->

		<?php //altitude_get_sidebar( 'right' ); ?>

	</main>
</div><!-- #primary -->

<?php get_footer(); ?>
