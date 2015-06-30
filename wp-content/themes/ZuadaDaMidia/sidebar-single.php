<div class="col-md-12 full-container">
	<img class="img-responsive pull-right" src="<?php echo get_bloginfo('template_url'); ?>/img/pub-220x220.jpg" style="width:100%" />
</div><!--PUBLICIDADE-->

<div class="clearfix">&nbsp;</div>

<div class="col-md-12 full-container">
	<div class="fb-page" data-href="https://www.facebook.com/Zuadadamidia" data-small-header="false" data-height="350" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Zuadadamidia"><a href="https://www.facebook.com/Zuadadamidia">Zuada da Mídia</a></blockquote></div></div>
</div><!--FACEBOOK-->

<div class="clearfix">&nbsp;</div>

<div class="col-md-12 full-container">
<h4>Blogs</h4>
<?php
	$authors = get_users('role=author&number=5');
		if(isset($authors) && !empty($authors)){
			foreach($authors as $author) {
				$posts = get_posts(array('author'=>$author->ID, 'posts_per_page'   => 1));
					if(isset($posts) && !empty($posts)) { 
						foreach($posts as $post){
							$p = get_post( $post->ID );
							setup_postdata( $p ); ?>
							<div class="col-md-12 col-sm-12 col-xs-12 full-container blog-single">
							
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 full-container">
									<a id="bloguista" class="" href="#" data-content="<?php the_author_meta('description'); ?>" data-placement="top" data-title="<?php echo esc_html( $author->display_name )?>" data-trigger="hover">
										<?php echo userphoto($author->ID) ; ?>
									</a>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
									<a href="<?php the_permalink() ?>"><h5><?php echo $post->post_title; ?></h5></a>
								</div>
							</div>
						<?php 
					}
				}
			}							 
		}		
?>
</div> <!--BLOGS-->