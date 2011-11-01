<?php
/**
 * Right Sidebar i.e Main Sidebar Template 
 */
?>

	<div id="sidebar" class="widget-area span-one-third column" rol="complementary">
		<?php if ( ! dynamic_sidebar( 'right-sidebar' ) ) : ?>

			<aside id="archives" class="widget">
				<h3 class="widget-title"><?php _e( 'Archives', 'stt' ); ?></h3>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h3 class="widget-title"><?php _e( 'Meta', 'stt' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>
		<?php endif; // End if dynamic_sidebar right-sidebar?>
	</div><!-- #sidebar .widget-area -->
