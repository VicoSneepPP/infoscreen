<?php get_header(); ?>
<?php
$varWeather = get_field('city_weather');
$newsCat 	= get_field('nieuws_van_welke_vestiging');

$catString = '';

foreach ($newsCat as $k => $v)
{
  	$totalString .= $v.',';

}
	$r = rtrim($totalString, ',');

?>


	<main role="main">

	<div class="row">
		<div class="col-md-7">
			<section id="hoofdberichten">

				<?php get_template_part('partials/loop-main'); ?>

			</section>
		</div>

		<div class="col-md-5">
			<div class="row">

				<section id="weather">
					<?php get_template_part('partials/partial-weather'); ?>
				</section>

				<section id="kleinberichten">
					<?php


					$loopSmall = new WP_Query(
								array('post_type'		=> 'nieuws',
									  'offset'			=>	'0',
									  'posts_per_page' 	=>  3,
									  'cat'				=> 	$r
								));


					//get_template_part('partials/loop-klein');
					include('partials/loop-klein.php');
					?>

				</section>

			</div>
		</div>
	</div>
	</main>
<?php



echo
'<script>

jQuery(document).ready(function($)
{

	$.getJSON("/wp-content/themes/konenieuws/includes/ppclock/weerfeed.php", function(data)
	{
		$("#weer-stad").html(data.list['. $varWeather .'].name);
		$("#weer-type").html(data.list['. $varWeather .'].weather[0].description);
		$("#weer-icon").html("<img src=\''. get_template_directory_uri() . '\/includes/ppclock/weather/" + data.list['.  $varWeather .'].weather[0].icon + ".png\' />");
		$("#weer-temp").html(Math.round(data.list['. $varWeather .'].main.temp) + "&deg;C");
		//$("#weer-temp").html(Math.round((data.list[0].main.temp - 32) /1.8) + "&deg;C");
	});

});


</script>';
?>




<?php get_footer(); ?>
