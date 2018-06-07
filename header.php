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

	<!-- description -->
	<meta name="description" content="CIM Marketing Partners (CIMMP) is a highly creative, modern, and relavent web agency. Located in Las Vegas, Nevada, CIMMP continues to provide great service through developing brand modules for businesses. ">
	<!-- keywords -->
	<meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
	<!-- favicon -->
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
		<!-- description -->
		<meta name="description" content="CIM Marketing Partners (CIMMP) is a highly creative, modern, and relavent web agency. Located in Las Vegas, Nevada, CIMMP continues to provide great service through developing brand modules for businesses. ">
		<!-- keywords -->
		<meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
		<!-- favicon -->
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
		<![endif]-->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<?php if (!(is_page('2'))) { ?>
		<?php get_template_part('template-parts/nav/content', 'blog-nav'); ?>
	<?php } else { ?>
		<?php get_template_part('template-parts/nav/content', 'home-nav'); ?>
		<div class=" bg-background-fade left-nav-sidebar">
	<?php } ?>
