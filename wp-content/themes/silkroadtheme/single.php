<?php get_header(); ?>
<div class="container">

	<div class="row">
		<div class="col-12 content">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php the_post_thumbnail('post-thumbnail', array( 'class'	=> "img-fluid")); ?>
					<?php the_content(); ?>
					<?php edit_post_link('edit', '<p>', '</p>'); ?>	  

					<?php //comments_template(); ?>	 

				<?php endwhile; else: ?>
					<p><?php _e('Sorry, this page does not exist.'); ?></p>
				<?php endif; ?>

		</div>
	
	</div>
</div>

<?php get_footer(); ?>