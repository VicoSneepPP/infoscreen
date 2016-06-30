
<?php if(!is_user_logged_in()){header("Location:" . home_url() . "/wp-login.php");} ?><!-- redirect login-->


<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo ot_get_option('pp_favicon') ?>" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">


		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-title" content="PlusPort Academy">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="./img/touch-57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="./img/touch-72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="./img/touch-114.png" />


		<?php wp_head(); ?>
		<script>addToHomescreen({mandatory:true});</script>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>


		<div class="wrapper">


			<header class="header clear" role="banner">


					<div class="logo">
						<a href="<?php echo home_url(); ?>">

							<img src="<?php echo ot_get_option('pp_logo');?>" alt="Logo" class="logo-img">
						</a>
					</div>



			</header>

