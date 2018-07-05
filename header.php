<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CIMMP-V2
 */
 // This is getting the alt text from the image that is set in the media area

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="author" content="Rommel Fowler">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/assets/images/logo/logo.png">
	<!-- description -->
	<meta name="description" content="CIM Marketing Partners (CIMMP) is a highly creative, modern, and relavent web agency. Located in Las Vegas, Nevada, CIMMP continues to provide great service through developing brand modules for businesses. ">
	<!-- keywords -->
	<meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
	<!-- favicon -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Helvetica:400,700">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,100,300,500,700,900">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/et-line-icons.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/swiper.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/justified-gallery.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/revolution/css/settings.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/revolution/css/layers.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/revolution/css/navigation.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootsnav.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/responsive.css">


	<!-- Google script -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-40337169-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	 gtag('config', 'UA-40337169-1');
	</script>

	<!-- Global site tag (gtag.js) - AdWords: 965946839 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-965946839"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'AW-965946839');
	</script>
	<!--[if IE]>
			<script src="/assets/js/html5shiv.js"></script>
	<![endif] -->
	<?php wp_head(); ?>
</head>

	<body <?php body_class(); ?>>
	<?php if (!(is_page('2'))) { ?>
		<?php get_template_part('template-parts/nav/content', 'blog-nav'); ?>
	<?php } else { ?>
		<?php get_template_part('template-parts/nav/content', 'home-nav'); ?>
		<div class=" bg-background-fade left-nav-sidebar">
	<?php } ?>
