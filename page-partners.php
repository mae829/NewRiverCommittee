<?php 
/*
Template Name: Partners
*/

	######### REQUIRE HEADER FILE #########
	get_header();
?>
				<section class="grid_10">                    
                    <div>
                      <h4>Policymakers who have demonstrated their support for this issue:</h4>
                      <ul>
<?php wp_list_bookmarks('title_li=&categorize=0&category_name=partners'); ?>
                      </ul>
                    </div>
                </section>
<?php 
	get_sidebar();  
	get_footer();
?>