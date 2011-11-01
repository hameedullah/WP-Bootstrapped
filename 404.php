<?php
/**
 * Smart Theme 404 Template 
 */

get_header();
?>
	<div id="content" role="main">
		<article id="post-0">
			<header>
				<h1>Not found <span frown>:(</span></h1>
			</header>
			<div class="entry-content">
				<p>Sorry, but the page you were trying to view does not exist.</p>
				<p>It looks like this was the result of either:</p>
				<ul>
					<li>a mistyped address</li>
					<li>an out-of-date link</li>
				</ul>

					<?php get_search_form(); ?>
			</div><!-- .entry-content -->
	    
			<script>
			var GOOG_FIXURL_LANG = (navigator.language || '').slice(0,2),
			GOOG_FIXURL_SITE = location.host;
			</script>
			<script src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
		</article><!-- #post-0 -->
	</div><!-- #content -->

<?php get_footer(); ?>
