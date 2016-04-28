<div class="row footer">
		<div class="container">
			<div class="col-md-4 footer-left">
				<h4>Разделы сайта</h4>				
				<?php wp_nav_menu( array( 'theme_location' => 'sub-menu' ) ); ?>
			</div>
			<div class="col-md-4 footer-center">
				<h4>Наши услуги</h4>
					<?php wp_nav_menu( array( 'theme_location' => 'sub2-menu' ) ); ?>
			</div>
			<div class="col-md-4 footer-right">
				<ul>
					<h4>Наши контакты</h4>					
						<?php dynamic_sidebar('footer'); ?>
					</div>
			</div>
		</div>
	</div>
	<div class="row copyright">
		<div class="container">
			<div class="col-md-6">
				<?php echo get_bloginfo('name'); ?> &#169; 2010 - <?php echo date('Y'); ?>
			</div>
			<div class="col-md-6">
				<a href="#">Создание сайта</a>
			</div>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/app/src/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/app/src/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>

<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>