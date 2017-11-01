<?php /* Template Name: Template News */ ?>

<?php get_header()?>
<div>
    <ul class="clearfix masonry grid">
<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type'        => 'services',
    'offset' => $offset,
    'post_status'      => 'publish',
    'posts_per_page' => 4,
    'paged'          => $paged
); ?>
<?php $the_query = new WP_Query($args); ?>
<?php if($the_query->have_posts()):while($the_query->have_posts()):$the_query->the_post()?>
    <li class="masonry-brick grid-item">
        <?php the_title();?>
    </li>

<?php endwhile; endif;?>
    </ul>
    <input id="totalpost" type="hidden" name="totalpost" value='<?php echo $totalPosts; ?>'/>
    <input id="offset" type="hidden" name="offset" value='12'/>
    <p class="btn-more btnmore" id="btnmorenew">
        <a href="javascript:void(0)" class="hover">さらに読み込む</a>
    </p>
</div>
<?php get_footer()?>
