<?php // HOME PAGE - TESTIMONIAL SECTION
$testimonial_title = get_field('testimonial_title'); ?>
<!-- start testimonial style 03 section -->
<section class="wow fadeIn animated color-code" data-color="8">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12 center-col text-center margin-50px-top xs-margin-40px-top margin-100px-bottom xs-margin-40px-bottom">
                <div class="position-relative overflow-hidden width-100">
                    <span class="text-large text-outside-line-full alt-font font-weight-600 text-uppercase text-white"><?php echo $testimonial_title; ?></span>
                </div>
            </div>
        </div>
        <div class="row">
          <?php if( have_rows('testimonial_section_repeater') ): while ( have_rows('testimonial_section_repeater') ) : the_row(); ?>

            <!-- start testimonial item -->
            <div class="col-md-6 col-sm-6 col-xs-12 sm-margin-four-bottom text-center xs-margin-twelve-bottom wow <?php the_sub_field('testimonial_animation'); ?> last-paragraph-no-margin">
                <p class="width-90 center-col text-white">
                  <?php the_sub_field('test_content'); ?>
                </p>
                <i class="fa fa-quote-left icon-small text-bg-theme-color-2 display-block margin-30px-top margin-15px-bottom"></i>
                <span class="text-white font-weight-600 text-small text-uppercase display-block line-height-10 alt-font"><?php the_sub_field('test_author'); ?>
                </span>
                <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">
                  <?php the_sub_field('company_name'); ?>
                </span>
            </div>
            <!-- end testimonial item -->
          <?php endwhile; endif; wp_reset_query(); ?>
        </div>
    </div>
</section>
