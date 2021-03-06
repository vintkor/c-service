<?php
/*
Template Name: новости
*/
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : query_posts('page_id=216'); while (have_posts()) : the_post(); ?>
<center><h1><?php the_title();?></h1></center>
</div>
<?php endwhile; endif; wp_reset_query(); ?>

	<div class="row">
		<div class="container description">
			<div class="">
				<div class="col-md-12">
					<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; endif; ?></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

<?php $idObj = get_category_by_slug('news');	$id = $idObj->term_id;?>
<?php if ( have_posts() ) : query_posts('cat=' . $id); while (have_posts()) : the_post(); ?>
	<div class="row cat-news">
		<div class="container">			
			<div class="news-wrapper">
				<div class="col-md-3 col-sm-4"><?php the_post_thumbnail(); ?></div>
				<div class="col-md-9 col-sm-8">
					<h3><?php the_title(); ?></h3>
					<div><?php the_content(); ?></div>
				</div>
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"></a>
				<div class="clearfix"></div>
			</div>			
		</div>
	</div>

<? endwhile; wp_pagenavi(); endif;  wp_reset_query(); ?>



<?php get_footer(); ?>