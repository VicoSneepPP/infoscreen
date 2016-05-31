<div class="col-md-12">
	<div id="news">
<?php

$loop = new WP_Query(
			array('post_type'		=> 'nieuws',
				  'offset'			=>	'0',
				  'posts_per_page' 	=>  3
			));

		if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
?>


	<div class="news-item">
		<div class="image">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();

		}?>
		</div>

	<div class="title"><?php the_title(); ?> </div>
	</div>

		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
