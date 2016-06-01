<div id='content'>

<div class="col-md-12">
<?php


	if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();


	$imgFormat = get_field('img_format_lrg');


		if	( has_post_thumbnail() && ($imgFormat == 'hor') )
		{
			echo '<div class="content-block">';
			//echo 	'<div class="col-md-12">';
			echo 		'<div class="image main hor">';
							the_post_thumbnail();
			echo 		'</div>';
			//echo 	'</div>';
			//echo	'<div class="col-md-12">';
			echo 		'<div class="text">';
			echo			'<div class="title"><h1>';
								the_title();
			echo				'</h1>';
			echo 			'</div>';
			echo			'<p>';
			echo 				get_the_content();
			echo 			'</p>';
			echo 		'</div>';
			echo 	'</div>';
			//echo '</div>';


		}
		else if	( has_post_thumbnail() && ($imgFormat == 'ver') )
		{
			echo '<div class="content-block">';
			//echo 	'<div class="col-md-6">';
			echo 		'<div class="image main ver">';
							the_post_thumbnail();
			echo 		'</div>';
			//echo 	'</div>';

			//echo	'<div class="col-md-6">';
			echo 		'<div class="text ver">';
			echo			'<div class="title"><h1>';
								the_title();
			echo			'</h1></div><p>';
			echo		 		get_the_content();
			echo 		'</div>';
			echo 	'</div>';
			//echo '</div>';
		};


	?>


<?php endwhile; ?>
<?php endif; ?>

</div>
</div>
