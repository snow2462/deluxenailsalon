<?php /* Template Name: Template Contact */ ?>
<?php get_header(); ?>

<h2 class="block-title" style="text-align: center;"><span><?php the_title(); ?></span></h2>
<div class="row" data-fluid=".entry-title" align="center" style="font-size: 16px; display: flex">
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'contacus',
        'post_status' => 'publish',
        'posts_per_page' => 2,
    ); ?>
    <?php query_posts($args); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-md-4" style=" margin: 0 auto;">
            <h2 class="block-title"><span><?php the_title(); ?></span></h2>
            <div class="entry-content">
                <div class="entry-thumb">
                    <?php the_post_thumbnail('contact-thumbnail'); ?>
                </div>
                <table style="line-height: 30px; width: 100%; margin:25px" border="0">
                    <?php if (have_rows('contact_info')):
                    while (have_rows('contact_info')) :
                    the_row(); ?>
                    <tbody>
                    <tr>
                        <td style="padding: 2px;color: #48855e;"><strong>Address: </strong></td>
                        <td style="padding: 2px;"><strong><?php the_sub_field('address') ?></strong></td>
                    </tr>
                    <tr>
                        <td style="padding: 2px;color: #48855e;"><strong>Telephone: </strong></td>
                        <td style="padding: 2px;"><strong><?php the_sub_field('telephone') ?></strong></td>
                    </tr>
                    <tr>
                        <th rowspan="3" style="padding: 2px; color: #48855e;"><strong>Hours:</strong></th>
                        <td style="padding: 2px;"><strong>Mon – Fri <?php the_field('monday_to_friday') ?></strong></td>
                    </tr>
                    <tr>
                        <td style="padding: 2px;"><strong>Sat <?php the_field('saturday') ?></strong></td>
                    </tr>
                    <tr>
                        <td style="padding: 2px;"><strong>Sun <?php the_field('sunday') ?></strong></td>
                    </tr>
                    </tbody>
                </table>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
</div>
<br>
<hr>
<style>
    .iframe-rwd  {
        position: relative;
        padding-bottom: 65.25%;
        padding-top: 30px;
        height: 0;
        overflow: hidden;
    }
    .iframe-rwd iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
<div align="iframe-rwd">
    <iframe src="https://www.google.com/maps/d/embed?mid=1SN-Kgz9fNwCG3kNU9ZqBB8xPpWI" width="100%" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>

<?php get_footer(); ?>
