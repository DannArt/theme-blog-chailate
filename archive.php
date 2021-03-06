<?php get_header(); ?>
	<div id="blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-8  col-md-8 col-sm-12">
					<div class="borde">
						<h1>
							Resultados de búsqueda para <i><?php  single_cat_title($prefix = '', $display= true);?></i>.
						</h1>
						<?php 
							if ( have_posts() ) : while ( have_posts() ) : the_post(); 
						?>
						<div class="content clearfix">
							<div class="img-content">
								<a href="<?php the_permalink(); ?>">
									<?php if(has_post_thumbnail()) { the_post_thumbnail('recientes');}?>
								</a>
								<div class="date">
									<div class="date-content">
										<div class="day">
											<?php  $fecha = get_the_date('j'); 
										 	 echo $fecha; ?>  
										</div>
										<div class="month">
											<?php  $fecha = get_the_date('M, Y'); 
										 	 echo $fecha; ?> 
										</div>
									</div>
								</div>
							</div>
							<div class="texto center-block">
								<h1 class="center-block">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>
								<div class=" center-block responsive">
									<span>
										<?php  $fecha = get_the_date(); 
										 echo $fecha; ?>  
									</span>
								</div>
								<div class="meta center-block">
									<span>
										Publicado por  <?php the_author();?>
									</span>
									<span>
										 <?php comments_number(); ?>
									</span>
								</div>
								
								<p class="center-block">
									<?php the_excerpt(); ?>
								</p>
								<div class="boton center-block text-right">
									<a href="<?php the_permalink(); ?>"> 
										Leer Más
									</a>
								</div>
								<hr>
							</div>
						</div>
						<?php endwhile; else: ?>
					 	 <h1>No hay posts</h1>
						<?php endif; ?>
						<div class="container-fluid ">
				            <div class="pagination center-block ">
				                <p class="center-block">  
				                    <?php previous_posts_link('<i class="fa fa-arrow-left" aria-hidden="true"></i> Post anteriores')?>
				                    <?php next_posts_link('Post siguientes <i class="fa fa-arrow-right" aria-hidden="true"></i>') ?> 
				                </p>   
				            </div>
				    	</div>
					</div>
				</div>
				
<?php get_sidebar(); ?>
<?php get_footer(); ?>