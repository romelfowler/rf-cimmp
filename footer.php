<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CIMMP-V2
 */

?>

<?php if(is_page_template('page-home.php') ): ?>
	<?php get_template_part('template-parts/nav/content', 'home-footer'); ?>
<?php else : ?>
	<?php get_template_part('template-parts/nav/content', 'blog-footer'); ?>
<?php endif; ?>
<!-- start scroll to top -->
<a class="scroll-top-arrow" href="#"><i class="ti-arrow-up"></i></a>
<?php wp_footer(); ?>




<!-- end scroll to top  -->
<!-- javascript libraries -->


<script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/modernizr.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.easing.1.3.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/skrollr.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/smooth-scroll.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.appear.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootsnav.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.nav.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/wow.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/page-scroll.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/swiper.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.count-to.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.stellar.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.magnific-popup.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/isotope.pkgd.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/imagesloaded.pkgd.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/classie.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/hamburger-menu.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/counter.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.fitvids.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/equalize.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/skill.bars.jquery.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/justified-gallery.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.easypiechart.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/instafeed.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/retina.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/revolution/js/jquery.themepunch.tools.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/revolution/js/jquery.themepunch.revolution.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/revolution/js/extensions/revolution.extension.actions.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/revolution/js/extensions/revolution.extension.carousel.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/revolution/js/extensions/revolution.extension.kenburn.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/revolution/js/extensions/revolution.extension.migration.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/revolution/js/extensions/revolution.extension.navigation.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/revolution/js/extensions/revolution.extension.parallax.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/revolution/js/extensions/revolution.extension.slideanims.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/revolution/js/extensions/revolution.extension.video.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js" charset="utf-8"></script>

<script src="https://apis.google.com/js/platform.js" async defer></script>

</body>
</html>
