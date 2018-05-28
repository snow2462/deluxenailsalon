<?php /* Template Name: Template About */ ?>
<?php get_header(); ?>
<h2 class="block-title" style="text-align: center;"><span><?php the_title(); ?></span></h2>
<?php echo do_shortcode("[huge_it_slider id='2']"); ?>

<br>
<h3 class="block-title" style=" padding-top: 30px; text-align: center;"><span>Thank you for choosing Deluxe Nail Salon</span></h3>
<div class="row" data-fluid=".entry-title" align="center">
    <div class="col-sm-6">
        <div id="post-<?php the_ID(); ?>" <?php post_class('entry ' . $kale_post_class); ?>>
            <div class="entry-content" style=" font-size: 20px;">
                <?php if (have_posts()) : while (have_posts()) : the_post();
                    the_content();
                endwhile;
                else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
            <div class="entry-content"><h6 style="font-size: 20px">share us with everyone!!</h6></div>
            <div class="entry-content">
                <a href="https://www.facebook.com/Deluxe-Nail-Salon-191290404253758/"><img
                            src="<?php echo TEMPLATE_DIRECTORY_URI; ?>/img/facebook.png" width="30" height="30"/></a>
                <a href="https://twitter.com/deluxenailsalo1"><img
                            src="<?php echo TEMPLATE_DIRECTORY_URI; ?>/img/twitter.png" width="30" height="30"/></a>
                <a href="https://www.instagram.com/deluxenailsalon1/"><img
                            src="<?php echo TEMPLATE_DIRECTORY_URI; ?>/img/instagram.png" width="30" height="30"/></a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <img src="<?php echo the_post_thumbnail_url(); ?>" width="80%" height="40%"/>
    </div>
</div>
<div style="padding-top: 60px;">
    <h3 class="block-title" style="font-size: 20px;text-align: center;"><span>Our Motto</span></h3>
    <div class="row" data-fluid=".entry-title" align="center">
        <?php
        if (have_rows('motto')):
            while (have_rows('motto')) : the_row();
                ?>
                <div class="col-md-4">
                        <table style="text-align: center; max-width: 70%; ">
                            <tr>
                                <td>
                                    <img src="/image.php?url=<?php echo get_sub_field('image')?>&width=128h&height=128&cropratio=1:1"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size: 25px; color: #48855e;">
                                    <strong><?php echo the_sub_field('title'); ?></strong></td>
                            </tr>
                            <tr>
                                <td style="font-size: 16px;"><strong><?php echo the_sub_field('description') ?></strong>
                                </td>
                            </tr>
                        </table>
                </div>
            <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>
