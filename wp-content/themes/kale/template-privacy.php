<?php /* Template Name: Template Privacy */ ?>
<?php get_header(); ?>
    <h2 class="block-title" style="text-align: center;"><span><?php the_title(); ?></span></h2>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
<?php get_footer();?>