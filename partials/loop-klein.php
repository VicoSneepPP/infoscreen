<div class="col-md-12">
	<div id="news">
<?php

		if ( $loopSmall->have_posts() ) : while ( $loopSmall->have_posts() ) : $loopSmall->the_post();
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
