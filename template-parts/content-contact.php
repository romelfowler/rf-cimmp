<?php
$contact_section_address_title = get_field('contact_section_address_title');
$contact_address = get_field('contact_address');
$contact_section_phone_title = get_field('contact_section_phone_title');
$contact_phone = get_field('contact_phone');
$contact_section_email_title = get_field('contact_section_email_title');
$contact_email = get_field('contact_email');
$contact_section_hours_title = get_field('contact_section_hours_title');
$contact_section_hours = get_field('contact_section_hours');
$contact_hours = get_field('contact_hours');
?>

<section id="contact" class="wow fadeIn no-padding animate color-code margin-ten-tb" data-color="7">
    <div class="container-fluid">
        <div class="row equalize sm-equalize-auto">
          <div class="col-md-6 col-sm-12 no-padding col-2-nth wow fadeInRight">
              <!-- start contact item -->
              <div class="col-md-6 col-sm-6 col-xs-12 display-table  height-300px last-paragraph-no-margin">
                  <div class="display-table-cell vertical-align-middle text-center">
                      <i class="icon-map text-white icon-medium margin-25px-bottom"></i>
                      <?php
                      if($contact_section_address_title) : echo '<div class="text-white text-uppercase alt-font font-weight-600 margin-5px-bottom">'
                      . $contact_section_address_title . '</div>', '<a target="_blank" href="https://www.google.com/maps/place/CIM+Marketing+Partners/@36.158335,-115.3320457,17z/data=!3m1!4b1!4m5!3m4!1s0x80c8bfa539bc429d:0xa1ae8dc6ada9b39d!8m2!3d36.158335!4d-115.329857"><p class="text-white width-60 md-width-80 center-col text-medium"> '
                      . $contact_address . '</p></a>'; else: echo ' '; endif; ?>
                  </div>
              </div>
              <!-- end contact item -->
              <!-- start contact item -->
              <div class="col-md-6 col-sm-6 col-xs-12 display-table  height-300px last-paragraph-no-margin">
                  <div class="display-table-cell vertical-align-middle text-center">
                      <i class="icon-chat text-white icon-medium margin-25px-bottom"></i>
                      <?php
                      if($contact_section_phone_title ) : echo '<div class="text-white text-uppercase alt-font font-weight-600 margin-5px-bottom">'
                      .$contact_section_phone_title . '</div>', '<p class="text-white center-col text-medium no-margin">'
                      .$contact_phone . '</p> '; else: ' '; endif;?>
                  </div>
              </div>
              <!-- end contact item -->
              <!-- start contact item -->
              <div class="col-md-6 col-sm-6 col-xs-12 display-table  height-300px last-paragraph-no-margin">
                  <div class="display-table-cell vertical-align-middle text-center">
                      <i class="icon-envelope text-white icon-medium margin-25px-bottom"></i>
                      <?php
                      if($contact_section_email_title ) : echo '<div class="text-white text-uppercase alt-font font-weight-600 margin-5px-bottom">'
                      .$contact_section_email_title . '</div>', '<p class=" center-col text-medium no-margin"><a class="text-white" href=" ' .$contact_email. ' ">'
                      .$contact_email . '</a></p>'; else: ' '; endif;?>
                  </div>
              </div>
              <!-- end contact item -->
              <!-- start contact item -->
              <div class="col-md-6 col-sm-6 col-xs-12 display-table  height-300px last-paragraph-no-margin">
                  <div class="display-table-cell vertical-align-middle text-center">
                      <i class="icon-clock text-white icon-medium margin-25px-bottom"></i>
                      <?php if($contact_section_hours_title) : ?>
                        <div class="text-white text-uppercase alt-font font-weight-600 margin-5px-bottom"><?php echo $contact_section_hours_title; ?></div>
                      <?php else: echo ' '; endif;?>
                      <?php if( have_rows('contact_section_hours') ): while ( have_rows('contact_section_hours') ) : the_row(); echo '<p class="text-white center-col text-medium no-margin">'?>
                      <?php the_sub_field('contact_hours'); ?> <?php echo '</p>'; ?>
                      <?php endwhile; else : echo '';  endif; ?>

                  </div>
              </div>
              <!-- end contact item -->
          </div>
            <div class="col-md-6 wow fadeIn">
                <div class="padding-eleven-all text-center xs-no-padding-lr">
                    <div class="text-medium-gray alt-font text-small text-uppercase margin-5px-bottom xs-margin-three-bottom">Just fill out the form</div>
                    <h5 class="margin-55px-bottom text-white alt-font font-weight-700 text-uppercase xs-margin-ten-bottom">We're Ready! Are You?</h5>

                    <form id="project-contact-form" action="#" method="post">
                        <div class="row">
                          <?php echo do_shortcode('[contact-form-7 id="17" title="Contact form 1"]'); ?>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
