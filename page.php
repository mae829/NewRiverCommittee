<?php get_header(); ?>

				<section class="grid_10">
                    <h3 class="page-title"><?php the_title(); ?></h3>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <?php the_content(); ?>
                    
                    
                    <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no content matched your criteria.'); ?></p>
                    <?php endif; ?>
                </section>
<?php get_sidebar(); ?>	 
<?php get_footer(); ?>