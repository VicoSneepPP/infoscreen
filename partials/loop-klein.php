<div class="col-md-12">
<?php

$loop = new WP_Query(
			array('post_type'		=> 'kleinbericht',
				  'offset'			=>	'0',
				  'posts_per_page' 	=>  3
			));

		if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
?>



<?php if ( has_post_thumbnail() ) {
    the_post_thumbnail();

	 the_content();
}?>

	<div class="maind"><?php the_title(); ?> <?php echo get_the_content(); ?> </div>


<?php endwhile; ?>
<?php endif; ?>
</div>
