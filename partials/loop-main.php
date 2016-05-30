
<?php

$loop = new WP_Query(
			array('post_type'		=> 'hoofdbericht',
				  'offset'			=>	'0',
				  'posts_per_page' 	=>  3
			));

		if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
?>

<div class="col-md-8">
<?php if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}?>

<?php echo get_the_content(); ?>


<?php endwhile; ?>
<?php endif; ?>
</div>
