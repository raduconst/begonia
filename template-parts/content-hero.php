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
        <header class="c-hero  c-hero--full entry-header">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="c-hero__background">
                        <?php
                            $thumb_id = get_post_thumbnail_id();
                            $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                        ?>

                        <div class="c-hero__background">
                            <img class="c-hero__image" src="<?php echo $thumb_url[0]?>">
                        </div>
                    </div>

                    <div class="c-hero__wrap">
                        <?php endif;
                            the_title( '<h1 class="c-hero__entry-title">', '</h1>' );
                        if ( 'post' === get_post_type() ) : ?>
                            <div class="c-hero__entry-meta">
                                <?php _s_posted_on(); ?>
                            </div><!-- .entry-meta -->
                            <?php
                        endif; ?>

                        <div class="c-hero__content entry-content">
                            <?php
                            global $post;
                            // Check the content for the more text
                            $has_more = strpos( $post->post_content, '<!--more' );
                            if ( $has_more ) {
                                the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'begonia' ) );
                            } else {
                                the_excerpt(); ?>
                                <div class="c-hero_read_more">
                                    <a href="<?php the_permalink(); ?>"><?php _e( 'Read More', 'begonia' ); ?></a>
                                </div>
                                <?php
                            }
                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . __( 'Pages:', 'begonia' ),
                                'after'  => '</div>',
                            ) ); ?>
                        </div><!-- .entry-content -->
                    </div>
        </header><!-- .entry-header -->
</article><!-- #post-## -->
