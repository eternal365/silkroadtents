<?php get_header(); ?>
</div><!-- container -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	

	<div class="row">
	  
	  	<div class="col-md-8 offset-md-2">

			<div class="page-content">

					
				  	<?php get_search_form(); ?>
				  	<?php edit_post_link('edit', '<p>', '</p>'); ?>

			</div><!-- page-content -->

	  	</div><!-- col-md-12 -->
	  
	</div><!-- row -->


<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>