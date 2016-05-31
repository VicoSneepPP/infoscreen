<?php get_header(); ?>

	<main role="main">
	<div class=" col-md-offset-2 col-md-8">
			<img src="<?php echo ot_get_option('pp_logo');?>" alt="Logo" class="logo-home">
	</div>
	<div class="row">
		<div class=" col-md-offset-3 col-md-6">
			<section id="cityselect">
				<div class="col-md-12">
					<div class="pageselect"><?php _e('Kies je vestiging', 'pplang'); ?></div>
				</div>
				<div class="col-md-12">
					<form action="<?php bloginfo('url'); ?>" method="get">
						<?php wp_dropdown_pages(); ?>
						<input class="home" type="submit" name="submit" value="Bekijk vestiging" />
					</form>
				</div>
		</div>

			</section>


		<div class=" col-md-offset-3 col-md-6">
			<div class="row">

				<section id="weatherhome">
					<?php get_template_part('partials/partial-weather'); ?>
				</section>


			</div>
		</div>
	</div>
	</main>
