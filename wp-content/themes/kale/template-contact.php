<?php /* Template Name: Template Contact */ ?>
<?php get_header();?>


						<div class="row" data-fluid=".entry-title" align="center">
							<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
							$args = array(
								'post_type'        => 'contacus',
								'post_status'      => 'publish',
								'posts_per_page' => 3,
							); ?>
							<?php query_posts($args); ?>
							<?php if (have_posts()) : while (have_posts()) : the_post();?>
							<div class="col-md-4" style="display: inline-block;">
                                <h2 class="block-title"><span><?php the_title();?></span></h2>
								<div class="entry-content">
									<div class="entry-thumb">
										<?php the_post_thumbnail('contact-thumbnail');?>
									</div>
									<table style="line-height: 30px; width: 100%;" border="0">
									<?php if ( have_rows( 'contact_info' ) ):
										while ( have_rows( 'contact_info' ) ) : the_row();?>
										<tbody>
										<tr>
											<td style="padding: 2px;color: #48855e;"><strong>Address: </strong></td>
											<td style="padding: 2px;"><strong><?php the_sub_field( 'address' ) ?></strong></td>
										</tr>
										<tr>
											<td style="padding: 2px;color: #48855e;"><strong>Telephone: </strong></td>
											<td style="padding: 2px;"><strong><?php the_sub_field( 'telephone' ) ?></strong></td>
										</tr>
                                        <tr>
                                            <th rowspan="3" style="padding: 2px; color: #48855e;"><strong>Hours:</strong></th>
                                            <td style="padding: 2px;"><strong>Mon – Fri 9:30 am – 7:30 pm</strong></td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 2px;"><strong>Sat 9:00 am – 7:00 pm</strong></td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 2px;"><strong>Sun 11:30 am – 5:30 pm</strong></td>
                                        </tr>
										</tbody>
									</table>
									<?php endwhile; endif;?>
								</div>
							</div>
							<?php endwhile; endif; ?>
						</div>
<br>
<hr>
				<div align="center"><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1SN-Kgz9fNwCG3kNU9ZqBB8xPpWI&z=13&amp;" width="100%" height="480"></iframe></div>

<?php get_footer();?>
