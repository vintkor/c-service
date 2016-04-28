<?php get_header(); ?>

<?php if ( have_posts() ) : query_posts('page_id=203'); while (have_posts()) : the_post(); ?>
<center><h1><?php the_title();?></h1></center>
</div>

	<div class="row">
		<div class="container description">
			<div class="">
				<div class="col-lg-12">								
					<?php the_content(); ?>					
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<?php endwhile; endif; wp_reset_query(); ?></div>



<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
	<div class="row cat-news">
		<div class="container">			
			<div class="news-wrapper">
				<div class="col-lg-3 col-md-3 col-sm-4"><?php the_post_thumbnail(); ?></div>
				<div class="col-lg-9 col-md-9 col-sm-8">
					<h3><?php the_title(); ?></h3>
					<div><?php the_content(); ?></div>
				</div>
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"></a>
				<div class="clearfix"></div>
			</div>			
		</div>
	</div>

<?php endwhile;  endif; ?>

	<div class="container page-navi"><center><?php wp_pagenavi(); ?></center></div> 

<?php get_footer(); ?>