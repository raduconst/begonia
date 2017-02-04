<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Begonia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		var_dump('no_top');
		if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
				<?php _s_posted_on(); ?>
            </div><!-- .entry-meta -->
			<?php
		endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
		<?php
		global $post;
		// Check the content for the more text
		$has_more = strpos( $post->post_content, '<!--more' );
		if ( $has_more ) {
			the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'begonia' ) );
		} else {
			the_excerpt(); ?>
            <div class="hero_read_more">
                <a href="<?php the_permalink(); ?>"><?php _e( 'Read More', 'begonia' ); ?></a>
            </div>
			<?php
		}
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'begonia' ),
			'after'  => '</div>',
		) ); ?>
    </div><!-- .entry-content -->

</article><!-- #post-## -->
