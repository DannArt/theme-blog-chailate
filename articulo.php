			
			
<div id="page">
		<div class="row center-block">
				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post();
				?>
			<div class="col-lg-8">
				<h1 class="center-block"><?php the_title(); ?></h1>
				<p class="center-block">
					<span class="fa fa-calendar"></span><?php echo get_the_date(); ?>   <span class="fa fa-user"></span> <?php the_author();?> <span class=" fa fa-comment-o"></span> <?php comments_number('0','1','%'); ?> 
				</p>
				<hr class="center-block">
					<div class="thumb">
						<a href="<?php the_permalink(); ?>">
							<?php if(has_post_thumbnail()) { the_post_thumbnail('page');} ?>
						</a>
					</div>
				<p class="center-block">
					<?php the_content(); ?>  
				</p>
				<div class="clear">
				</div>
				<div id='fb-root'></div><script src='http://connect.facebook.net/es_CO/all.js#xfbml=1'></script>
				<fb:comments href='<?php the_permalink() ?>' width='687'></fb:comments >
				
				<?php endwhile; else: ?>
		 	 		<h1>No hay posts</h1>
				<?php endif; ?>
				<div class="foot-page">
					<hr class="center-block">
					<h1 class="center-block">Compártelo en tus redes sociales</h1>
					<ul >
				        	<li>
				        		<a href="https://www.facebook.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook.png"></a>
				        	</li>
				        	<li>
				        		<a href="https://twitter.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/twitter.png"></a>
				        	</li>
				        	<li>
				        		<a href="https://www.instagram.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/instagram.png"></a>
				        	</li>
				        	<li>
				        		<a href="https://www.youtube.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/youtube.png"></a>
				        	</li>
				        	<li>
				        		<a href="https://www.youtube.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/google.png"></a>
				        	</li>
				      
			      		</ul>
			      		<hr class="center-block">
			      	<h1 class="center-block">Relacionados</h1>
			      	<div class="relacionados">
			      		<div class="col-lg-4">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/verdura.jpg" alt="">
							<h2>
								Las verduras evitan el desarrollo de cáncer
							</h2>
							<div class="cat">
								Categoría: Receta
							</div>
						</div>
			      		<div class="col-lg-4">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/sarten.jpg" alt="">
							<h2>
								Las verduras evitan el desarrollo de cáncer
							</h2>
							<div class="cat">
								Categoría: Receta
							</div>
						</div>
			      		<div class="col-lg-4">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/bicicleta.jpg" alt="">
							
								<h2>
								<a href="">Las verduras evitan el desarrollo de cáncer </a>
							</h2>
							
							
							<div class="cat">
								<a href="">Categoria receta</a>
							</div>
						</div>
			      	</div>	
			      	<div class="clear"></div>
			      	<hr class="center-block">
			      	<h3>TAGS</h3>	
			      	<ul class="tag">
			      		<li>
			      		 	<a href=""> Tag 1</a>
			      		</li>
			      		<li>
			      			<a href=""> Tag 2</a>
			      		</li>
			      		<li>
			      			<a href=""> Tag 3</a>
			      		</li>
			      	</ul>      	
				</div>

			</div>