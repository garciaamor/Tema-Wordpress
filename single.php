<?php get_header(); ?>

<h1>MENU</h1>
    <?php wp_nav_menu( array( 'menu' => 'menu1' ) ); ?>
    

<p>
Este artículo fue publicado el <?php the_time('l, F jS, Y') ?> a la(s) <?php the_time() ?>
</p>
<?php get_sidebar(); ?>
<?php edit_post_link('Edita esta entrada.','',''); ?>