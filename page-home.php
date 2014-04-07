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
 
                          <!--<div class="row">
                            <div class="large-12 column hide-for-small">
                     
                              <div id="featured" data-orbit>
                                  <img src="http://placehold.it/1200x500&text=Slide Image 1" alt="slide image">
                                  <img src="http://placehold.it/1200x500&text=Slide Image 2" alt="slide image">
                                  <img src="http://placehold.it/1200x500&text=Slide Image 3" alt="slide image">
                                </div>
                     
                          </div>
                        </div>-->
                     
                        <!-- End Content Slider -->
                        
                        <!-- Mobile Header -->
 
                        <!--<div class="row">
                          <div class="large-12 columns show-for-small">
                   
                            <img src="http://placehold.it/1200x700&text=Mobile Header">
                   
                          </div>
                        </div><br>-->
                   
                      <!-- End Mobile Header -->
                      
                      <div class="row featured">
                          <div class="large-12 columns">
                            <div class="row">
                              <!-- Shows -->
                              <div class="large-4 small-6 columns">
                              
                              <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Left')) : endif; ?>
                   
                              </div>
                              <!-- End Shows -->
                   
                   
                              <!-- Image -->
                   
                              <div class="large-4 small-6 columns">
                              	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Center')) : endif; ?>
                                
                              </div>
                   
                              <!-- End Image -->
                   
                   
                              <!-- Feed -->
                   
                              <div class="large-4 small-12 columns">
                              
                              <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Right')) : endif; ?>
                   
                              </div>
                   
                              <!-- End Feed -->
                   
                            </div>
                          </div>
                        </div>
                   
                      <!-- End Content -->

    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
