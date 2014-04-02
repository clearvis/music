<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
					
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<?php get_template_part( 'partials/loop', 'home' ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>
                        
                        <!-- custom content with 3 sections horizontally -->
                        <div class="row marketing">
                          <div class="large-12 columns">
                            <div class="row"  data-equalizer>
                       
                          <!-- Thumbnails -->
                       
                              <div class="large-4 small-6 columns">
                                <img src="http://placehold.it/250x250&text=Thumbnail" />
                                <div class="panel text-left" data-equalizer-watch>
                                <h6>Workshop 1</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, consequuntur.</p>
                                <a href="#" class="button tiny">Button</a>
                                </div>
                              </div>
                       
                              <div class="large-4 small-6 columns">
                                <img src="http://placehold.it/250x250&text=Thumbnail" />
                                <div class="panel text-left" data-equalizer-watch>
                                <h6>Workshop 2</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, quaerat amet officiis nemo consectetur aut.</p>
                                <a href="#" class="button tiny">Button</a>
                                </div>
                              </div>
                       
                              <div class="large-4 small-6 columns">
                                <img src="http://placehold.it/250x250&text=Thumbnail" />
                                <div class="panel text-left" data-equalizer-watch>
                                <h6>Workshop 3</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, in, accusantium reiciendis totam quasi dolores modi qui dolorem.</p>
                                <a href="#" class="button tiny">Button</a>
                                </div>
                              </div>
                       
                          <!-- End Thumbnails -->
                       
                            </div>
                          </div>
                        </div> 
                        <!-- end custom content -->

    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
