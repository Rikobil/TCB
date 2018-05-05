<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
	<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo get_template_directory_uri(); ?>',
			tests: {}
		});
	</script>

	</head>
	<body>
		<!-- wrapper -->
		<div class="wrapper">
			<!-- header -->
			<header>
						<nav class="navbar navbar-expand-lg navbar-light bg-light">
						  <a class="navbar-brand" href="http://localhost:8888/TCB/"><img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/img/Logo-tcb.svg" alt="Logo" class="logo-img"></a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="mt collapse navbar-collapse" id="navbarSupportedContent">
						    <ul class="navbar-nav mr-auto">
						      <li class="nav-item active">
						        <a class="nav-link underline" href="http://localhost:8888/TCB/">Accueil<span class="sr-only">(current)</span></a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link underline" href="http://localhost:8888/TCB/actualites/">Actualités</a>
						      </li>
									<li class="nav-item">
										<a class="nav-link underline" href="http://localhost:8888/TCB/resultats/">Résultats</a>
									</li>
						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Club
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item underline" href="http://localhost:8888/TCB/club/">Présentation du club</a>
											<a class="dropdown-item underline" href="http://localhost:8888/TCB/tarifs/">Tarifs</a>
						          <a class="dropdown-item underline" href="http://localhost:8888/TCB/equipe/">L'équipe</a>
						          <a class="dropdown-item underline" href="http://localhost:8888/TCB/reglement-du-club/">Règlement</a>
						        </div>
						      </li>
									<li class="nav-item underline">
										<a class="nav-link" href="http://localhost:8888/TCB/contact/">Contact</a>
									</li>
									<li class="nav-item header">
										<a class="" href="http://localhost:8888/TCB/connexion/"><button type="button" class="home-btn btn btn-primary">Connexion</button></a>
									</li>
						    </ul>
						  </div>
						</nav>
			</header>
			<!-- /header -->
