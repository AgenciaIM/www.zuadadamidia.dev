<?php get_header(); ?>
<div class="container-fluid">
	<div class="container">
	<!--PUB LEFT-->
	<div class="pub-left hidden-sm hidden-xs">
		<img class="img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/img/pub-190x530.jpg" />
	</div>
	<!--PUB LEFT-->
	
	<!--PUB RIGHT-->
	<div class="pub-right hidden-sm hidden-xs">
		<img class="img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/img/pub-190x530.jpg" />
	</div>
	<!--PUB RIGHT-->
	
	
		<div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
			<div class="col-md-9 col-sm-9 col-xs-12 full-container"> <!--Slide Boxes-->
				<div id="Slide" class="col-md-8 col-sm-8 col-xs-12">
					<!-- Swiper -->
					<div class="swiper-container">
							<div class="swiper-wrapper">
							<?php query_posts('posts_per_page=5'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							
							<div class="swiper-slide" style="background:url('<?php echo $img ?>') center center;background-size:cover;">
								<div class="swiper-detail">
									<h2><a href="<?php the_permalink() ?>"><?php title_limite(100); ?></a></h2>
								</div>
							</div>
						  
							<?php endwhile; endif; wp_reset_query();?>
							 </div>
							 <!-- Add Pagination -->
							 <div class="swiper-pagination"></div>
							 <!-- Add Arrows -->
							 <div class="swiper-button-next"></div>
							 <div class="swiper-button-prev"></div>
						</div><!-- Swiper -->
				</div>
				
				<div class="new col-md-4 col-sm-4 col-xs-12 full-container">
					<div class="full-container col-md-12 col-sm-12 col-xs-12">
							<?php query_posts("posts_per_page=1"); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<h1><a href="<?php the_permalink() ?>"><?php title_limite(45) ?></a></h1>
								<p>
									<a href="<?php the_permalink() ?>"><?php resumo(169) ?></a>
								</p>
						  
							<?php endwhile; endif; wp_reset_query();?>
			
					</div>
					
					<div class="full-container col-md-12 hidden-xs" style="overflow:hidden;max-height:155px;">
						<div class="fb-page" data-href="https://www.facebook.com/Zuadadamidia" data-height="155" data-small-header="true" data-adapt-container-width="false" data-width="220" data-hide-cover="true" data-show-facepile="false" data-show-posts="false">
							<div class="fb-xfbml-parse-ignore">
								<blockquote cite="https://www.facebook.com/ODiaAlagoas">
									<a href="https://www.facebook.com/ODiaAlagoas">O Dia Alagoas</a>
								</blockquote>
							</div>
						</div>
					</div>
				</div> <!--NEW-->
				<div class="clearfix">&nbsp;</div>
				<div class="col-md-12 col-sm-6 col-xs-12 full-container">
					<div class="col-md-3 col-sm-6 col-xs-12 no-pdl">
							<?php query_posts('showposts=1&offset=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							<a href="<?php the_permalink()?>">
								<div class="box col-md-12 col-sm-12 col-xs-12 full-container" style="background:url('<?php echo $img ?>') center center;background-size:cover;">
									<h3>Tevê</h3>
								</div>
							</a>
							<?php endwhile; endif; wp_reset_query();?>
						
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 no-pdl">
						<?php query_posts('showposts=1&offset=4'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							
							<a href="<?php the_permalink()?>">
								<div class="box col-md-12 col-sm-12 col-xs-12 full-container" style="background:url('<?php echo $img ?>') center center;background-size:cover;">
									<h3>Rádio</h3>
								</div>
							</a>
							<?php endwhile; endif; wp_reset_query();?>
					
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 no-pdl">
							<?php query_posts('showposts=1&offset=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							<a href="<?php the_permalink()?>">
								<div class="box col-md-12 col-sm-12 col-xs-12 full-container" style="background:url('<?php echo $img ?>') center center;background-size:cover;">
									<h3>Web</h3>
								</div>
							</a>
							<?php endwhile; endif; wp_reset_query();?>
						
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 no-pdl">
							<?php query_posts('showposts=1&offset=5'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							<a href="<?php the_permalink()?>">
								<div class="box col-md-12 col-sm-12 col-xs-12 full-container" style="background:url('<?php echo $img ?>') center center;background-size:cover;">
									<h3>Impresso</h3>
								</div>
							</a>
							<?php endwhile; endif; wp_reset_query();?>
						
					</div>
				</div>
				
			</div> <!--Slide Boxes-->
			
			<div class="col-md-3 col-sm-3 hidden-xs full-container">
				<img class="img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/img/pub-250x520.jpg" />
			</div> <!--Publicidade-->
		</div>
	</div>
</div>	

<div class="clearfix">&nbsp;</div>
<div class="container-fluid">
	<div class="container">
		<div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
			<div class="col-md-3 col-sm-3 hidden-xs full-container">
				<div class="titulo-pub">Publicidade</div>
				<img class="img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/img/pub-220x220.jpg" />
			</div><!--PUBLICIDADE-->
			
			<div class="destaque col-md-6 col-sm-6 col-xs-12">
				<h1 class="">Destaque</h1>
							<?php query_posts('posts_per_page=1&offset=1'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							
							<div class="col-md-8 col-sm-12 col-xs-12 full-container" style="background:url('<?php echo $img ?>') center center;background-size:cover;">
								<div class="col-md-12  col-sm-12 col-xs-12 d1 full-container">
									<div class="d-caption">
										<a href="<?php the_permalink() ?>"><?php title_limite(90) ?>
										
										<p><?php resumo(250) ?></p></a>
									</div>
								</div>
							</div>
						  
							<?php endwhile; endif; wp_reset_query();?>
				<div class="col-md-4 hidden-sm hidden-xs d-2">
					<div class="row">
							<?php query_posts('posts_per_page=1&offset=6'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							
							<a href="<?php the_permalink() ?>">
								<div class="d2 col-md-12 col-sm-12 col-xs-12 " style="background:url('<?php echo $img ?>') center center;background-size:cover;"></div>
							</a>
						  
							<?php endwhile; endif; wp_reset_query();?>
							
					
					</div>
					<div class="row">
						<?php query_posts('posts_per_page=1&offset=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							
							<a href="<?php the_permalink() ?>">
								<div class="d2 col-md-12 col-sm-12 col-xs-12 " style="background:url('<?php echo $img ?>') center center;background-size:cover;"></div>
							</a>
						  
							<?php endwhile; endif; wp_reset_query();?>
							
						
					</div>
					<div class="row">
						<?php query_posts('posts_per_page=1&offset=4'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							
							<a href="<?php the_permalink() ?>">
								<div class="d2 col-md-12 col-sm-12 col-xs-12 " style="background:url('<?php echo $img ?>') center center;background-size:cover;"></div>
							</a>
						  
							<?php endwhile; endif; wp_reset_query();?>
						
					</div>
				</div>
			</div><!--DESTAQUE-->
			
			<div class="blog col-md-3 col-sm-3 col-xs-12  full-container">
				<h1 class="">Blogs</h1>
				<div class="col-md-12 col-sm-12 col-xs-12  b-3">
					<div class="row">
						<div class="b3 col-md-5 col-sm-5 col-xs-5 " style="background:url(http://vanimg.s3.amazonaws.com/13-jquery-sliders-7.jpg) center center;background-size:cover;"></div>
						<div class="b col-md-7 col-sm-7 col-xs-7  pdl"><a href="#">Lorem Ipsum é simplesmente uma simulação </a></div>
					</div>
					<div class="row">
						<div class="b3 col-md-5 col-sm-5 col-xs-5 " style="background:url(http://vanimg.s3.amazonaws.com/13-jquery-sliders-7.jpg) center center;background-size:cover;"></div>
						<div class="b col-md-7 col-sm-7 col-xs-7  pdl"><a href="#">Lorem Ipsum é simplesmente uma simulação </a></div>
					</div>
					<div class="row">
						<div class="b3 col-md-5 col-sm-5 col-xs-5 " style="background:url(http://vanimg.s3.amazonaws.com/13-jquery-sliders-7.jpg) center center;background-size:cover;"></div>
						<div class="b col-md-7 col-sm-7 col-xs-7 pdl"><a href="#">Lorem Ipsum é simplesmente uma simulação </a></div>
					</div>
				</div>
			</div><!--BLOGS-->
			
		</div>
	</div>
</div>

<div class="clearfix">&nbsp;</div>

<div class="container-fluid">
	<div class="container escute">
		<div class="col-md-10  col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1">
			<div class="e-box col-md-3 col-sm-4 col-xs-4 no-pdl">
							<?php query_posts('posts_per_page=1&offset=2'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							
							<div class="escute-box col-md-12 col-sm-12 col-xs-12 full-container" style="background:url('<?php echo $img ?>') center center;background-size:cover;">
								<h3>Nacional</h3>
								<div class="col-md-12 col-sm-12 col-xs-12 e-caption">
									<a href="<?php the_permalink() ?>"><?php title_limite(83) ?><br><p style="font-size:10px"><?php resumo(40) ?></p></a>
								</div>
								<img class="tri" src="<?php echo get_bloginfo('template_url'); ?>/img/tri-branco.png" />
							</div>
						  
							<?php endwhile; endif; wp_reset_query();?>
			</div>
			<div class="e-box col-md-3 col-sm-4 col-xs-4 no-pdl">
							<?php query_posts('posts_per_page=1&offset=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							
							<div class="escute-box col-md-12 col-sm-12 col-xs-12 full-container" style="background:url('<?php echo $img ?>') center center;background-size:cover;">
								<h3>Séries</h3>
								<div class="col-md-12 col-sm-12 col-xs-12 e-caption">
									<a href="<?php the_permalink() ?>"><?php title_limite(83) ?><br><p style="font-size:10px"><?php resumo(40) ?></p></a>
								</div>
								<img class="tri" src="<?php echo get_bloginfo('template_url'); ?>/img/tri-branco.png" />
							</div>
						  
							<?php endwhile; endif; wp_reset_query();?>
			</div>
			<div class="e-box col-md-3 col-sm-4 col-xs-4 no-pdl">
							<?php query_posts('posts_per_page=1&offset=4'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							
							<div class="escute-box col-md-12 col-sm-12 col-xs-12 full-container" style="background:url('<?php echo $img ?>') center center;background-size:cover;">
								<h3>Cinema</h3>
								<div class="col-md-12 col-sm-12 col-xs-12 e-caption">
									<a href="<?php the_permalink() ?>"><?php title_limite(83) ?><br><p style="font-size:10px"><?php resumo(40) ?></p></a>
								</div>
								<img class="tri" src="<?php echo get_bloginfo('template_url'); ?>/img/tri-branco.png" />
							</div>
						  
							<?php endwhile; endif; wp_reset_query();?>
			</div>
			<div class="e-box col-md-3 hidden-sm hidden-xs no-pdl">
				<div class="escute-box col-md-12  col-sm-12 col-xs-12 full-container">
					<h3 class="h3">Escute a Zuada</h3>
					
					<img class="tri" src="<?php echo get_bloginfo('template_url'); ?>/img/tri-branco.png" />
				</div>
			</div>
		</div>
	</div>
</div>

<div class="clearfix">&nbsp;</div>

<div class="container-fluid">
	<div class="container enquete">
		<div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1">
			<div class="col-md-3 col-sm-3 col-xs-4 no-pdl">
				<h1>Enquete</h1>
				<?php //if (function_exists('enquetez_im')){ enquetez_im(1); } ?>
			</div>			

			<div class="col-md-6 col-sm-6 col-xs-8 no-pdl special">
				<h1>Especial</h1>
							<?php query_posts('posts_per_page=1&offset=5'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							
							<div class="col-md-7 col-sm-7 col-xs-6 especial no-pdl">
								<div class="col-md-12 col-sm-12 col-xs-12 esp-img" style="background:url(<?php echo $img; ?>) center center;background-size:cover;">
									<a href="<?php the_permalink(); ?>" class="mais">+</a>
								</div>
								<a href="<?php the_permalink(); ?>"><?php title_limite(49) ?> </a>
								<p class="hidden-sm hidden-xs"><?php resumo(109) ?></p>	
							</div>
						  
							<?php endwhile; endif; wp_reset_query();?>
							
				<div class="col-md-5 col-sm-5 col-xs-6">
							<?php query_posts('posts_per_page=3&offset=6'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6 sp-in" style="background:url('<?php echo $img ?>') center center;background-size:cover;">
								
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 no-pdr">
									<a href="<?php the_permalink(); ?>" class="lnk"><?php title_limite(49); ?></a>
								</div>
							</div>
						  
							<?php endwhile; endif; ?>
				</div>
			</div>
				
			<div class="col-md-3 col-sm-3 col-xs-12 no-pdl mais-lidas">
				<h1 style="background:url('<?php echo get_bloginfo('template_url'); ?>/img/bg-h1-2.png');width:135px;">Mais Lidas</h1>
				<ul class="full-container">
				<?php $contador = 1;
					$nova_consulta = new WP_Query( 
						 array(
							  'posts_per_page'      => 5,                 // Máximo de 5 artigos
							  'no_found_rows'       => true,              // Não conta linhas
							  'post_status'         => 'publish',         // Somente posts publicados
							  'ignore_sticky_posts' => true,              // Ignora posts fixos
							  'orderby'             => 'meta_value_num',  // Ordena pelo valor da post meta
							  'meta_key'            => 'tp_post_counter', // A nossa post meta
							  'order'               => 'DESC'             // Ordem decrescente
						 )
					);
				?>
				<?php if ( $nova_consulta->have_posts() ): ?>
					<?php while ( $nova_consulta->have_posts() ): ?>
        
						<?php $nova_consulta->the_post(); ?>
						<?php $tp_post_counter = get_post_meta( $post->ID, 'tp_post_counter', true );?>
							<li><div class="maislida"><?php echo $contador ?></div> <a href="<?php the_permalink(); ?>"><?php title_limite(30); ?></a></li>					 
							<!--(<?php //echo $tp_post_counter; ?>)-->
					
				<?php $contador++; endwhile; ?>
				<?php endif; // have_posts ?>
 
    <?php wp_reset_postdata(); ?>
	 
	 
					<!--<li><div class="maislida">1</div> <a href="#">uma simulação Ipsum é si</a></li>
					<li><div class="maislida">2</div> <a href="#">uma simulação Ipsum é si</a></li>
					<li><div class="maislida">3</div> <a href="#">uma simulação Ipsum é si</a></li>
					<li><div class="maislida">4</div> <a href="#">uma simulação Ipsum é si</a></li>
					<li><div class="maislida">5</div> <a href="#">uma simulação Ipsum é si</a></li>-->
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="clearfix">&nbsp;</div>

<div class="container-fluid">
	<div class="container agencias">
		<div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1">
			<div class="col-md-4 col-sm-4 col-xs-16 no-pdl">
							<?php query_posts('posts_per_page=1&offset=7'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							
							<div class="col-md-12 col-sm-12 col-xs-12 no-pdl agency" style="background:url('<?php echo $img ?>') center center;background-size:cover;">
								<h3>Assessoria</h3>
								<div class="oculta"><a href="#"><?php title_limite(98) ?><br><?php resumo(60) ?></a></div>
								<img class="tri" src="<?php echo get_bloginfo('template_url'); ?>/img/tri-azul.png" />
							</div>
							<?php endwhile; endif; ?>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-16 no-pdl">
							<?php query_posts('posts_per_page=1&offset=8'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							
							<div class="col-md-12 col-sm-12 col-xs-12 no-pdl agency" style="background:url('<?php echo $img ?>') center center;background-size:cover;">
								<h3>Agências</h3>
								<div class="oculta"><a href="<?php the_permalink(); ?>"><?php title_limite(98) ?><br><?php resumo(50) ?></a></div>
								<img class="tri" src="<?php echo get_bloginfo('template_url'); ?>/img/tri-azul.png" />
							</div>
							<?php endwhile; endif; ?>
			</div>
				<div class="col-md-4 col-sm-4 col-xs-12 full-container">
				<h3 class="h3">Acesse</h3>
				
				<?php query_posts('posts_per_page=4&offset=7'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							
							<a href="<?php the_permalink() ?>" class="link">
								<div class="col-md-6 col-sm-6 col-xs-6 no-pdl">
									<div class="col-md-12 col-sm-12 col-xs-12 acesse" style="background:url('<?php echo $img ?>') center center;background-size:cover;">
									
									</div>
								</div>
							</a>
							<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="clearfix">&nbsp;</div>

<div class="container-fluid">
	<div class="container instagram">
		<div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1">
			<div class="col-md-4 col-sm-12 col-xs-12 no-pdl">
				<img src="<?php echo get_bloginfo('template_url'); ?>/img/img_insta.jpg"/>
				<div class="col-md-12 col-sm-12 col-xs-12 full-container">
					<ul class="instagram-box"></ul>
					<script src="http://localhost/wordpress/wp-content/themes/ZuadaDaMidia/js/instagram.js" type="text/javascript"></script>
				</div>
			</div>
			
			<div class="col-md-8 col-sm-12 col-xs-12 full-container galeria">
				<h1>Galeria</h1>
							<?php query_posts('posts_per_page=1'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							
							<div class="col-md-7 col-sm-7 col-xs-7 no-pdl">
								<div class="col-md-12 col-sm-12 col-xs-12 gallery no-pdl" style="background:url('<?php echo $img ?>') center center;background-size:cover;">
									<div class="g-caption">
										<a href="<?php the_permalink(); ?>"><?php title_limite(58); ?></a>
										<p><?php resumo(152) ?></p>
									</div>
								</div>
							</div>
							<?php endwhile; endif; ?>
				
				<div class="col-md-5 col-sm-5 col-xs-5 full-container">
				<?php query_posts('posts_per_page=4&offset=1'); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
							if ( has_post_thumbnail() ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$img = $image[0];
							} else {
								$img = pega_imagem_post();
							} ?>
							
							<div class="col-md-6 col-sm-6 col-xs-6 no-pdl">
								<div class="col-md-12 col-sm-12 col-xs-12 gallery-in no-pdl" style="background:url('<?php echo $img ?>') center center;background-size:cover;">	
									<div class="g-caption-in">
										<a href="<?php the_permalink(); ?>"><?php title_limite(69); ?></a>
									</div>
									<img class="tri" src="<?php echo get_bloginfo('template_url'); ?>/img/tri-branco.png"/>
								</div>	
							</div>
							<?php endwhile; endif; ?>
					
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid pub-rodape">
	<div class="container">
		<div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1">
			<div class="titulo-pub">Publicidade</div>
			<img class="img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/img/pub-960x100.jpg"/>
		</div>
	</div>
</div>

<?php get_footer(); ?>