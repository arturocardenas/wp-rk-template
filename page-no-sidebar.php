<?php
/**
 * Theme: rk-theme
 *
 * Template Name: Page - No Sidebar
 *
 * Page with no sidebar, but still contained within the page margins
 *
 * This is the template that displays full width pages with no sidebar.
 *
 * @package rk-theme
 */

get_header(); ?>
<div class="container">
<!-- Contenido de pagina de inicio -->
<?php if( have_posts() ) : the_post(); ?>
<div class="col col-sm-12">
<section>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
</section>
</div>
<?php endif; ?>
</div>
<!-- Archivo de pie global de Wordpress -->
<?php get_footer(); ?>