<?php
/**
 * Content Template
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article-container">

		<header class="entry-header">
			<div class="entry-date"><?php altitude_posted_on(); ?></div>
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div class="post-comments"><?php altitude_comment_meta(); ?></div>
		</header><!-- .entry-header -->

		<div class="entry-summary">
			<div class="entry-thumbnail"><?php the_post_thumbnail( 'altitude-blog' ); ?></div>
			<div class="entry-excerpt"><?php the_excerpt(); ?></div>
		</div><!-- .entry-summary -->

		<footer class="entry-footer">
			<div class="entry-edit"><?php edit_post_link( __( 'Edit', 'altitude' ), '<span class="edit-link">', '</span>' ); ?></div>
		</footer><!-- .entry-footer -->

	</div><!-- article-container -->
</article><!-- #post-## -->
