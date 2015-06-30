<?php get_header();?>
<div class="container-fluid">
    <div class="container single">
    	<div class="col-md-7 col-md-offset-1 single-in">
			<div class="col-md-12 full-container">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?> 
					<div class="fb-share-button" data-href="<?php the_permalink() ?>" data-layout="box_count"></div>
					<div class="fb-like" data-href="<?php the_permalink() ?>" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					<iframe scrolling="no" frameborder="0" allowtransparency="true" src="https://platform.twitter.com/widgets/tweet_button.1352365724.html#_=1354037601139&amp;count=vertical&amp;id=twitter-widget-3&amp;lang=pt&amp;original_referer=https%3A%2F%2Fdev.twitter.com%2Fdocs%2Ftweet-button%2Ffaq%23custom-shortener-count&amp;size=m&amp;text=Zuada da Mídia&amp;url=<?php the_permalink() ?>" class="twitter-share-button twitter-count-vertical" style="width: 70px; height: 62px;bottom:-6px;position:relative;" title="Twitter Tweet Button" data-twttr-rendered="true"></iframe>
					
				<?php endwhile; endif; ?> 	
			</div>
	
        	<div class="col-md-12 full-container">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>                               
					<h1><?php the_title() ?></h1>
					<?php the_content() ?>
            <?php endwhile; endif; ?> 
         </div>
             
         <div class="col-md-12 full-container" style="margin-top:30px !important;">
			   <?php if (have_posts()): while (have_posts()) : the_post(); ?>                               
		       	<?php comments_template(); ?>              
              	<?php endwhile; else: ?> 
            <?php endif; ?> 
         </div>   
      </div>
        
      <div class="col-md-3">
			<?php get_sidebar('single'); ?>
		</div>
   </div> <!-- single  -->
</div> <!-- container-fluid -->
<?php get_footer();?>