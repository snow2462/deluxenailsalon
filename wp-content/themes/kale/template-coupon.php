<?php /* Template Name: Template Coupon */ ?>
<?php get_header(); ?>
	<div class="row" data-fluid=".entry-title" align="center">
        <h2 class="block-title" style="text-align: center"><span>These Coupons are applied for Deluxe Nail Salon 3</span></h2>
		<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$args = array(
			'post_type'        => 'coupon',
			'post_status'      => 'publish',
			'posts_per_page' => 3,
			'tax_query' => array(
				array(
					'taxonomy' => 'coupontype',
                    'field' => 'slug',
                    'terms' => 'watercrest'
				)
			)
		); ?>
		<?php query_posts($args); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<div class="col-md-4" style="display: inline-block;">
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
    <div class="row" data-fluid=".entry-title" align="center">
        <h2 class="block-title" style="text-align: center"><span>These Coupons are applied for Deluxe Nail Salon 1 and Deluxe Nail Salon 2</span></h2>
		<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$args = array(
			'post_type'        => 'coupon',
			'post_status'      => 'publish',
			'posts_per_page' => 3,
			'tax_query' => array(
				array(
					'taxonomy' => 'coupontype',
					'field' => 'slug',
					'terms' => 'forest'
				)
            )
		); ?>
		<?php query_posts($args); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
            <?php $term = get_terms()?>
            <div class="col-md-4" style="display: inline-block;">
                <div id="post-<?php the_ID(); ?>" <?php post_class('entry ' . $kale_post_class); ?>>
                    <div class="entry-content">
                        <div class="entry-thumb">
							<?php if(has_post_thumbnail()) { ?>
								<?php $biggerImage = get_the_post_thumbnail_url(); ?>
                                <a href="<?php echo $biggerImage?>"><img src="<?php the_post_thumbnail_url('thumbnail-coupon');?>"></a>
							<?php } else {//nothing
                            } ?>
                        </div>
                        <div class="entry-summary"><?php the_content(); ?><?php wp_link_pages(); ?></div>
                    </div>
                </div>
            </div>
		<?php endwhile; endif; ?>
    </div>
<?php get_footer(); ?>