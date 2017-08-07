<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido del post -->
<?php if( have_posts() ) : the_post(); ?>
<section>
<h1><?php the_title(); ?></h1>
<time datetime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
<?php the_content(); ?>
<?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
<address>Por <?php the_author_posts_link(); ?></address>
<?php the_category(); ?>
<!-- Comments -->
<?php comments_template(); ?>
</section>
<?php else : ?>
<p><?php -e('Ups!, esta entrada no existe.'); ?></p>
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<?php //get_sidebar(); ?>
<!-- Archivo de pie global de Wordpress -->
<?php get_footer(); ?>