<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-thumbnail">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail(); ?>
			<?php endif; ?>
		</div>
		<div class="entry-meta">
			<?php begonia_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>

		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="single-post-content">
		<div class="entry-content">
			<?php
			the_content( sprintf(
			/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'begonia' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'begonia' ),
				'after'  => '</div>',
			) );
			?>
			<?php begonia_entry_footer(); ?>
		</div><!-- .entry-content -->

		<div class="footer-section">
			<?php begonia_single_post_navigation(); ?>
		</div>
	</div>
</article><!-- #post-## -->
