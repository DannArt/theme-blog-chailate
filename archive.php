<?php get_header(); ?>


	<div id="recientes">
		<div class="row center-block">
			<div class="col-lg-8">
				<h1>
					Resultados de búsqueda para <i><?php  single_cat_title($prefix = '', $display= true);?></i>.
				</h1>
				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post(); 
				?>
				<div class="col-lg-6 ">
					<div class="thumb">
						<a href="<?php the_permalink(); ?>">
							<?php if(has_post_thumbnail()) { the_post_thumbnail('recientes');} ?>
						</a>
					</div>
					<a href="<?php the_permalink(); ?>">
						<h2>
							<?php the_title(); ?>
						</h2>
					</a>
					<hr>
					<p>
						<span class="fa fa-calendar"></span><?php echo get_the_date(); ?>   <span class="fa fa-user"></span> <?php the_author();?> <span class=" fa fa-comment-o"></span> <?php comments_number('0','1','%'); ?> 
					</p>
					<hr>
					<p>
						<?php the_excerpt(); ?>  
					</p>
					<a href="<?php the_permalink(); ?>">
						Mostrar Más
					</a>
				</div>
				
			<?php endwhile; else: ?>
		 	 <h1>No hay posts</h1>
			<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
	</div>
	<div class="row ">
			<div class="col-lg-8">
				<p>  
					<?php previous_posts_link('<< Post anteriores')?>
					<?php next_posts_link('Post siguientes >>') ?> 
				</p>
				
			</div>
	</div>
	</div>
	<?php get_footer(); ?>