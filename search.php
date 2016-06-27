<?php
/**
 * The template for displaying Search Results pages.
 *
 * @since 1.0.0
 */
get_header(); ?>

<div id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8  col-md-8 col-sm-12">
                    <div class="borde">
        		<?php if ( have_posts() ) : ?>

        			<header id="archive-header">
						<h1 class="page-title"><?php
							global $wp_query;
						    $num = $wp_query->found_posts;
                            if($num == 1):
							printf( '%1$s "%2$s"',
							    $num . __( ' resultado para'),
							    get_search_query()
							);
                            elseif($num > 1):
                            printf( '%1$s "%2$s"',
                                $num . __( ' resultados para'),
                                get_search_query()
                            );   
                            endif 
						?></h1>
        			</header>
        			<?php
        			while ( have_posts() ) : the_post(); ?>
        				             <div class="content clearfix">
                            <div class="img-content">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if(has_post_thumbnail()) { the_post_thumbnail('recientes');} ?>
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
                    </div>
                    </div>
     
            <?php get_sidebar(); ?>
 

                      
                        
           
<?php get_footer(); ?>