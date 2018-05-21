<section class="wow fadeIn color-code no-padding xs-padding-50px-tb" data-color="6" style="background: url('/wp-content/themes/cimmp-v2/assets/images/ico/coffee-right.png') right bottom no-repeat">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 col-sm-10 col-xs-12 center-col text-center margin-100px-top">
                <div class="text-extra-small letter-spacing-3 alt-font text-white text-uppercase margin-70px-bottom sm-margin-50px-bottom xs-margin-30px-bottom display-inline-block">What Have We Worked On?</div>
            </div>
        </div>
        <div class="row">
            <div class="filter-content overflow-hidden padding-100px-lr sm-no-padding-lr xs-padding-15px-lr">
                <ul class="portfolio-grid work-5col hover-option8 gutter-medium">
                    <li class="grid-sizer"></li>
                    <?php $postQuery = new WP_Query( array( 'post_type' => 'folio', 'posts_per_page'=>'5','orderby' => 'post_id', 'order' => 'DESC' ) );
                          if($postQuery->have_posts() ) : while($postQuery->have_posts() ) : $postQuery->the_post();
                          $grid_item_size = get_field('grid_item_size');
                          $grid_item_delay = get_field('grid_item_delay');
                          $grid_menu_item = get_field('grid_menu_item');
                          $category = get_the_category();
                          $firstCategory = $category[0]->cat_name;
                          ?>
                    <!-- start portfolio item -->
                    <li class="grid-item web branding design wow fadeInUplast-paragraph-no-margin">
                        <a href="<?php the_permalink(); ?>">
                            <figure>
                              <?php if( has_post_thumbnail() ) :  ?>
                                <div class="portfolio-img"><?php the_post_thumbnail(); ?></div>
                              <?php else: ?>
                                <div class="portfolio-img"><img src="http://placehold.it/900x900" alt="placeholder image"/></div>
                              <?php endif; ?>

                                <figcaption>
                                    <div class="portfolio-hover-main">
                                        <div class="portfolio-hover-box vertical-align-middle">
                                            <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom"><?php the_title(); ?></span>
                                            <p class="text-small no-letter-spacing text-medium-gray"><?php echo $firstCategory; ?></p>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- end portfolio item -->
                  <?php endwhile; endif; wp_reset_query();?>


                </ul>
            </div>
        </div>
    </div>
</section>
