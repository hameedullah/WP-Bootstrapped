<?php
/**
 * single.php content displaying template
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta top-entry-meta">

				<?php stt_entry_meta();	?>

			</div><!-- .entry-meta .top-entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta footer-entry-meta">
		<?php
			$categories = get_the_category_list( __( ', ', 'stt' ) );
			if ( $categories ) :
		?>
				<span class="cat-links">
					<?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'stt' ), 'entry-utility-pre entry-utility-prep-cat-links', $categories ); ?>
				</span>
		<?php endif; // End if $categories ?>
		<?php
			$tags = get_the_tag_list( '', __( ', ', 'stt' ) );
			if ( $tags ) :
		?>
				<span class="tag-links">
					<?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'stt' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags ); ?>
				</span>
		<?php endif; // End if $tags ?>
		<?php if ( comments_open() ) : ?>
			<span class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'stt' ) . '</span>', __( '<b>1</b> Reply', 'stt' ), __( '<b>%</b> Replies', 'stt' ) ); ?>
			</span>
		<?php endif; // End if comments_open() ?>

		<?php if ( get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<div id="author-info">
				<div id="author-avatar">
					<?php echo get_avatar( get_the_author_meta( 'user_email' ), 68 ); ?>
				</div><!-- #author-avatar -->
				<div id="author-description">
					<h2><?php echo get_the_author(); ?></h2>
					<?php the_author_meta( 'description' ); ?>
					<div id="author-link">
						<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
							<?php printf( __( 'View all posts by %s', 'stt' ), get_the_author() ); ?>
						</a>
					</div><!-- #author-link -->
				</div><!-- #author-description -->
			</div><!-- #author-info -->
		<?php endif; ?>
	</footer><!-- .entry-meta .footer-entry-meta -->

</article><!-- #post-<?php the_ID(); ?> -->
