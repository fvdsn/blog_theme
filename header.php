<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/blog.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Raleway:300|Lato:300,400|Inconsolata' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class='bgnoise one'></div>
	
	<div id="page" class="hfeed">
<?php do_action( 'before' ); ?>
	<header id="branding" role="banner">
		<hgroup>
			<h1 id="site-title">
				<a href="<?php echo home_url('/'); ?>" title='The Midnight Hack'>
					<span class='the'>The</span> <span class='midnight'>Midnight</span> <span class='hack'>Hack</span>
				</a>
			</h1>
			<h2 id="site-description">Frederic van der Essen on Hacking &amp; Design</h2>
		</hgroup>

		<!--<nav id="access" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Main menu', 'toolbox' ); ?></h1>
			<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'toolbox' ); ?>"><?php _e( 'Skip to content', 'toolbox' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>-->
		<nav class='hnav' role='navigation'>
			<a class='navicon' attr-dst='about'   href='#'><i class='icon-info'></i></a>
			<a class='navicon' attr-dst='gallery' href='#'><i class='icon-picture'></i></a>
			<a class='navicon' attr-dst='code'    href='#'><i class='icon-keyboard'></i></a>
			<a class='navicon' attr-dst='github'  href='#'><i class='icon-github'></i></a>
			<a class='navicon' attr-dst='twitter' href='#'><i class='icon-twitter-sign'></i></a>
		</nav>
		<section class='headerpages hidden'>
			<div class='headerpage about hidden'>
			<h1>About</h1>
			<p>BlaBlaBlaBla...</p>
			<p>BlaBlaBlaBla...</p>
			</div>
			<div class='headerpage gallery hidden'>
			<h1>Gallery</h1>
			<p>BlaBla...</p>
			</div>
			<div class='headerpage code hidden'>
			<h1>Code</h1>
			<p>BlaBlaBlaBla...</p>
			<p>BlaBlaBlaBla...</p>
			</div>
				<div class='headerpage github hidden'>
			<h1>GitHub</h1>
			<p>gooefjeosfjesf </p>
			</div>
		</section>
	</header><!-- #branding -->

	<div id="main">
