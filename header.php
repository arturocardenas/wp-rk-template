<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?>
</head>
<body>
<header>
<h1><?php bloginfo('name'); ?></h1>
</header>
<nav class="navbar navbar-default">
	<div class="container-fluid">
			<!--<ul class="main-nav">-->
			<ul class="nav navbar-nav">
			<?php wp_nav_menu(array('theme_location' => 'navigation')); ?>
			</ul>
	</div>
</nav>