<?php get_header(); ?>
<?php
$varWeather = get_field('city_weather');
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

					<?php get_template_part('partials/loop-klein'); ?>

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
