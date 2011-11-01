<?php
/**
 * Smart Bootstrapped Theme 
 */
?><!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php wp_title( '&raquo;', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/bootstrap-1.2.0.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/libs/modernizr-2.0.6.min.js"></script>
	<?php 
		/*
		 * The wp_head call is required, so plugins can get the chance to load their stuff
		 * inot HTML head
		 */
		wp_head(); 
	?>
</head>

<body>

  <?php // changed container to page because container is the class in bootstrap ?>
  <div id="page">
    <header>
      <nav class="topbar">
		  <div class="topbar-inner">
			<div class="container">
				<ul class="nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Page 1</a></li>
				<li><a href="#">Page 2</a></li>
				</ul><!-- /.nav -->
			</div><!-- /.container -->
          </div><!-- /.topbar-inner -->
      </nav><!-- /.topbar -->
      <div class="masthead">
        <div class="inner">
          <div class="container">
            <h1>Wordpress Bootstrapped</h1>
            <p class="lead">
              A Wordpress theme that has been bootstrapped.			
            </p>
          </div><!-- /.container -->
        </div><!-- /.inner -->
      </div><!-- /.masthead -->
    </header>

    <div id="main" class="container row">

      <?php if ( is_home() ) { ?>
        <div class="hero-unit">
          <h2>My Nice Post</h2>
          <p>A very nice post topic. Lorem Ispum generator is not available right now. A very nice post topic. Lorem Ispum generator is not available right now.</p>
          <p><a class="btn primary large">Read more &raquo;</a></p>
        </div><!-- /.hero-unit -->
      <?php } ?>

