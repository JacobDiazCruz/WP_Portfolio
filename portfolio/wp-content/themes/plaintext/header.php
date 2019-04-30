<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="pingback" href=" <?php bloginfo( 'pingback_url' ); ?>" >
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/red.png">
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
	<header class="nav">
		<div class="nav-col-2">
			<a href="#header" class="a-logo"><p class="logo">Jacob Cruz</p></a>
			<?php wp_nav_menu( array( 'theme_location' => 'header_menu' ) ); ?>
			<p class="scroll-p">Scroll</p>
			<img class="scroll-img" src="<?php bloginfo('template_url'); ?>/images/scroll.gif">
		</div>
		<div>
			
		</div>
	</header>	
