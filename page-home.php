<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CIMMP-V2
 */
include_once('inc/vars.php');
get_header();
?>
<!-- start hero section -->

<section class=" wow fadeIn no-padding cover-background color-code" data-color="11"  >
  <div class=" full-screen position-absolute width-100">
  <?php if( $cta_radio_choice == 'Iframe' ) : echo $cta_video_iframe; else:?>
    <video id="playback" tabindex="0" autobuffer="autobuffer" poster="<?php echo $cta_video_html_image[url]; ?>" preload="preload" loop autoplay muted>
      <source src='<?php bloginfo('template_directory');?><?php echo $cta_vid_html; ?>' type='video/mp4' />
      <source src='<?php bloginfo('template_directory');?><?php echo $cta_vid_html; ?>' type='video/webm' />
    </video>
  <?php endif; ?>
  </div>
    <div class="container full-screen position-relative">
        <div class="slider-typography text-left">
            <div class="slider-text-middle-main">
                <div class="slider-text-middle">
                    <div class="col-lg-7 col-md-10 col-sm-10 center-col text-center">
                        <?php
                        echo '<span class=" text-extra-small alt-font text-white letter-spacing-3 xs-letter-spacing-0 text-uppercase margin-20px-bottom xs-margin-5px-bottom display-inline-block"></span>',
                        '<h2 class="font-weight-600 text-white alt-font margin-40px-bottom xs-margin-25px-bottom mobileFix">' . $cta_title . '</h2>';
                        if($cta_feature_work_choice) : echo '<a href=" ' .$cta_feature_link . '" class="btn btn-transparent-white btn-rounded btn-medium text-link-white"> ' . $cta_featured_title_btn . ' </a>'; else : echo ""; endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end hero section -->
<?php wp_reset_query(); ?>

<!-- PROCESS -->
<?php get_template_part('template-parts/home-parts/content', 'process') ?>
<!-- SERVICE -->
<?php get_template_part('template-parts/home-parts/content', 'service') ?>
<!-- TESTIMONIAL -->
<?php get_template_part('template-parts/home-parts/content', 'testimonial') ?>
  <!--  PORTFOLIO  -->
<?php get_template_part('template-parts/home-parts/content','portfolio') ?>
  <!-- CONTACT-->
<?php get_template_part('template-parts/content', 'contact') ?>

  <!-- end contact section -->
<?php get_footer(); ?>
</div>
<!-- end of header section -->
