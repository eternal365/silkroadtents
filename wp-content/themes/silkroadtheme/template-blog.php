<?php 
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<div class="container">

	<div class="my-4 pb-4" id="content">

        <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
        <?php if( have_posts() ): ?>
            <?php while( have_posts() ): the_post(); ?>
            
            <div class="blog">
                <a href="<?php the_permalink(); ?>">
                    <div class="row">
                        <div class="col-sm-3 blog-img">
                            <?php the_post_thumbnail( array(200,220) ); ?>
                        </div>
                        <div class="col-sm-9">
                            <h2><?php the_title(); ?></h2>
                            <span class="meta">
                                <strong><?php the_time('F jS, Y'); ?></strong>
                            </span>
                            <?php the_excerpt(__('Continue reading »','example')); ?>
                        </div>
                    </div>    
                </a>
            </div><!-- blog -->  
            <hr>
            <?php endwhile; ?>

            <div class="navigation">
                <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
            </div><!-- /.navigation -->

        <?php else: ?>

            <div id="post-404" class="noposts">

                <p><?php _e('None found.','example'); ?></p>

            </div><!-- /#post-404 -->

        <?php endif; wp_reset_query(); ?>

    </div><!-- /#content -->

</div>

<?php get_footer(); ?>