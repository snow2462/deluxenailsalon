<?php get_header(); ?>
<h1 style="font-size: 40px;text-align: center;"><?php the_title();?> Services</h1>
<div class="row" data-fluid=".entry-title">
	<?php
	// check if the repeater field has rows of data
	if( have_rows('extraservice') ):
	// loop through the rows of data
	$i=0; while ( have_rows('extraservice') ) : the_row(); $i++; ?>
        <div class="col-md-4">
            <div id="post-<?php the_ID(); ?>" <?php post_class('entry ' . $kale_post_class); ?>>
                <h2><?php the_sub_field('title');?> <?php the_sub_field('price');?></h2>
                <div><h3>Duration: <?php the_sub_field('minutes');?></h3></div>
                <div class="entry-content">
                    <div class="entry-thumb">
	                    <img src="<?php echo home_url( '/' ) . 'image.php?image=' . get_sub_field( 'image' ) . '&width=300&height=200&cropratio=3.9928:3'; ?>"/>
                    </div>
                <div style="width: 300px; word-wrap: break-word;">
                    <p><b><?php the_sub_field('subtitle');?></b></p>
                    <div class="entry-summary"><?php the_sub_field('description');?></div>
                </div>

                </div>
            </div>
        </div>
        <?php if($i%3==0) { ?>
            <div style="clear: both"></div>
            <?php } ?>
	<?php endwhile;
	else :
		// no rows found
	endif;
	?>
</div>
<?php get_footer(); ?>
