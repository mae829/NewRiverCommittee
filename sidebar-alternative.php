                <section id="sidebar">
                    <h4>Latest News &amp; Articles</h4>
                    <ul>
<?php query_posts('cat=7&posts_per_page=5'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; endif; ?>
                    </ul>
<?php if ( is_active_sidebar(1) ) : ?>
                    <ul>
                        <?php dynamic_sidebar(); ?>
                    </ul><!--end sidebar widget-area-->
<?php endif; ?>
                    
                </section><!--END SIDEBAR-->