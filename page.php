<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<div class="container contenido">
<!-- Contenido de pagina de inicio -->
<?php if( have_posts() ) : the_post(); ?>
<div class="col col-sm-8">
<section>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
</section>
</div>
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<?php get_sidebar(); ?>
</div>
<!-- Archivo de pie global de Wordpress -->
<?php get_footer(); ?>