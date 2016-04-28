<?php
/*
Template Name: Услуги
*/
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : query_posts('page_id=12'); while (have_posts()) : the_post(); ?>
<center><h1><?php the_title();?></h1></center>
</div>
<?php endwhile; endif; wp_reset_query(); ?>

<script>
	function setEqualHeight(columns){var tallestcolumn = 0;columns.each(function(){
		currentHeight = $(this).height();if(currentHeight > tallestcolumn){
		tallestcolumn = currentHeight;}});columns.height(tallestcolumn);}

		$(document).ready(function() {setEqualHeight($(".uslugi-content"));});
		$(document).ready(function() {setEqualHeight($(".uslugi-content-height"));});
</script>

<div class="section-uslugi">
	<div class="row">
		<div class="container">
			<?php if ( have_posts() ) : query_posts('page_id=12'); while (have_posts()) : the_post(); ?>
				<center><h2><?php echo get_post_meta($post->ID, 'uslugi_title_description', true); ?></h2></center>
			<? endwhile; endif; wp_reset_query();?>
			<?php $idObj = get_category_by_slug('uslugi');	$id = $idObj->term_id;?>
			<?php if ( have_posts() ) : query_posts('cat=' . $id); while (have_posts()) : the_post(); ?>
			<div class="col-md-3 uslugi-content">
				<div class="uslugi-content-height">
					<center><h3><?php the_title(); ?></h3></center>
					<?php the_content(); ?>
				</div>
				<center><br><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">Подробнее</a></center>
			</div>
			<? endwhile; endif; wp_reset_query();?>
		</div>
	</div>
</div>

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


<?php get_footer(); ?>