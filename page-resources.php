<?php 
/*
Template Name: Resources & Links
*/

	######### REQUIRE HEADER FILE #########
	get_header();
?>
				<section class="grid_10">
                    
                    <div class="listing">
                    
						<?php 
                            global $wp_query;
                            $wp_query = new WP_Query("post_type=newsletter&post_status=publish&posts_per_page=-1");
                            if ($wp_query->have_posts()) : 
                        ?> 
                        <h4>Resources:</h4>
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
                        
                    </div>
                    
                    <div class="listing">
                      <h4>Links:</h4>
                      <ul>
<?php wp_list_bookmarks('title_li=&categorize=0&category=9'); ?>
                      </ul>
                    </div>
                </section>
<?php 
	get_sidebar();  
	get_footer();
?>