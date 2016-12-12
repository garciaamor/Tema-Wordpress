<?php get_header(); ?>

<div id="divPrincipal" class="clearfix">   
<div id="divLoop">
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

</div>

<div id="divSide">
<?php get_sidebar(); ?>
</div>
</section>
</div>
<div id="divFoot">
<?php get_footer(); ?>
</div>
