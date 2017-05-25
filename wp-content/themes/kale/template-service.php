<?php /* Template Name: Template Service */ ?>
<?php get_header(); ?>
<h2 class="block-title" style="font-size: 30px;text-align: center;"><span><?php the_title(); ?></span></h2>
<div class="entry-summary"><p style="text-align: center; font-size: 16px;">We also offer in home services at double the normal price. Please contact us for more information.</p></div>
<div class="row" data-fluid=".entry-title" align="center">
    <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type'        => 'services',
        'post_status'      => 'publish',
        'posts_per_page' => 8,
        'paged'          => $paged
    ); ?>
    <?php query_posts($args); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <div class="col-md-3" style="display: inline-block;">
                <div class="entry-content">
                    <a href="<?php the_permalink();?>"><h3 class="entry-title"><?php the_title();?></h3>
                    <div class="entry-thumb">
                        <?php if(has_post_thumbnail()) { ?>
                            <a href="<?php the_permalink();?>">
                                <img src="<?php echo get_the_post_thumbnail_url();?>" style="width: 270px; height: 142px; " alt="<?php the_title();?>"/>
                            </a>
                        <?php } else{
                            //nothing
                        } ?>
                    </div>
                    <div class="entry-summary" style="text-align: center;"><?php the_content(); ?></div>
                </div>
        </div>
    <?php endwhile; endif; ?>
</div>



<?php get_footer(); ?>
