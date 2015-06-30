<?php get_header();?>
<div class="container-fluid">
    <div class="container page">
    	<div class="col-md-7 col-md-offset-1 page-in">
			<div class="col-md-12 full-container">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>                               
					<h1><?php the_title() ?></h1>
					<?php the_content() ?>
            <?php endwhile; endif; ?> 
         </div>
      </div>
        
      <div class="col-md-3">
			<?php get_sidebar('single'); ?>
		</div>
   </div> <!-- page  -->
</div> <!-- container-fluid -->
<?php get_footer();?>