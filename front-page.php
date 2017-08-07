<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<div class="container contenido">
<!-- Contenido de pagina de inicio -->
<?php if( have_posts() ) : the_post(); ?>
<section class="col col-sm-8">
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
</section>
<?php endif; ?>
<section class="col col-sm-4">
<!-- Archivo de barra lateral por defecto -->
<?php //get_sidebar(); ?>
<!-- Archivo de barra lateral 2 -->
<?php get_sidebar('2'); ?>
</section>
</div>
<!-- Archivo de pie global de Wordpress -->
<?php get_footer(); ?>