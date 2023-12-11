<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg animate__animated animate__fadeIn animate__slow">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php bloginfo('name') ?><?php wp_title('|'); ?></title>
	<meta name="description" content="Fazendo móveis há mais de 20 anos!" />
    <meta name="keywords" content="loja, loja online, ecommerce, madeira, móveis, marcenaria, planejados, peças em madeira, móveis em madeira, prateleira, nicho, sapateira" />
    <meta name="theme-color" content="#cb373c" />
    <meta name="copyright" content="Agrado Móveis Planejados" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/agradoplanejados/assets/css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DPW3LP4XT7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DPW3LP4XT7');
</script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header id="header-container">
		<div id="header-content">
			<a href="<?php echo get_site_url(); ?>" id="logo-principal">
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/agradoplanejados/assets/images/agradologo.png" alt="Agrado Móveis Planejados" title="Agrado Móveis Planejados">
			</a>

			<nav id="nav-content">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'menu-principal'
				));
				?>
			</nav>
			<input id="hamburguer" type="checkbox" style="display: none;">
			<label for="hamburguer" class="hamburguer">
				<div id="menu"></div>
			</label>
		</div>
	</header>

	<script>
		document.getElementById("menu").addEventListener("click", function() {
			document.getElementById("nav-content").classList.toggle("mostrar-menu");
		});

		window.onscroll = function() {
			console.log(window.pageYOffset);
			alterarHeader()
		};

		function alterarHeader() {
			var header = document.getElementById("header-container")
			if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
				header.style.height = '60px';
			} else {
				header.style.height = '80px';
			}
		}
	</script>