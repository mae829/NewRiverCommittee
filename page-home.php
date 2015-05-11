<?php 
/*
Template Name: Home
*/
	get_header();
?>                
                <div id="banner">
                    <ul id="slider">
                        <li class="slide">
                            <img src="<?php bloginfo('template_url'); ?>/images/banner-pic1.png" alt="">
                            <h2>Be Informed</h2>
                            <p>
                            	Learn more about<br />
                                the dangers & risks<br />
                                the New River inflicts<br />
                                on our community
							</p>
                        </li>
                        
                        <li class="slide">
                            <img src="<?php bloginfo('template_url'); ?>/images/banner-pic2.png" alt="">
                            <h2>Help Out</h2>
                            <p>
                            	DO YOUR PART TO SAVE<br />
								OUR COMMUNITY
                            </p>
                            <form id="donate-form" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_xclick"/>
                                <input type="hidden" name="business" value="info@calexiconewriver.com"/>
                                <input type="hidden" name="item_name" value="Calexico New River Committee"/>
                                <input type="hidden" name="no_note" value="1">
                                <input type="hidden" name="currency_code" value="USD"/>
                                <input type="hidden" name="tax" value="0"/>
                                <input id="donate-button" class="button donate" name="submit" type="submit" value="Paypal Donations" title="Make payments with PayPal - it's fast, free and secure!"/>
                            </form>

                        </li>
                    </ul>
                    
                    <div id="news-scroller">
                        <h3>News &amp; Articles</h3>
                        
						<?php $posts = query_posts($query_string.'&cat=7&posts_per_page=2'); ?>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          				<div class="entry">
                            <h5><a href="<?php the_permalink(); ?>">
                            <?php
								$len = 45; //Number of words to display in title
								$newTitle = substr($post->post_title, 0, $len); //truncate title according to $len
								if(strlen($newTitle) < strlen($post->post_title)) {
									$newTitle = $newTitle . "[...]";
								}
								echo $newTitle; //finally display title
							?>
                            	
                            </a></h5>
                            <?php
								$len = 100; //Number of words to display in excerpt
								$newExcerpt = substr($post->post_content, 0, $len); //truncate excerpt according to $len
								if(strlen($newExcerpt) < strlen($post->post_content)) {
									$newExcerpt = $newExcerpt." <a href=\"" . get_permalink() . "\">...Read more.</a>";
								}
								echo "<p>".$newExcerpt."</p>"; //finally display excerpt
							?>

                            <small class="date"><?php echo get_the_date();?></small>
                        </div><!--END ENTRY-->
                        
                        <?php endwhile;  else : ?>
                        <p>Cannot find any posts at the moment.</p>
                        <?php endif; ?>
                        <a class="button" href="news-articles/">View More</a>

                    </div><!--END NEWS-SCROLLER-->
                </div><!--END BANNER-->
                
                <div class="clearfix"></div>
                <section>
                	<div class="grid_10">
                        <h3>Do you know What the committee does?</h3>
                        <!--<p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.</p>-->
                        <p>In response to the need for organized efforts to mitigate the negative impact of the New River the Calexico New River Committee (CNRC) was established in 1999 by a group of concerned community members</p>
                        
                        <div id="comm-activities" class="comm-does grid_5">
                            <h5>Activities</h5>
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>-->
	                        <p>
                            Advocacy for policy change<br />
                            Community education/ awareness meetings<br />
                            Development of community-generated policy documents<br />
                            Train community leaders 
                            </p>
                        </div>
                        
                        <div id="comm-sponsors" class="comm-does grid_4">
                            <h5>Sponsors</h5>
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>-->
	                        <ul class="slider">
	                          <li><img src="<?php bloginfo('template_url'); ?>/images/front/logo-endowment.jpg" alt="The California Endowment"></li>
	                          <li><img src="<?php bloginfo('template_url'); ?>/images/front/logo-Manzanita-Eagle-Seal.jpg" alt="Manzanita Band of the Kumeyay Nation"></li>
	                          <li><img src="<?php bloginfo('template_url'); ?>/images/front/logo-rabobank.jpg" alt="Rabobank"></li>
	                          <li><img src="<?php bloginfo('template_url'); ?>/images/front/logo-wellness.jpg" alt="The California Wellness Foundation"></li>
	                        </ul>
                        </div>
                        
                        <!--<div id="comm-solutions" class="comm-does grid_4">
                            <h5>Creating Solutions</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
	                        <p>Info coming soon...</p>
                        </div>
                        
                        <div id="comm-support" class="comm-does grid_4">
                            <h5>Community Support</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
	                        <p>Info coming soon...</p>
                        </div>-->
                    </div><!--END GRID_10-->
                    
                    <div id="video-front">
                    	<h3>Video</h3>
                        <object name="kaltura_player" id="kaltura_player" type="application/x-shockwave-flash" allowscriptaccess="always" allownetworking="all" allowfullscreen="true" height="202" width="238" data="http://64.172.228.247/kalturaCE/index.php/kwidget/wid/_1/uiconf_id/48410/entry_id/ganrnjixds">
                            <param name="allowScriptAccess" value="always" />
                            <param name="allowNetworking" value="all" />
                            <param name="allowFullScreen" value="true" />
                            <param name="bgcolor" value="#000000" />
                            <param name="movie" value="http://64.172.228.247/kalturaCE/index.php/kwidget/wid/_1/uiconf_id/48410/entry_id/ganrnjixds"/>
                            <param name="flashVars" value=""/>
                            <param name="wmode" value="opaque"/>
                        </object>

                    </div>
                
                </section>
                
                <section id="information">
                	<h3>INFORMATION ABOUT THE RIVER</h3>
                    <img src="<?php bloginfo('template_url'); ?>/images/yellow-sign.jpg" alt="Information image holder">
                	<ul>
                        <li>Highly polluted waterway that flows from Mexico into the United States.</li>
                        <li>U.S. Department of Health and Human Services (DHHS): ingestion and dermal exposure to New River water poses a threat to public health".</li>
                        <li>Raises serious health concerns, pollutes the environment, & prevents economic development.</li>
                    </ul>
                    <ul>
                        <li>Over 65 compounds were found of volatile organic compounds.</li>
                        <li>The river is reported to be "the most polluted waterway in North America".</li>
                        <li>U.S. Department of Health and Human Services (DHHS): ingestion and dermal exposure to New River water poses a threat to public health".</li>
                    </ul>
	                <div class="clearfix"></div>
                </section>
<?php get_footer(); ?>    
