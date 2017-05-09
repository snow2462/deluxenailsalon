<?php /* Template Name: Template Service */ ?>
<?php get_header(); ?>


<div class="art-content-layout" style="text-align: center">
    <div class="art-content-layout-row" style="display: inline-block;">
        <div class="art-layout-cell art-content clearfix"><article id="Home" class="noview  art-post art-article  post-184 post type-post status-publish format-standard hentry category-uncategorized" style="display: block;">
                    <div class="chung" style="width: 100%; margin-top: 30px;">
	                    <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	                    $args = array(
		                    'post_type'        => 'services',
		                    'post_status'      => 'publish',
		                    'posts_per_page' => 6,
	                    ); ?>
	                    <?php query_posts($args); ?>
	                    <?php if (have_posts()) : while (have_posts()) : the_post();?>
                        <div class="itemhm" style="width: 146px; float: left; margin-left: 8px; text-align: center;">
                            <p><a style="color: #303f50;" href="http://deluxenail629.com/manicure/"><strong><?php the_title();?></strong></a></p>
                            <div style="width: 146px; height: 10px; background-color: #48855e;"></div>
                            <p><a href="<?php the_permalink();?>">
                                    <img class="alignnone size-full wp-image-463 twoimg" style="margin-left: 0px;" title="Pedicure" alt="promotion" src="<?php echo the_post_thumbnail_url();?>" width="146" height="329"></a>
                            </p>
                        </div>
	                    <?php endwhile; endif; ?>
<!--                        <div class="itemhm" style="width: 146px; float: left; margin-left: 8px; text-align: center; margin-top: 30px;">-->
<!--                            <p><a style="color: #303f50;" href="http://deluxenail629.com/pedicure/"><strong>MANICURE</strong></a></p>-->
<!--                            <div style="width: 146px; height: 10px; background-color: #48855e;"></div>-->
<!--                            <p><a href="http://deluxenail629.com/pedicure/">-->
<!--                                    <img class="alignnone size-full wp-image-461 twoimg" style="margin-left: 0px;" title="Manicure" alt="membership" src="http://deluxenail629.com/wp-content/uploads/2014/04/121.jpg" width="146" height="329"></a>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <div class="itemhm" style="width: 146px; float: left; margin-left: 8px; text-align: center;">-->
<!--                            <p><a style="color: #303f50;" href="http://deluxenail629.com/Massage"><strong>MASSAGE</strong></a></p>-->
<!--                            <div style="width: 146px; height: 10px; background-color: #48855e; text-align: center;"></div>-->
<!--                            <p><a href="http://deluxenail629.com/Massage">-->
<!--                                    <img class="alignnone size-full wp-image-450 twoimg" style="margin-left: 0px;" title="Massage" alt="parties" src="http://deluxenail629.com/wp-content/uploads/2014/04/e.jpg" width="146" height="329"></a>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <div class="itemhm" style="width: 146px; float: left; margin-left: 8px; text-align: center; margin-top: 30px;">-->
<!--                            <p><a style="color: #303f50;" href="http://deluxenail629.com/other-services/"><strong>ACRYLIC NAILS</strong></a></p>-->
<!--                            <div style="width: 146px; height: 10px; background-color: #48855e;"></div>-->
<!--                            <p><a href="http://deluxenail629.com/other-services/">-->
<!--                                    <img class="alignnone size-full wp-image-455 twoimg" style="margin-left: 0px;" title="Acrylic Nails" alt="appointment" src="http://deluxenail629.com/wp-content/uploads/2014/04/d.jpg" width="146" height="329"></a>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <div class="itemhm" style="width: 146px; float: left; margin-left: 8px; text-align: center;">-->
<!--                            <p><a style="color: #303f50;" href="http://deluxenail629.com/other-services/"><strong>SOLAR NAILS</strong></a></p>-->
<!--                            <div style="width: 146px; height: 10px; background-color: #48855e;"></div>-->
<!--                            <p><a href="http://deluxenail629.com/other-services/">-->
<!--                                    <img class="alignnone size-full wp-image-459 twoimg" style="margin-left: 0px;" title="Solar Nails" alt="giftcard" src="http://deluxenail629.com/wp-content/uploads/2014/04/a.jpg" width="146" height="329"></a>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <div class="itemhm" style="width: 146px; float: left; margin-left: 8px; text-align: center; margin-top: 30px;">-->
<!--                            <p><a style="color: #303f50;" href="http://deluxenail629.com/waxing/"><strong>WAXING</strong></a></p>-->
<!--                            <div style="width: 146px; height: 10px; background-color: #48855e;"></div>-->
<!--                            <p><a href="http://deluxenail629.com/waxing/">-->
<!--                                    <img class="alignnone size-full wp-image-457 twoimg" style="margin-left: 0px;" title="Waxing" alt="services" src="http://deluxenail629.com/wp-content/uploads/2014/04/b.jpg" width="146" height="329"></a>-->
<!--                            </p>-->
<!--                        </div>-->
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>


<?php get_footer(); ?>
