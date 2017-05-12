<?php
/**
* The main template file.
* 
* @package kale
*/
?>
<?php get_header(); ?>
	<h2 class="block-title" style="font-size: 30px;text-align: center;"><span><?php the_secondary_title();?></span></h2>
<?php if(is_front_page() && !is_paged() ) {
	do_slideshowck(61);
	get_template_part('parts/frontpage', 'featured');
} ?>
<?php if(is_front_page() && !is_paged() ) {
	get_template_part('parts/frontpage', 'large');
} ?>
<?php get_footer(); ?>