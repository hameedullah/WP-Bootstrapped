<?php
if ( ! function_exists( 'stt_entry_meta' ) ) :
/**
 * Entry meta function
 *
 * Copied from WordPress' TwentlyEleven twenty_eleven_posted_on
 * 
 * @access public
 * @return void
 */
function stt_entry_meta() {
	printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'stt' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		sprintf( esc_attr__( 'View all posts by %s', 'stt' ), get_the_author() ),
		esc_html( get_the_author() )
	);
}
endif;
