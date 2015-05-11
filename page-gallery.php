<?php 
/*
Template Name: Media
*/

	######### REQUIRE HEADER FILE #########
	get_header();
?>
				<section class="grid_10">                    
                    <div>
		               	<h3 class="page-title"><?php the_title(); ?></h3>
                        <ul>
                        <?php wp_list_pages('title_li=&child_of='.$post->ID); ?>
                        </ul>
                    </div>
                </section>
<?php 
	get_sidebar();  
	get_footer();
?>