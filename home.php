<!-- Archivo de cabecera global de wordpress -->
<?php get_header(); ?>
<div class="container contenido">
<!-- Listado de posts -->
<?php if(have_posts()): ?>
<section class="col col-sm-8">
<?php while(have_posts()):the_post(); ?>
<article>
<header>
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<time datetime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
<?php the_category(); ?>
</header>
<?php the_excerpt(); ?>
<footer>
<?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
<address>Por <?php the_author_posts_link(); ?></address>
</footer>
</article>
<?php endwhile; ?>
<div class="pagination">
<span class="in-left"><?php next_posts_link('<< Entradas antiguas'); ?></span>
<span class="in-right"><?php previous_posts_link('Entradas mas recientes >>'); ?></span>
</div>
</section>
<?php else: ?>
<p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>
<section class="col col-sm-4">
<!-- Archivo de barra lateral por defecto -->
<?php get_sidebar(); ?>
</section>
</div>
<!-- Archivo de pie global de Wordpress -->
<?php get_footer(); ?>
