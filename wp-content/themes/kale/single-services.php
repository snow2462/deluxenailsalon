<?php get_header(); ?>
<h2 class="block-title" style="font-size: 30px;text-align: center;"><span><?php the_title(); ?></span></h2>
<div class="row" data-fluid=".entry-title">
	<?php if ( is_single( 'pedicure' ) || is_single( 'manicure' ) || is_single( 'massage' ) || is_single( 'facial' )) {
		// check if the repeater field has rows of data
		if ( have_rows( 'extraservice' ) ):
			// loop through the rows of data
			while ( have_rows( 'extraservice' ) ) : the_row();?>
                <div class="col-sm-6 col-md-4 col-xs-12">
                        <h2><span style="color: #eab800;"><?php the_sub_field( 'title' );?></span></h2>
                                <table style="width: 90%;">
                                    <tbody >
                                    <tr>
                                        <td><strong><?php the_sub_field( 'price' ); ?></strong></td>
                                        <td style="text-align: right;"><strong><?php the_sub_field( 'minutes' ); ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align: justify;"><span class="entry-summary"><?php the_sub_field( 'description' ); ?></span></td>
                                    </tr>
                                        <?php if(get_sub_field('subtitle')){?>
                                    <tr>
                                            <th colspan="2" style="text-align: justify;"><strong><?php the_sub_field( 'subtitle' ); ?></strong></th>
                                    </tr>
                                        <?php } else
                                        {
                                            //nothing
                                        }?>
                                    </tbody>
                                </table>

                </div>
			<?php endwhile;
		else :
			// no rows found
		endif;
	} else if ( is_single( 'nails' ) ){ ?>

            <div class="col-sm-6 col-md-4">
                <h2><span style="color: #eab800;"><?php $field = get_field_object( 'solar' );
						echo $field['label'];
						?></span></h2>
                <p class="entry-summary"><?php echo $field['instructions']; ?></p>
                <table style="line-height: 30px; width: 90%;">
					<?php
					if ( have_rows( 'solar' ) ):
						// loop through the rows of data
						while ( have_rows( 'solar' ) ) : the_row(); ?>
                            <tbody>
                            <tr>
                                <td><strong><?php the_sub_field( 'name' ) ?></strong></td>
                                <td style="text-align: right;"><strong><?php the_sub_field( 'price' ) ?></strong></td>
                            </tr>
                            </tbody>
						<?php endwhile;
					else :
						// no rows found
					endif;
					?>
                </table>
            </div>
            <div class="col-sm-6 col-md-4">
                <h2><span style="color: #eab800;"><?php $field = get_field_object( 'gel' );
						echo $field['label'];
						?></span></h2>
                <table style="line-height: 30px; width: 90%;">
					<?php
					if ( have_rows( 'gel' ) ):
						// loop through the rows of data
						while ( have_rows( 'gel' ) ) : the_row(); ?>
                            <tbody>
                            <tr>
                                <td><strong><?php the_sub_field( 'name' ) ?></strong></td>
                                <td style="text-align: right;"><strong><?php the_sub_field( 'price' ) ?></strong></td>
                            </tr>
                            </tbody>
						<?php endwhile;
					else :
						// no rows found
					endif;
					?>
                </table>
            </div>
            <div class="col-sm-6 col-md-4">
                <h2><span style="color: #eab800;"><?php $field = get_field_object( 'nails' );
						echo $field['label'];
						?></span></h2>
                <p class="entry-summary"><?php echo $field['instructions']; ?></p>
                <table style="line-height: 30px; width: 90%;" border="0">
					<?php
					if ( have_rows( 'nails' ) ):
						// loop through the rows of data
						while ( have_rows( 'nails' ) ) : the_row(); ?>
                            <tbody>
                            <tr>
                                <td><strong><?php the_sub_field( 'name' ) ?></strong></td>
                                <td style="text-align: right;"><strong><?php the_sub_field( 'price' ) ?></strong></td>
                            </tr>
                            </tbody>
						<?php endwhile;
					else :
						// no rows found
					endif;
					?>
                </table>
            </div>
            <div class="col-sm-6 col-md-4">
                <h2><span style="color: #eab800;"><?php $field = get_field_object( 'other' );
						echo $field['label'];
						?></span></h2>
                <table style="line-height: 30px; width: 90%;" border="0">
					<?php
					if ( have_rows( 'other' ) ):
						// loop through the rows of data
						while ( have_rows( 'other' ) ) : the_row(); ?>
                            <tbody>
                            <tr>
                                <td><strong><?php the_sub_field( 'name' ) ?></strong></td>
                                <td style="text-align: right;"><strong><?php the_sub_field( 'price' ) ?></strong></td>
                            </tr>
                            </tbody>
						<?php endwhile;
					else :
						// no rows found
					endif;
					?>
                </table>
            </div>

	<?php } else if ( is_single( 'kid' ) )
	{
	?>
        <div class="col-sm-6 col-md-4">
            <h2><span style="color: #eab800;"><?php $field1 = get_field_object( 'kids1' );
					echo $field1['label']; ?></span></h2>
            <span style="color: #ff0000;"><strong><?php echo $field1['instructions']; ?></strong></span>
            <table style="line-height: 30px; width: 90%;" border="0">
				<?php
				if ( have_rows( 'kids1' ) ):
					// loop through the rows of data
					while ( have_rows( 'kids1' ) ) : the_row(); ?>
                        <tbody>
                        <tr>
                            <td><strong><?php the_sub_field( 'name' ) ?></strong></td>
                            <td style="text-align: right;"><strong><?php the_sub_field( 'price' ) ?></strong></td>
                        </tr>
                        </tbody>
					<?php endwhile;
				else :
					// no rows found
				endif;
				?>
            </table>
			<?php $field2 = get_field_object( 'kids2' ); ?>
            <span style="color: #ff0000;"><strong><?php echo $field2['instructions']; ?></strong></span>
            <table style="line-height: 30px; width: 90%;" border="0">
				<?php
				if ( have_rows( 'kids2' ) ):
					// loop through the rows of data
					while ( have_rows( 'kids2' ) ) : the_row(); ?>
                        <tbody>
                        <tr>
                            <td><strong><?php the_sub_field( 'name' ) ?></strong></td>
                            <td style="text-align: right;"><strong><?php the_sub_field( 'price' ) ?></strong></td>
                        </tr>
                        </tbody>
					<?php endwhile;
				else :
					// no rows found
				endif;
				?>
            </table>
        </div>
		<?php }
		else if ( is_single( 'eyelash-extension' ) ) {
			?>

                <div class="col-sm-6 col-md-4">
                    <h2><span style="color: #eab800;"><?php $field = get_field_object( 'eyelash' );
						    echo $field['label'];
						    ?></span></h2>
                    <p class="entry-summary"><?php echo $field['instructions']; ?></p>
                    <table style="line-height: 30px; width: 90%;" border="0">
					    <?php
					    if ( have_rows( 'eyelash' ) ):
						    // loop through the rows of data
						    while ( have_rows( 'eyelash' ) ) : the_row(); ?>
                                <tbody>
                                    <tr>
                                        <td><strong><?php the_sub_field( 'name' ) ?></strong></td>
                                        <td style="text-align: right;"><strong><?php the_sub_field( 'price' ) ?></strong></td>
                                    </tr>
                                </tbody>
						    <?php endwhile;
					    else :
						    // no rows found
					    endif;
					    ?>
                    </table>
                </div>
                <div align="center"><img style="border-radius: 25px;"src="<?php echo TEMPLATE_DIRECTORY_URI;?>/img/eye.png" width="50%" height="50%"/></div>

		<?php } else if ( is_single( 'waxing' ) ) {
			?>
                <div class="col-sm-6 col-md-4">
                    <h2><span style="color: #eab800;"><?php $field = get_field_object( 'waxing' );
							echo $field['label'];
							?></span></h2>
                    <table style="line-height: 30px; width: 90%;" border="0">
						<?php
						if ( have_rows( 'waxing' ) ):
							// loop through the rows of data
							while ( have_rows( 'waxing' ) ) : the_row(); ?>
                                <tbody>
                                <tr>
                                    <td><strong><?php the_sub_field( 'name' ) ?></strong></td>
                                    <td style="text-align: right;"><strong><?php the_sub_field( 'price' ) ?></strong>
                                    </td>
                                </tr>
                                </tbody>
							<?php endwhile;
						else :
							// no rows found
						endif;
						?>
                    </table>
                </div>
                <div class="col-sm-6 col-md-4">
                    <h2><span style="color: #eab800;"><?php $field = get_field_object( 'threading' );
							echo $field['label'];
							?></span></h2>
                    <table style="line-height: 30px; width: 90%;" border="0">
						<?php
						if ( have_rows( 'threading' ) ):
							// loop through the rows of data
							while ( have_rows( 'threading' ) ) : the_row(); ?>
                                <tbody>
                                <tr>
                                    <td><strong><?php the_sub_field( 'name' ) ?></strong></td>
                                    <td style="text-align: right;"><strong><?php the_sub_field( 'price' ) ?></strong>
                                    </td>
                                </tr>
                                </tbody>
							<?php endwhile;
						else :
							// no rows found
						endif;
						?>
                    </table>
                </div>

		<?php }
		?>
    </div>
	<?php get_footer(); ?>
