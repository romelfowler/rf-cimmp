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
<script src="https://apis.google.com/js/platform.js" async defer></script>

<?php wp_footer(); ?>

<!-- end scroll to top  -->
<!-- javascript libraries -->

</body>
</html>
