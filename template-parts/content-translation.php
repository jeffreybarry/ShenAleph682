<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShenAleph
 */

?>
<div class="row">
<div class="col-md-8 offset-md-2">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			the_title( '<h1 class="entry-title">', '</h1>' );


		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<!-- add byline -->
				<p class="workAuthorByline"><?php
 				shenAleph_filter_authors();
 			 the_author_meta('display_name') ?></p>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php shenAleph_post_thumbnail(); ?>
</div>
</div>
	<div class="entry-content row">
		<div class="col-md-8 offset-md-2">
			test translation
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'shenAleph' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shenAleph' ),
			'after'  => '</div>',
		) );
		?>
	</div>
	</div><!-- .entry-content -->
<!-- author bio -->
<section>
	<p class="workAuthor"><?php the_author_meta('display_name') ?></p>
	<p class="workAuthorBio"><?php the_author_meta('description') ?></p>

</section>
	<footer class="entry-footer">
		<?php shenAleph_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
</div>
</div>
