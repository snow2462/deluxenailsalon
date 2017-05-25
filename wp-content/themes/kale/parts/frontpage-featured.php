<?php
/**
 * Frontpage - Featured Posts
 *
 * @package kale
 */
?>
<?php
$kale_frontpage_featured_posts_show = kale_get_option('kale_frontpage_featured_posts_show');
if($kale_frontpage_featured_posts_show == 1) {
    global $post;
    $kale_frontpage_featured_posts_heading = kale_get_option('kale_frontpage_featured_posts_heading');
    $kale_frontpage_featured_posts_post_1 = kale_get_option('kale_frontpage_featured_posts_post_1');
    $kale_frontpage_featured_posts_post_2 = kale_get_option('kale_frontpage_featured_posts_post_2');
    $kale_frontpage_featured_posts_post_3 = kale_get_option('kale_frontpage_featured_posts_post_3');
    $kale_entry = 'small'; ?>
    <!-- Frontpage Featured Posts -->
    <div class="frontpage-featured-posts" style="font-size: 16px;">
        <h2 class="block-title"><span>What we offer</span></h2>
        <div class="row" data-fluid=".entry-title" align="center">
	<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args = array(
		'post_type'        => 'post',
		'post_status'      => 'publish',
		'posts_per_page' => 3,
		'paged'          => $paged
	); ?>
	<?php query_posts($args); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post();?>
            <div class="col-md-4" style="display: inline-block;">
                <div id="post-<?php the_ID(); ?>" <?php post_class('entry ' . $kale_post_class); ?>>
                    <div class="entry-content">
                        <h3 class="entry-title"><?php the_title();?></h3>
                        <div class="entry-thumb">
				            <?php if(has_post_thumbnail()) { ?>
					            <?php the_post_thumbnail('thumbnail-product'); ?>
				            <?php } else{
					            //nothing
				           } ?>
                        </div>
                        <div class="entry-summary" style="text-align: center;"><?php the_content(); ?></div>
                    </div>
                </div>
            </div>
	<?php endwhile; endif; ?>
        </div>

	</div>
	<!-- /Frontpage Featured Posts -->
<?php } ?>