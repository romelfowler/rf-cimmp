<?php // HOME PAGE - PROCESS SECTION
$process_title = get_field('process_title'); ?>
<!-- start fancy text box style 03 section -->
<section id="process" class="wow fadeInUp animated color-code no-padding-top md-no-background-img xs-padding-50px-tb margin-100px-bottom parallax" data-color="11" style="background: url('http://cimmp.com/wp-content/uploads/2018/06/yellow.png')  no-repeat -10% 108% / 40%;  ">

<div class="container">
  <div class="row">
      <div class="col-md-7 col-sm-12 col-xs-12 center-col text-center margin-100px-top margin-100px-bottom xs-margin-40px-bottom">
          <div class="position-relative overflow-hidden width-100">
              <span class="text-small text-outside-line-full alt-font font-weight-600 fs-40px padding-40px-tb"><?php echo $process_title; ?></span>
          </div>
      </div>
  </div>

  <div class="row">
    <?php if( have_rows('process_section_repeater') ): while ( have_rows('process_section_repeater') ) : the_row();
    $process_img = get_sub_field('process_image');

?>
      <!-- feature box item-->
      <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-five-bottom last-paragraph-no-margin wow fadeInUp">
          <div class="feature-box" style="background:#FFF">
              <div class="content">
                <?php if(!empty($process_img) ): ?>
                  <img class="margin-25px-bottom sm-margin-15px-bottom width-50" src="<?php echo $process_img[url]; ?>" alt=" <?php echo $process_img[alt]; ?> ">
                <?php endif; ?>
                  <div class="text-small alt-font text-capitalize text-extra-dark-gray margin-10px-bottom sm-margin-5px-bottom"><?php echo the_sub_field('process_title'); ?></div>
                  <p class="width-85 margin-lr-auto sm-width-100">
                    <?php echo the_sub_field('process_content') ?>
                  </p>
              </div>
          </div>
      </div>
      <!-- end feature box item-->
    <?php endwhile; endif; wp_reset_query();?>

  </div>
</div>
</section>
<!-- end of section-->
