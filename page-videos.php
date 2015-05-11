<?php 
/*
Template Name: Videos
*/

	######### REQUIRE HEADER FILE #########
	get_header();
?>
				<section class="grid_10">                    
                    <div>
		               	<h3 class="page-title"><?php the_title(); ?></h3>
                        <ul>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <?php the_content(); ?>
                    
                    
                    <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no content matched your criteria.'); ?></p>
                    <?php endif; ?>
                        </ul>
                    </div>
                </section>
<?php 
	get_sidebar();  
	get_footer();
?>