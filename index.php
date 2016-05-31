<?php get_header(); ?>

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

<!--?php get_sidebar(); ?>

<?php get_footer(); ?>
