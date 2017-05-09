<?php get_header(); ?>
<div class="row" data-fluid=".entry-title">
	<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args = array(
		'post_type'        => 'services',
		'post_status'      => 'publish',
		'posts_per_page' => 6
	); ?>
	<?php query_posts($args); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post();?>
        <h3>Pedicure</h3>
        <div class="col-md-4">
            <div id="post-<?php the_ID(); ?>" <?php post_class('entry ' . $kale_post_class); ?>>
                <div class="entry-content">
                    <div class="entry-thumb">
						<?php if(has_post_thumbnail()) { ?>
							<?php $biggerImage = get_the_post_thumbnail_url(); ?>
                            <a href="<?php echo $biggerImage;?>"><?php the_post_thumbnail( array(380,200) ); ?></a>
						<?php } else
						{
							//nothing
						} ?>
                    </div>
                    <div class="entry-summary"><?php the_content(); ?><?php wp_link_pages(); ?></div>
                </div>
            </div>
        </div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
