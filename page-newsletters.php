<?php 
/*
Template Name: Newsletters
*/

	######### REQUIRE HEADER FILE #########
	get_header();
?>
				<section class="grid_10"> 
                	<h3 class="page-title"><?php the_title(); ?></h3>
					<?php 
                        global $wp_query;
                        $wp_query = new WP_Query("post_type=newsletter&post_status=publish&posts_per_page=-1");
                        if ($wp_query->have_posts()) : 
                    ?> 
                    <ul>
					<?php 
						while ($wp_query->have_posts()) : $wp_query->the_post(); 
					
						$args = array(
							'post_type' => 'attachment',
							'numberposts' => null,
							'post_status' => null,
							'post_parent' => $post->ID
						);
						$attachments = get_posts($args);
						if ($attachments) {
							foreach ($attachments as $attachment) {
								echo '<li><a href=' . wp_get_attachment_url($attachment->ID, false) . '>'.$post->post_title.'</a></li>';                            }
						}
                    ?>                        
                    <?php endwhile; ?>
                    </ul>					
					<?php endif; wp_reset_query();?>
                </section>
<?php 
	get_sidebar('alternative');  
	get_footer();
?>