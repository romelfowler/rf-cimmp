
<?php // HOME PAGE - SERVICE SECTION
$service_title = get_field('services_title');?>
<!-- start fancy text box style 02 section -->
<section class="wow fadeIn no-padding-bottom no-padding-top md-no-background-img xs-padding-50px-tb animated color-code" data-color="11" style="background: url('/wp-content/themes/cimmp-v2/assets/images/ico/coffee-right.png') right bottom no-repeat">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12 center-col text-center margin-100px-bottom xs-margin-40px-bottom">
                <div class="position-relative overflow-hidden width-100">
                    <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase"><?php echo $service_title; ?></span>
                </div>
            </div>
        </div>
        <div class="row equalize xs-equalize-auto">
          <?php if( have_rows('services_section_repeater') ): while ( have_rows('services_section_repeater') ) : the_row(); ?>
            <!-- start feature box item -->
            <div class="col-md-3 col-sm-6 col-xs-12 text-center display-table last-paragraph-no-margin wow <?php echo the_sub_field('service_animation') ?> no-padding" data-wow-delay="<?php the_sub_field('service_animation_delay'); ?>">
                <div class="display-table-cell vertical-align-top padding-fifteen-all sm-padding-50px-all xs-padding-30px-all height-400px" style="background-color: <?php the_sub_field('service_color'); ?>">
                    <h2 class="text-white alt-font letter-spacing-minus-3 no-margin-bottom"><?php the_sub_field('service_title'); ?></h2>
                    <span class="display-block alt-font text-large text-extra-dark-gray margin-15px-top margin-10px-bottom xs-margin-5px-bottom"></span>
                    <p class="text-white">
                      <?php echo the_sub_field('service_content'); ?>
                    </p>
                </div>
            </div>
            <!-- end feature box item -->
          <?php endwhile; endif; wp_reset_query();?>

        </div>
    </div>
</section>
<!-- end fancy text box style 02 section -->
