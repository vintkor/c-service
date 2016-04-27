<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_bloginfo('name'); echo " - "; the_title();?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/css/main.css">
    <link href="<?php echo get_template_directory_uri(); ?>/app/src/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">    

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/app/src/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/src/magnific-popup/dist/magnific-popup.css">
  </head>
  <body <?php body_class(); ?>>
	<div class="row header-section"
		style="background: url(<?php $thumb_id = get_post_thumbnail_id();
	  								$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
									echo $thumb_url[0];
								?>) center; background-size: cover;">
		<div class="container header-block">
			<div class="col-lg-4">
				<a class="logo" href="/" title="<?php echo get_bloginfo('name'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/app/img/icon1.png" alt="<?php echo get_bloginfo('name'); ?>">
				</a>
				<span class="company-name"><?php echo get_bloginfo('name'); ?></span>
			</div>
			<div class="col-lg-8">
				<div class="row header-right">
					<div class="col-lg-3 col-lg-offset-6">
						<a class="call-me" href="#"><?php dynamic_sidebar('callme'); ?></a>
					</div>
					<div class="col-lg-3 phone">
						<?php dynamic_sidebar('tel'); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 top-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					</div>
				</div>
			</div>			
		</div>
		
			