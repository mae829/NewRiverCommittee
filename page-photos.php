<?php 
/*
Template Name: Photos
*/

	######### REQUIRE HEADER FILE #########
	get_header();
?>
				<section class="grid_10">                    
                    <div>
		               	<h3 class="page-title"><?php the_title(); ?></h3>
                        <?php
		$args = array(
			'post_parent'    => get_the_ID(),
			'post_type'      => 'attachment',
			'numberposts'    => -1, // show all
			'post_status'    => null,
			'post_mime_type' => 'image',
			'offset'		 => 1,
			'orderby'		 => 'menu_order',
			'order'			 => 'ASC'
		);
		$images = get_children($args);
		$counter = 0;
		$theme_url = get_bloginfo('template_url');

		if($images) {			
			//thumbnail loop
			foreach($images as $image) {
				$imgThumb    = wp_get_attachment_image($image->ID,'thumbnail'); //thumbnail full img tag
				$imgMed      = wp_get_attachment_image_src($image->ID,'medium'); //medium full img tag
				$imageLarge  = wp_get_attachment_image_src($image->ID,'large'); //large image url
				$imgTitle    = apply_filters('the_title',$image->post_title);
				$imgDesc	 = $image->post_content;
				
				echo "<div class=\"gallery-image\">
						  <a href=\"$imageLarge[0]\" rel=\"prettyPhoto\"><img src=\"$imgMed[0]\" alt=\"$imgTitle\" /></a>
						  <h4>$imgTitle</h4>
						  <p>$imgDesc</p>
					  </div>
					  <div class=\"clear\"></div>";
			}

		} else {
			echo "<p>No images are in this gallery</p>";
		}
						?>
						
                    </div>
                </section>
<?php 
	get_sidebar();  
	get_footer();
?>