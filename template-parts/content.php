<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wv
 */

?>

<article class="post">

	<header class="post__header">

		<?php
		if ( is_single() ) :
			the_title( '<h1 class="post__title">', '</h1>' );
		else :
			the_title( '<h2 class="post__title"><a class="post__title-link" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</header>

	<div class="post__content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'wv' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wv' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<footer class="post__footer">
		<?php
		if ( 'post' === get_post_type() ) : ?>
			<div class="post__meta">
				<time class="post__time">Posted on  <?php the_time('l ◦ F jS, Y'); ?></time>
			</div>
		<?php endif; ?>
		<?php //wv_entry_footer(); ?>
	</footer>

</article>
