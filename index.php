	<?php get_header(); ?>
	<?php get_template_part( 'recientes' ); ?>
	<?php get_sidebar(); ?>
	 <div class="row ">
            <div class="col-lg-8">
                <p>  
                    <?php previous_posts_link('<< Post anteriores')?>
                    <?php next_posts_link('Post siguientes >>') ?> 
                </p>
                
            </div>
    </div>
	<?php get_footer(); ?>