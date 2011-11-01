<?php
/**
 * Smart Theme Default template
 */

get_header(); ?>

    <div id="content" role="main" class="span-two-thirds column">
		<div class="page-header">
			<h2>Latest Posts</h2>
		</div>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<article id="post-0" class="post no-results not-found">
			<header class="entry-header">
				<h1 class="entry-title"><?php _e( 'Nothing Found', 'stt' ); ?></h1>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<p><?php _e( 'Sorry, nothing found', 'stt' ); ?></p>
				<?php get_search_form(); ?>
			</div><!-- .entry-content -->
		</article><!-- #post-0 -->
	
	<?php endif; ?>

    </div><!-- /#content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
