<?php
/*
Template Name: контакты
*/
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : query_posts('page_id=20'); while (have_posts()) : the_post(); ?>
<center><h1><?php the_title();?></h1></center>
</div>
<?php endwhile; endif; wp_reset_query(); ?>

	<div class="row">
		<div class="container description">
			<div class="">
				<div class="col-lg-12">
					<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; endif; ?></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="row map">
		<?php dynamic_sidebar('maps'); ?>
	</div>
<?php get_footer(); ?>