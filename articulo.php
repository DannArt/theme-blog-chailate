			
	<div id="single">
		<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>
		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
		<div id="img-background" class= "parallax"  style="background-repeat: no-repeat;  background-size: cover; background-image: url('<?php echo $thumb['0'];?>')">
				<div class="contenedor center-block">	
					<h1 class=" text-center center-block">
						<?php the_title(); ?>
						<div class="text-center center-block">
							<span>
								Publicado por <?php the_author();?>
							</span>
						</div>
					</h1>
				</div>
		</div>
		<div class="container center-block">	
			<div class="row center-block">
				<div class="col-lg-8  col-md-8 col-sm-12 center-block">
					<div class="borde-single">
						<div class="content clearfix">
							<div class="texto ">
								<div class="meta-single center-block">
									<span>
										<i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date(); ?>
									</span>
									<span>
										<i class="fa fa-eye" aria-hidden="true"></i> Visitas 15 
									</span>
									<div class="clearfix">
										
									</div>
								</div>
								<p >
									<?php the_content(); ?> 
								</p>
								<hr>
							</div>
								<div id='fb-root'></div><script src='http://connect.facebook.net/es_CO/all.js#xfbml=1'></script>
								<fb:comments href='<?php the_permalink() ?>' width='687'></fb:comments >
						
								<?php endwhile; else: ?>
						 	 		<h1>No hay posts</h1>
								<?php endif; ?>
										</div>
									</div>
								</div>

			</div>
			<div class="row center-block">
				<div class="col-lg-12">
					<div class="borde-extras">
						<div class="autor">
							<h1 class="center-block">
								Local Host
							</h1>
							<ul class="center-block hide">
								<li>
									<a href="">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="">
										<i class="fa fa-instagram" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
							<p class="center-block">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porta egestas magna nec efficitur. Pellentesque quam justo, rhoncus ac nibh a, vehicula posuere ante. Fusce vitae velit orci. Aenean viverra ornare vulputate. Vestibulum a sem malesuada, volutpat dolor non, varius lorem. In porta sagittis porttitor. Suspendisse id elementum ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus bibendum elementum nulla, quis luctus nibh sollicitudin ornare. Ut porttitor mi sit amet quam malesuada iaculis.
							</p>
						</div>

						<div class="relacion-post ">
						<?php 
							$postCategories = get_the_category();
							$postId = get_the_ID(); 

							if(! empty( $postCategories ) && sizeof($postCategories) > 0):
							
								$arrayCategories = array();
								foreach($postCategories as $category) {
									array_push($arrayCategories,$category->term_id);
								}	

								?>	
									<?php 
									 $args = array( 'cat'=>implode(",",$arrayCategories), 
										'showposts' => 3,
										'post__not_in' => array($postId)
										);
									?>
							<h1 class="center-block">
								Relacionados
							</h1>
							<hr>
							<div class="separacion row center-block">
							<?php $recent = new WP_Query($args); while($recent->have_posts()) : $recent->the_post();?>
								<div class="col-lg-4 col-md-4">
									<div class="text-center">
										<a href="<?php the_permalink() ?>">
											<?php the_post_thumbnail( 'thumb', array( 'class' => ' center-block' )  );?>
										</a>
									</div>
									<h4 class="text-center center-block">
										<a href="<?php the_permalink() ?>">
											<?php the_title(); ?>
										</a>	
									</h4>
								</div>
								<?php endwhile; ?>
						 		<?php wp_reset_postdata(); ?>
							</div>
							<?php endif ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>			

			
				
			     
			     
				