<?php get_header(); ?>                
				<section class="grid_10">
					<?php $posts = query_posts($query_string.'&cat=7&posts_per_page=5'); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    	<h3><?php the_title(); ?></h3>
                        <small><?php the_time('F j, Y'); ?></small>
                     	<?php the_content(); ?>
                        
						<?php
                        $args = array(
                            'post_type' => 'attachment',
                            'numberposts' => null,
                            'post_status' => null,
                            'post_parent' => $post->ID
                        );
                        $attachments = get_posts($args);
                        if ($attachments) {
							echo '<p>Attachments:</p>
								  <ul id="attachments">';
                            foreach ($attachments as $attachment) {
                                echo '<li><a href=' . wp_get_attachment_url($attachment->ID, false) . '>'.$attachment->post_title.'</a></li>';
							}
							echo '</ul>';
                        }
                        ?>                        

                    
                    <?php endwhile; else : ?>
                    <p>Cannot find what you are looking for.</p>
                    <?php endif; ?>
                    
                </section>
<?php 
	get_sidebar();  
	get_footer();
?>