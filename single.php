<?php
/**
 * The post template
 */

get_header(); ?>

	<div id="content" role="main" class="span-two-thirds column">
		
		<?php while ( have_posts() ) : the_post(); ?>

			<nav id="nav-single">
				<h3 class="assistive-text"><?php _e( 'Post navigation', 'stt' ); ?></h3>
				<span class="nav-previous"><?php previous_post_link( '%link', __( 'Previous', 'stt' ) ); ?></span>
				<span class="nav-next"><?php next_post_link( '%link', __( 'Next', 'stt' ) ); ?></span>
			</nav>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php comments_template( '', true ); ?>

		<?php endwhile; // End of while have_posts ?>

	</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
