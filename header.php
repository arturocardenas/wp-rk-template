<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?>
</head>
<body>
<!--
<header>
<h1><?php //bloginfo('name'); ?></h1>
</header>
<nav>
	<ul class="main-nav">
		<?php //wp_nav_menu(array('theme_location' => 'navigation')); ?>
	</ul>
</nav>
-->
<nav class="navbar navbar-default" role="navigation"> 
	<!-- Brand and toggle get grouped for better mobile display --> 
	<div class="navbar-header"> 
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
		<span class="sr-only">Toggle navigation</span> 
		<span class="icon-bar"></span> 
		<span class="icon-bar"></span> 
		<span class="icon-bar"></span> 
		</button> 
		<a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a> 
	</div> 
	<!-- Collect the nav links, forms, and other content for toggling --> 
	<div class="collapse navbar-collapse navbar-ex1-collapse"> 
	<?php /* Primary navigation */
		wp_nav_menu( array(
		'menu' => 'top_menu',
		'depth' => 2,
		'container' => true,
		'menu_class' => 'nav navbar-nav',
		//Process nav menu using our custom nav walker
		'walker' => new wp_bootstrap_navwalker())
		);
	?> 
	</div>
</nav>