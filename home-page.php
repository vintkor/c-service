<?php
/*
Template Name: Главная
*/
?>

<?php get_header(); ?>

<script>
	function setEqualHeight(columns){var tallestcolumn = 0;columns.each(function(){
		currentHeight = $(this).height();if(currentHeight > tallestcolumn){
		tallestcolumn = currentHeight;}});columns.height(tallestcolumn);}

		$(document).ready(function() {setEqualHeight($(".colums-height"));});
		$(document).ready(function() {setEqualHeight($(".sec1Thumb"));});
		$(document).ready(function() {setEqualHeight($(".sec1Title"));});

		$(document).ready(function() {setEqualHeight($(".gallary"));});

		$(document).ready(function() {setEqualHeight($(".newsTitle"));});
		$(document).ready(function() {setEqualHeight($(".newsThumb"));});
		$(document).ready(function() {setEqualHeight($(".newsContent"));});
</script>

<?php if ( have_posts() ) : query_posts('page_id=159'); while (have_posts()) : the_post(); ?>
<center><h1><?php the_title();?></h1></center>
</div>
<?php endwhile; endif; wp_reset_query(); ?>


	<div class="row section2">
		<div class="container">
			<?php $idObj = get_category_by_slug('section2'); 	$id = $idObj->term_id;?>
			<?php if ( have_posts() ) : query_posts('cat=' . $id); while (have_posts()) : the_post(); ?>
			<div class="col-md-3 colums-height">
				<div class="sec1Thumb"><?php the_post_thumbnail(); ?></div>				
				<h3 class="sec1Title"><?php the_title(); ?></h3>
				<div class="colums-p">
					<?php the_content(); ?>
				</div>
			</div>
			<? endwhile; endif; wp_reset_query(); ?>
		</div>
	</div>

<!-- START секция с формой на главной -->
<?php if ( have_posts() ) : query_posts('page_id=20'); while (have_posts()) : the_post(); ?>
	<div class="row section3" style="background: url(<?php
									$thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
									echo $thumb_url[0];
								?>) center; background-size: cover;">
<? endwhile; endif; wp_reset_query(); ?>		
		<div class="container">
			<div class="col-md-4 colums">
				<h3><?php the_title(); ?></h3>
				<div>
					<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; endif;?>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-4 colums">
				<h3>Связаться с нами</h3>
				<div class="form description">
					<?php dynamic_sidebar('form'); ?>
				</div>	
			</div>
		</div>
	</div>

<!-- END секция с формой на главной -->
<!-- START галерея последних объектов -->

	<div class="row section4">
		<div class="container">
			<?php $idObj = get_category_by_slug('section4gallery'); $id = $idObj->term_id;
			$n=8;   // количество выводимых записей
			$recent = new WP_Query("cat=$id&showposts=$n");?>
			<h2><?php echo get_cat_name($id);?></h2>
			<?php while($recent->have_posts()) : $recent->the_post();?>
				
					<div class="col-md-3 gallary">
						<a href="<?php the_permalink() ?>" rel="bookmark"></a>
						<h3 class="GalleryTitle"><?php the_title(); ?></h3>
						<a class="image-popup-vertical-fit GalleryImg" href="<?php
										$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
										echo $large_image_url[0];
										?>"><?php the_post_thumbnail(); ?></a>
						<a href="<?php the_permalink() ?>" rel="bookmark">Подробнее</a>
					</div>

			<?php endwhile; ?>
		</div>
	</div>

<script type="text/javascript">	
	$(document).ready(function() {

	$('.image-popup-vertical-fit').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
		verticalFit: true
		}		
	});
});
</script>
<!-- END галерея последних объектов -->
<!-- START новости на главной -->
	<?php if ( have_posts() ) : query_posts('page_id=216'); while (have_posts()) : the_post(); ?>
	<div class="row section5" style="background: url(<?php
									$thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
									echo $thumb_url[0];
								?>) center; background-size: cover;">
		<div class="container">	
		<? endwhile; endif; wp_reset_query(); ?>		
			<?php $idObj = get_category_by_slug('news'); $id = $idObj->term_id;
			$n=4;   // количество выводимых записей
			$recent = new WP_Query("cat=$id&showposts=$n");?>
			<div class="col-md-12">
				<h2><?php echo get_cat_name($id);?></h2>
			</div>
			<?php while($recent->have_posts()) : $recent->the_post();?>
			<div class="col-md-3">
				<div class="news">
					<h3 class="newsTitle"><?php the_title(); ?></h3>
					<div class="newsThumb"><?php the_post_thumbnail(); ?></div>
					<div class="newsContent"><?php the_content() ?></div>				
					<div class="clearfix"></div>
					<span><a href="<?php the_permalink() ?>" rel="bookmark">Подробнее</a></span>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
<!-- END новости на главной -->



<?php get_footer(); ?>