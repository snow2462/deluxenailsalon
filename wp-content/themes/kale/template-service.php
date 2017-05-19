<?php /* Template Name: Template Service */ ?>
<?php get_header(); ?>
<h2 class="block-title" style="font-size: 30px;text-align: center;"><span><?php the_title(); ?></span></h2>

<div class="art-content-layout" style="width: auto; text-align: center; border: dashed;">
    <div class="art-content-layout-row" style="display: inline-block;">
        <div class="art-layout-cell art-content clearfix">
            <article id="Home"
                     class="noview  art-post art-article  post-184 post type-post status-publish format-standard hentry category-uncategorized"
                     style="display: block;">
                <div class="chung" style="width: 100%; margin-top: 30px;">
                    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'services',
                        'post_status' => 'publish',
                        'posts_per_page' => 7,
                    ); ?>
                    <?php query_posts($args); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="itemhm" style="width: 146px; float: left; text-align: center;">
                            <p><a style="color: #303f50;"
                                  href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong></a></p>
                            <div style="width: 146px; height: 10px; background-color: #48855e;"></div>
                            <p class="p"><a href="<?php the_permalink(); ?>">
                                    <img class="alignnone size-full wp-image-463 twoimg" style="margin-left: 0px;"
                                         title="<?php the_title(); ?>" alt="promotion"
                                         src="<?php echo the_post_thumbnail_url('service-thumbnail'); ?>" width="146"
                                         height="329"></a>
                            </p>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
        </div>
        </article>
    </div>
    <div class="art-content-layout-row" style="display: inline-block;">
        <p style="font-size: 20px;">
            We also offer in home service at double the normal price. Please contact us for more information.
        </p>
    </div>
</div>


<?php get_footer(); ?>
