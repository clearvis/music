<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
    <section class="entry-content clearfix" itemprop="articleBody">
    	<?php the_post_thumbnail('full'); ?>
        <header class="article-header">
            <h1 class="page-title">Music Workshops In Tennesee</h1>
        </header> <!-- end article header -->
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		
	</footer> <!-- end article footer -->
						    
	<?php //comments_template(); ?>
					
</article> <!-- end article -->
