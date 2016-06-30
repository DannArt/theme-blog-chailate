<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="borde">
						<div class="img-logo center-block text-center">
							<a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt=""></a>
							<div class="content-about center-block">
								<h4>Acerca de Chailate</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu dui vitae tortor sagittis eleifend. Cras sit amet posuere metus. Sed aliquet eu libero sed convallis. 
								</p>
								<ul>
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
							</div>
						</div>
						<div class="categoria center-block">
							<h3>
								Categorías
							</h3>
							
							<ul class="center-block">
								<?php 
									$variable = wp_list_categories('show_count=1&title_li=&echo=0'); 
									$variable = str_replace( '(', '<span>(', $variable);
									$variable = str_replace( ')', ' )</span><hr>', $variable);
									echo $variable;
								?>
							</ul>
							
						</div>
						<div class="post_recientes center-block">
							<h3>
								Entradas Recientes
							</h3>
							<ul >
							<?php 
								$args = array( 'numberposts' => '5' );
								$recent_posts = wp_get_recent_posts( $args );
								foreach( $recent_posts as $recent ):
									$image_url = wp_get_attachment_url( get_post_thumbnail_id($recent["ID"]) );
									
									echo '<li>
									<div>
										<a href="'. get_permalink($recent["ID"]) .'">
												<img src="'. $image_url .'" alt="">
										</a> 
									</div>
									<small>
										'. mysql2date('M j Y', $recent["post_date"]) .'
									</small>
									<h5>
										<a href="'. get_permalink($recent["ID"]) .'">'.$recent["post_title"].'

										</a>
									</h5>
									<div class="clear"></div>
								</li>';
								endforeach;
							?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	



	