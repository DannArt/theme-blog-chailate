<div id="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-3  text-center col-sm-12 ">
				<h1>
					CONTACTO
				</h1>
				<ul class="center-block">
					<li>
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						#20 Av. Auge Ciudad Metus México
					</li>
					<li>
						<i class="fa fa-phone" aria-hidden="true"></i>  555 - 654 - 789

					</li>
					<li>
						<i class="fa fa-envelope" aria-hidden="true"></i> chailate@gmail.com
					</li>
					<li>
						<i class="fa fa-laptop" aria-hidden="true"></i> www.chailate.com 
					</li>
				</ul>
			</div>
			<!-- WIDGET DEL FOOTER -->
				<?php 
				 if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Foot_Widget')): endif;
				?>
			<!-- /WIDGET DEL FOOTER -->
			<div class="col-lg-3 col-md-3 text-center col-sm-12">
				<h1>
					NEWSLETTER
				</h1>
				<p class="center-block">
					Suscríbete a nuestro Newsletter y mantente al tanto de todas las actualizaciones.
				</p>
				<form action="" class="form-inline">
					<div class="form-group">
						<input type="text"  disabled > 
						<button type="submit" data-toggle="tooltip" data-placement="top" title="No disponible actualmente" >Ir</button>
					</div>
				</form>
			</div>
			<div class="col-lg-3  col-md-3 text-center col-sm-12">
				<h1>
					ACERCA DE
				</h1>
				<p class="center-block">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus leo a elit tempus aliquet. Vestibulum vel nisi eget nibh molestie vestibulum ac at mi. Mauris ac arcu ut dui pellentesque elementum.
				</p>
			</div>
		</div> <!-- /.row -->
		<div class="row text-center">
			<h2 >
				2016  © Copyrights  Chailate
			</h2>
		</div>
	</div> <!-- /.container-fluid -->
</div>
<!-- script google analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-80118215-1', 'auto');
	  ga('send', 'pageview');

	</script>
<!-- /script google analytics -->
</body>
<?php wp_footer();   ?>
</html>

