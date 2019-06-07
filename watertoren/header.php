<!DOCTYPE html>
<html>
<head>
	<meta name="google-site-verification" content="BROD8T5GlFwBfYoxear8np_uPG1HMmdlOYjGiJuL724" />


	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="http://hoteldewatertoren.nl/font-awesome-4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel='stylesheet' id='wp-bootstrap-starter-bootstrap-css-css'  href='<?php echo get_bloginfo('template_directory'); ?>/libs/bootstrap.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='wp-bootstrap-starter-style-css'  href='<?php echo get_bloginfo('template_directory'); ?>/libs/style.css' type='text/css' media='all' />
	<link rel='stylesheet'   href='<?php echo get_bloginfo('template_directory'); ?>/css.css' type='text/css'  />
	<script type='text/javascript' src='http://hoteldewatertoren.nl/wp-includes/js/jquery/jquery.js'></script>
	<script type='text/javascript' src='http://hoteldewatertoren.nl/wp-includes/js/jquery/jquery-migrate.min.js'></script>
	<script type='text/javascript' src='<?php echo get_bloginfo('template_directory'); ?>/libs/popper.min.js'></script>
	<script type='text/javascript' src='<?php echo get_bloginfo('template_directory'); ?>/libs/bootstrap.min.js'></script>
	<?php wp_head() ?>
</head>

<body >
	<header>
		<div class="collapse bg-light" id="navbarHeader">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-7 py-4">
						<h4 class="text-black">Menu</h4>
						<p class="text-muted"> <?php
						wp_nav_menu('primary-nav' );
						?>
					</p>
				</div>

			</div>
		</div>
	</div>
	<div class="navbar navbar-light bg-light box-shadow">
		<div class="container d-flex justify-content-between">
			<a href="http://hoteldewatertoren.nl" class="navbar-brand d-flex align-items-center">
				<strong>De Watertoren</strong>
			</a>
			<div id="nav2">
				<?php
				wp_nav_menu('primary-nav' );
				?></div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</div>
		<div class="container megalogo">
			<div class="row">
				<div class="col" style="margin-top:10px">
					<img src="http://hoteldewatertoren.nl/wp-content/uploads/2018/09/LogoToren.png">
				</div>
				<div class="col-10" style="    text-align: center;			">
				<span style="font-size:8vw;line-height: 9vw">De Watertoren</span>
				<hr>
				<span style="font-size:4vw">HOTEL & RESTAURANT</span>

			</div>

		</header>
