<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>


			 <!--WEER - DEZE WORDT IN addons/ppclock/ppclock.js INGELADEN -->
				<div id="weer">
					<div id="weer-background">
						<div id="weer-bg-seperator-1" class="weer-bg-seperator"></div>
						<div id="weer-bg-seperator-2" class="weer-bg-seperator"></div>
						<div id="weer-bg-seperator-3" class="weer-bg-seperator"></div>
					</div>
					<div id="weer-tijd"></div>
					<div id="weer-stad"></div>
					<div id="weer-type"></div>
					<div id="weer-icon"></div>
					<div id="weer-date"></div>
					<div id="weer-temp"></div>
				</div>
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
