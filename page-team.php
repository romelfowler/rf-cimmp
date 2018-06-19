<?php
/**
 * Template Name: Team Template
 *
 */

get_header();
?>
<!-- start page title section -->
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<section class="wow fadeIn bg-light-gray padding-35px-tb page-title-small top-space">
    <div class="container">
        <div class="row equalize xs-equalize-auto">
            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table">
                <div class="display-table-cell vertical-align-middle text-left xs-text-center">
                    <!-- start page title -->
                    <h1 class="alt-font text-extra-dark-gray font-weight-600 no-margin-bottom text-uppercase"><?php the_title(); ?></h1>
                    <!-- end page title -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right xs-margin-15px-top">
                <div class="display-table-cell vertical-align-middle breadcrumb text-small alt-font">
                    <!-- breadcrumb -->
                    <ul class="xs-text-center">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-dark-gray">Home</a></li>
                        <li class="text-dark-gray">About the CIM family culture</li>
                    </ul>
                    <!-- end breadcrumb -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; endif; ?>
<!-- end page title section -->
<!-- start team -->
<section class="wow fadeIn">
    <div class="container-fluid padding-seventeen-lr md-padding-ten-lr xs-padding-15px-lr">
        <div class="row">
            <!-- start team item -->
              <?php $cptui_team_profiles = new WP_Query( array( 'post_type' => 'team_profiles', 'orderby' => 'post_id', 'order' => 'DESC') ); ?>
              <?php if($cptui_team_profiles->have_posts()): while ( $cptui_team_profiles->have_posts() ) : $cptui_team_profiles->the_post();?>
                <div class="col-md-3 col-sm-6 col-xs-12 team-block text-left team-style-1 margin-40px-bottom sm-margin-seven-bottom xs-margin-30px-bottom ">
                <figure>
                    <div class="team-image xs-width-100">
                      <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                      echo '<a href="'.esc_url($featured_img_url).'" rel="lightbox">'; the_post_thumbnail(); echo '</a>'; ?>

                        <div class="overlay-content text-center">
                            <div class="display-table height-100 width-100">
                                <div class="vertical-align-bottom display-table-cell icon-social-small padding-twelve-all">
                                    <span class="text-white text-small display-inline-block no-margin"><?php the_excerpt(); ?></span>
                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                    <?php if(have_rows('cptui_social_media_box')):while(have_rows('cptui_social_media_box') ) : the_row(); ?>
                                      <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" target="_blank"><i class="text-white fa fa-user"></i></a>
                                      <a href="<?php the_sub_field('cptui_social_media_link'); ?>" class="text-white" target="_blank"><i class="fa fa-<?php the_sub_field('cptui_social_media_icon')?>"></i></a>
                                    <?php endwhile; endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                    </div>
                    <figcaption>
                        <div class="team-member-position margin-20px-top text-center">
                            <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase"><?php the_title(); ?></div>
                            <div class="text-extra-small text-uppercase text-medium-gray"><?php the_tags(' ', ',' , ''); ?></div>
                        </div>
                    </figcaption>
                </figure>
            </div>
              <?php endwhile; endif; wp_reset_query();?>
            <!-- end team item -->
        </div>
    </div>
</section>
<!-- end team section -->

<!-- start section -->
<section class="no-padding wow fadeIn bg-extra-dark-gray">
    <div class="container-fluid no-padding">
        <div class="row equalize sm-equalize-auto no-margin">
            <div class="col-md-4 col-sm-12 col-xs-12 display-table wow fadeIn sm-text-center">
                <div class="display-table-cell vertical-align-middle padding-thirteen-all md-padding-ten-all xs-no-padding-lr xs-text-center animated slideInDown">
                    <h4 class="alt-font text-white font-weight-600 sm-margin-lr-auto xs-width-100"> <span class="text-bg-theme-color-2">Our</span> Strategy <br></h4>
                    <p class="text-white width-90 md-width-100"> We believe in our clients' goals and strive to make them a reality. CIM Marketing Partners will provide you with the strategy, tactics and implementation plan that will allow your company to thrive. We back what we say by employing experienced, top-notch talent, and offer a kaleidoscope of services designed to grow any business.</p>

                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 display-table wow fadeIn sm-text-center">
                <div class="display-table-cell vertical-align-middle padding-thirteen-all md-padding-ten-all xs-no-padding-lr xs-text-center animated slideInUp">
                    <h4 class="alt-font text-white font-weight-600 sm-margin-lr-auto xs-width-100"> <span class="text-bg-theme-color-2">Our</span> Passion <br></h4>
                    <p class="text-white width-90 md-width-100"> Since 1996, Founder and CEO Darcy K. Neighbors has been raising the bar in every area of the strategic marketing business, year after year. The CIM Marketing Partners team is serious about their work and is determined to meet and exceed the expectations of each client and every project they manage.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 display-table wow fadeIn sm-text-center">
                <div class="display-table-cell vertical-align-middle padding-thirteen-all md-padding-ten-all xs-no-padding-lr xs-text-center animated slideInDown">
                    <h4 class="alt-font text-white font-weight-600 sm-margin-lr-auto xs-width-100"> <span class="text-bg-theme-color-2">Your</span> Success <br></h4>
                    <p class="text-white width-90 md-width-100">High expectations are the key to success. The team at CIM Marketing Partners takes the time to understand your business. We listen to your vision and goals and develop a strategic plan for your business to achieve results and obtain the greatest return on your marketing investment.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end section -->

<!-- start information section -->
<section class="wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-10 center-col text-center">
                <i class="fa fa-edit icon-medium text-deep-pink display-block margin-25px-bottom"></i>
                <h5 class="alt-font text-extra-dark-gray font-weight-600 margin-5px-bottom">PARTNER UNDER THE MARKETING UMBRELLA</h5>
                <p class="alt-font text-extra-dark-gray font-weight-300">Marketing is much more than advertising or sales – those are just two of the many marketing components. When planning the strategic marketing path for any given client, each individual component may or may not be appropriate. Those items that "make the cut" are implemented in partnership with that client.</p>
            </div>
        </div>
    </div>
</section>
<!-- end information section -->

<!-- start services style 03 section -->
<section class="wow fadeIn bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12 center-col text-center margin-100px-bottom xs-margin-40px-bottom">
                <div class="position-relative overflow-hidden width-100">
                    <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">Here Are Our Services</span>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- start services item -->
            <?php $cptui_services = new WP_Query( array( 'post_type' => 'services', 'posts_per_page'=> 4, 'orderby' => 'post_id', 'order' => 'DESC') ); ?>
            <?php if($cptui_services->have_posts()): while ( $cptui_services->have_posts() ) : $cptui_services->the_post();?>

            <div class="<?php the_field('cptui_service_column_width');?> sm-margin-30px-bottom animated <?php the_field('cptui_service_animation') ?>">
              <div class="margin-ten-bottom sm-margin-30px-bottom text-center feature-box-8 position-relative z-index-5">
                  <div class="display-inline-block margin-20px-bottom"><i class="fa fa-<?php the_field('cptui_service_icon');?> text-white icon-round-small <?php the_field('cptui_service_bg-color'); ?>"></i></div>
                </div>
                <?php echo '<a class="alt-font margin-5px-bottom display-block text-extra-dark-gray font-weight-600 text-uppercase text-small" target="_blank" href=" '. get_permalink() . ' " > ' . get_the_title() . '</a>'; ?>
                <p class="width-95 sm-width-100">
                  <?php the_excerpt(); ?>
                </p>
                <div class="border-top border-color-extra-light-gray padding-20px-top xs-padding-15px-top"></div>
            </div>
          <?php endwhile; endif; ?>
            <!-- end services item -->

        </div>
    </div>
</section>
<!-- end services style 03 section -->


  <!-- end contact section -->
<?php get_footer(); ?>
</div>
<!-- end of header section -->
