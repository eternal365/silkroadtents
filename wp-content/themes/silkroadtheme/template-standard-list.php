<?php 
/*
Template Name: Standard List
*/
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_header(); ?>	
<div class="container">
	<div class="row">
		<div class="col-12">
			<h1 class="text-center my-4"><?php the_title(); ?></h1>
		</div>
	</div>
</div>
	<div class="container">
		<div class="row">	
			<div class="col-12">
				<div class="page-content mt-4 mb-8">
					<div class="row">
							<!-- Content -->
							<?php
								$args = array(
									'post_type'      => 'page',
									'posts_per_page' => 999,
									'post_parent'    => $post->ID,
									'orderby' => 'menu_order',
									'order' => 'ASC',
									'post_status' => 'publish',
								);
								// 'orderby' => 'date',
								// 	'order' => 'ASC',
		
							$parent = new WP_Query( $args );
							if ( $parent->have_posts() ) : ?>
								<?php 
								$count = 1;
								while ( $parent->have_posts() ) : $parent->the_post(); ?>
								<?php 
								$total_count = $parent->post_count;
								//echo $count;
								//echo $total_count;
								
								$image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'page-list', false, '' );

								?>

									<div class="col-6 my-4">
										<a href="<?php the_permalink(); ?>" class="list">
											<?php 
												if( $image ) { ?>
												<div class="standard-list-img" style="background:url('<?php echo $image[0]; ?>') no-repeat center;background-size: cover;">
													<div class="standard-list-title text-center text-white">
														<?php the_title(); ?>
													</div>	
												</div>
											
											<?php } ?>
										</a>
									</div>    
								<?php $count++; endwhile; ?>
							<?php endif; wp_reset_query(); ?> 
							<!-- Content End -->	
					</div>				
					<div class="more">
					</div>		
				</div><!-- page-content -->
			</div><!-- col-12 -->
		</div><!-- row -->
	</div><!-- container -->	    
<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>