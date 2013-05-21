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
<!--<meta name="viewport" content="width=device-width" /> -->
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
			<a class='navicon' href='#about'><i class='icon-info'></i></a>
			<a class='navicon' href='#gallery'><i class='icon-picture'></i></a>
			<a class='navicon' href='#code'><i class='icon-keyboard'></i></a>
			<a class='navicon' href='#github'><i class='icon-github'></i></a>
			<a class='navicon' href='#twitter'><i class='icon-twitter-sign'></i></a>
		</nav>
		<section class='headerpages hidden'>
			<div id='about' class='headerpage hidden'>
			<h1>About</h1>
            <p>
                My name is Frédéric van der Essen. I am a computer engineer and designer working in Belgium, developing Open-Source
                JavaScript applications at <a href='http://www.openerp.com'>OpenERP</a>
            </p>
            <p> You can contact me by mail:
                <ul>
                <li><a href=mailto:fvdessen+x@gmail.com>fvdessen+x@gmailcom</a></li>
                <li><a href=mailto:fva+x@openerp.com>fva+x@openerp.com</a> for OpenERP related matters</li>
            </p>
                
			</div>
			<div id='gallery' class='headerpage hidden'>
			<h1>Portfolio</h1>
			<p>Not ready yet :/</p>
			</div>
			<div id='code' class='headerpage hidden'>
			<h1>Coding Projects</h1>
			<p>Completed Works:</p>
            <ul>
                <li><a href='https://play.google.com/store/apps/details?id=com.mentalwarp.jnb'>Bloody Bunnies</a> A 2.5D Multiplayer platform game for android &amp; iOS</li>
                <li><a href='http://www.openerp.com'>OpenERP's Point of Sale</a> An OpenSource WebApp to run your shop</li>
            </ul>
			<p>Work in Progress:</p>
            <ul>
                <li><a href='https://github.com/fvdsn/Modula.js'>MODULA.JS</a> A HTML5 2D Game engine</li>
                <li><a href='https://github.com/fvdsn/ZSON'>ZSON</a>A fast binary serialisation format for the web</li>
            </ul>
			</div>
			<div id='github' class='headerpage hidden'>
			<h1>GitHub</h1>
            <p>Most of my work can be found on github</p>
            <ul>
                <li><a href='https://github.com/fvdsn'>http://github.com/fvdsn</a></li>
            </ul>
			</div>
			<div id='twitter' class='headerpage hidden'>
			<h1>Twitter</h1>
            <p>For news and cool links, check out my twitter:</p>
            <ul>
                <li><a href='https://twitter.com/fvdsn'>http://twitter.com/fvdsn</a></li>
            </ul>
			</div>
		</section>
	</header><!-- #branding -->

	<div id="main">
