<?php get_header();?>
<div class="container-fluid">
    <div class="container category">
    	<div class="col-md-7 col-md-offset-1 category-in">
			<div class="col-md-12 full-container">
				<?php query_posts('cat=46&showposts=1'); if (have_posts()): while (have_posts()) : the_post(); ?>     
				<?php
						if ( has_post_thumbnail() ) {
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
							$img = $image[0];
						} else {
							$img = pega_imagem_post();
						} ?>				
					<div class="col-md-7" style="background:url(<?php echo $img ?>) center center;background:size:cover;height:250px"></div>
					<div class="col-md-5">
						<h1><?php title_limite(150); ?></h1>
						<a href="<?php the_permalink() ?>"><?php resumo(250); ?></a>
					</div>
            <?php endwhile; endif; wp_reset_query();?> 
         </div>
			<div class="clearfix">&nbsp;</div>
			<div class="col-md-12 full-container">
				<?php query_posts('posts_per_page=8&cat=46&offset=1&paged='.$paged); if (have_posts()): while (have_posts()) : the_post(); ?>   
				<?php
					if ( has_post_thumbnail() ) {
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
						$img = $image[0];
					} else {
						$img = pega_imagem_post();
					} ?>					
					<div class="col-md-12 full-container" style="margin-bottom:15px !important">
						<div class="col-md-5 full-container img-rounded" style="background:url(<?php echo $img ?>) center center;background:size:cover;height:150px">
						
						</div>
						<div class="col-md-7">
							<h1><?php title_limite(200); ?></h1>
							<a href="<?php the_permalink() ?>"><?php resumo(200); ?></a>
						</div>
					</div>
            <?php endwhile; endif; wp_reset_query();?> 
         </div>
			
			<div class="clearfix">&nbsp;</div>
			
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
      </div>
        
      <div class="col-md-3">
			<?php get_sidebar('single'); ?>
		</div>
   </div> <!-- page  -->
</div> <!-- container-fluid -->
<?php get_footer();?>