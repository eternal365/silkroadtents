<?php get_header(); ?>


	<div class="row">

		<!-- <div class="top-distance"></div> -->

		<div class="col-sm-8 page-content">

			<h1 class="page-title">SEARCH RESULTS</h1>
		
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		  			<a href="<?php the_permalink(); ?>"> 
						<div class="media">
		       				<div class ="news-date media-object pull-left">
					  			<?php the_post_thumbnail('search-list'); ?>
		       			 	</div>
		           			<div class="media-body">	
							  	<h2><?php the_title(); ?></h2>
							  	<?php the_excerpt();?>
		           			</div>
		       			</div>
	       			</a>
	       			<?php wp_reset_postdata(); ?>
				<?php endwhile; else: ?>

					<p><?php _e('Sorry, this page does not exist.'); ?></p>

				<?php endif; ?>
				<br>
	  	</div> <!-- / col-sm-8 -->
	  
	</div> <!-- / row -->


<?php get_footer(); ?>
