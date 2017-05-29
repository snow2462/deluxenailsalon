<?php
/**
* The main template file.
* 
* @package kale
*/
?>
<?php get_header(); ?>
	<h2 class="block-title" style="text-align: center; "><span>Welcome to Deluxe Nail Salon</span></h2>
<?php if(is_front_page() && !is_paged() ) {
	do_slideshowck(61);
	get_template_part('parts/frontpage', 'featured');
} ?>
<?php if(is_front_page() && !is_paged() ) {
	get_template_part('parts/frontpage', 'large');
} ?>
<?php get_footer(); ?>