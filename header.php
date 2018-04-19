<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="navbar navbar-inverse navbar-static-top site-header" role="banner">
		<div class="container">
			<div class="navbar-header">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand">
					<?php $site_logo = dw_resume_get_theme_option( 'site_logo' ); ?>
					<?php if( $site_logo ) : ?>
						<img src="<?php echo esc_url( $site_logo ); ?>" title="<?php bloginfo('name'); ?>">
					<?php else : ?>
						<span><?php bloginfo('name'); ?></span>
					<?php endif; ?>
				</a>
			</div>

			<div class="header-intro">
				<p><?php echo dw_resume_get_theme_option( 'header_title', 'Radoslav Stankov. Designer & Art Director, Based in Melbourne.'); ?></p>
				<ul class="list-inline">
					<li><a href="<?php echo dw_resume_get_theme_option('header_facebook', '#'); ?>"><i class="fa fa-facebook"></i></a></li>
					<li><a href="<?php echo dw_resume_get_theme_option('header_twitter'), '#'; ?>"><i class="fa fa-twitter"></i></a></li>
					<li><a href="<?php echo dw_resume_get_theme_option('header_googleplus', '#'); ?>"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="<?php echo dw_resume_get_theme_option('header_linkedin', '#'); ?>"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>

			<?php if ( get_header_image() ) : ?>
			<div class="header-image">
				<img src="<?php echo( esc_url( get_header_image() ) ); ?>">
				<a href="#section-about" class="smooth-scroll"><?php echo dw_resume_get_theme_option( 'header_readmore', 'Not Enough? Read More!' ); ?><i class="ti-arrow-down"></i></a>
			</div>
			<?php endif; ?>
		</div>

	</header>

	<div id="content" class="site-content">
