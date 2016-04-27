<?php get_header(); ?>

<center><h1><?php the_title();?></h1></center>
</div>

	
		<div class="row default-page">
			<div class="container">
				<div class="">
					<div class="col-lg-12 page-wrapper">
						<?php if (have_posts()): while (have_posts()): the_post(); ?>
						<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>
					<div class="clearfix"></div>
				</div>		
			</div>
		</div>

<?php get_footer(); ?>