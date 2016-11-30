<?php get_header(); ?>

    <h1>MENU</h1>
    <?php wp_nav_menu( array( 'menu' => 'menu2' ) ); ?>
   
    <section id="main"> 

<?php 

    if ( have_posts() ):
    while(have_posts()):
        the_post();?>
        <h2 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
<?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

            
        </h2><?php
        the_content();
        endwhile;
        endif;
    ?>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
