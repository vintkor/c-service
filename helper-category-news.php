<?php if ( have_posts() ) : query_posts('page_id=216'); while (have_posts()) : the_post(); ?>
<?php $thumb_id = get_post_thumbnail_id();
	  $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); 	  
	  endwhile; endif; wp_reset_query(); 
?>