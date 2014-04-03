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
                        
                         <!-- Content Slider -->
 
                          <div class="row">
                            <div class="large-12 hide-for-small">
                     
                              <div id="featured" data-orbit>
                                  <img src="http://placehold.it/1200x500&text=Slide Image 1" alt="slide image">
                                  <img src="http://placehold.it/1200x500&text=Slide Image 2" alt="slide image">
                                  <img src="http://placehold.it/1200x500&text=Slide Image 3" alt="slide image">
                                </div>
                     
                          </div>
                        </div>
                     
                        <!-- End Content Slider -->
                        
                        <!-- Mobile Header -->
 
                        <div class="row">
                          <div class="large-12 columns show-for-small">
                   
                            <img src="http://placehold.it/1200x700&text=Mobile Header">
                   
                          </div>
                        </div><br>
                   
                      <!-- End Mobile Header -->
                      
                      <div class="row featured">
                          <div class="large-12 columns">
                            <div class="row">
                              <!-- Shows -->
                              <div class="large-4 small-6 columns">
                   
                                <h4>Upcoming Workshops</h4><hr>
                   
                                <div class="row">
                                  <div class="large-1 column">
                                    <img src="http://placehold.it/50x50&text=[img]">
                                  </div>
                   
                                  <div class="large-9 columns">
                                    <h5><a href="#">Workshop Name</a></h5>
                                    <h6 class="subheader">Date</h6>
                                  </div>
                                </div><hr>
                   
                                <div class="hide-for-small">
                                  <div class="row">
                                    <div class="large-1 column">
                                      <img src="http://placehold.it/50x50&text=[img]">
                                    </div>
                   
                                    <div class="large-9 columns">
                                      <h5 class="subheader"><a href="#">Workshop Name</a></h5>
                                      <h6 class="subheader">Date</h6>
                                    </div>
                                  </div><hr>
                   
                                  <div class="row">
                                    <div class="large-1 column">
                                      <img src="http://placehold.it/50x50&text=[img]">
                                    </div>
                   
                                    <div class="large-9 columns">
                                      <h5 class="subheader"><a href="#">Workshop Name</a></h5>
                                      <h6 class="subheader">Date</h6>
                                    </div>
                                  </div><hr>
                   
                                  <div class="row">
                                    <div class="large-1 column">
                                      <img src="http://placehold.it/50x50&text=[img]">
                                    </div>
                   
                                    <div class="large-9 columns">
                                      <h5 class="subheader"><a href="#">Workshop Name</a></h5>
                                      <h6 class="subheader">Date</h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- End Shows -->
                   
                   
                              <!-- Image -->
                   
                              <div class="large-4 small-6 columns">
                                <img src="http://placehold.it/300x465&text=Image">
                              </div>
                   
                              <!-- End Image -->
                   
                   
                              <!-- Feed -->
                   
                              <div class="large-4 small-12 columns">
                   
                                <h4>Lessons</h4><hr>
                                <div class="panel">
                                  <h5><a href="#">Type</a></h5>
                   
                                  <h6 class="subheader">
                                    Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Suspendisse ultrices ornare tempor...
                                  </h6>
                   
                                  <h6><a href="#">Read More »</a></h6>
                                </div>
                   
                                <div class="panel hide-for-small">
                                  <h5><a href="#">Type 2 »</a></h5>
                                </div>
                   
                                <div class="panel hide-for-small">
                                  <h5><a href="#">Type 3 »</a></h5>
                                </div>
                   
                              </div>
                   
                              <!-- End Feed -->
                   
                            </div>
                          </div>
                        </div>
                        
                        <hr>
                   
                      <!-- End Content -->
                        
                        <!-- custom content with 3 sections horizontally -->
                        <div class="row marketing">
                          <div class="large-12 columns">
                            <div class="row"  data-equalizer>
                       
                          <!-- Thumbnails -->
                       
                              <div class="large-4 small-6 columns">
                                <img src="http://placehold.it/250x250&text=Thumbnail" />
                                <div class="panel text-left clearfix" data-equalizer-watch>
                                <h6>Workshop 1</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, consequuntur.</p>
                                <a href="#" class="button tiny right">Button</a>
                                </div>
                              </div>
                       
                              <div class="large-4 small-6 columns">
                                <img src="http://placehold.it/250x250&text=Thumbnail" />
                                <div class="panel text-left clearfix" data-equalizer-watch>
                                <h6>Workshop 2</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, quaerat amet officiis nemo consectetur aut.</p>
                                <a href="#" class="button tiny right">Button</a>
                                </div>
                              </div>
                       
                              <div class="large-4 small-6 columns">
                                <img src="http://placehold.it/250x250&text=Thumbnail" />
                                <div class="panel text-left clearfix" data-equalizer-watch>
                                <h6>Workshop 3</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, in, accusantium reiciendis totam quasi dolores modi qui dolorem.</p>
                                <a href="#" class="button tiny right">Button</a>
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
