<?php get_header(); ?>

				<section class="grid_10"> 

<?php if (have_posts()): ?>
                    <h3>Search Results for:</h3>
                    <h4><?php the_search_query(); ?></h4>
<?php while (have_posts()):	the_post();
?>
                    <div class="post-item">
                    	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                     	<?php the_excerpt('...Read More'); ?>
                    </div>
                    
<?php endwhile; ?>
                    <?php posts_nav_link(); ?>

<?php else : ?>
                    <h3>Nothing found for:</h3>
                    <h4><?php the_search_query(); ?></h4>
                    <p>Try refining your search and try again:</p>
                    <?php get_search_form(); ?>
<?php endif; ?>
				</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
