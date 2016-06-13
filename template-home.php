<?php get_header();

/* Template Name: Homepage */

$varWeather = get_field('city_weather');
$newsNr 	= get_field('no_nieuws');
$mainNr 	= get_field('no_main');

$catString 	= '';

	foreach ($newsCat as $k => $v)
	{
		$totalString .= $v.',';

	}
	$cat = rtrim($totalString, ',');

?>


	<main role="main">

	<div class="row">
		<div class="col-md-7">
			<section id="hoofdberichten">

				<?php

					$loop = new WP_Query(
								array('post_type'		=> 'hoofdbericht',
									  'offset'			=>	'0',
									  'posts_per_page' 	=>  $mainNr
								));

					include('partials/loop-main.php'); ?>

			</section>
		</div>

		<div class="col-md-5">
			<div class="row">

				<section id="weather">

					<?php get_template_part('partials/partial-weather-home'); ?>

				</section>

				<section id="kleinberichten">
					<?php


					$loopSmall = new WP_Query(
								array('post_type'		=> 'nieuws',
									  'offset'			=>	'0',
									  'posts_per_page' 	=>  $newsNr ,
								));


					//get_template_part('partials/loop-klein');
					include('partials/loop-klein.php');
					?>

				</section>

			</div>
		</div>
	</div>
	</main>



<?php get_footer(); ?>
