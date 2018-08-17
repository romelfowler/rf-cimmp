<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 no-padding-lr xs-padding-15px-lr">
            <div class="filter-content overflow-hidden">
                <ul class="portfolio-grid portfolio-metro-grid work-4col hover-option8 gutter-medium">
                    <li class="grid-sizer"></li>
                    <?php
                    $args = array(
                      'post_type' => 'cimmp_pr',
                      'post_status'=> 'publish'
                    );
                    $postQuery = new WP_Query( $args );
                    if($postQuery->have_posts() ) : while($postQuery->have_posts() ) : $postQuery->the_post();
                    $grid_item_size = get_field('grid_item_size');
                    $grid_item_delay = get_field('grid_item_delay');
                    $grid_menu_item = get_field('grid_menu_item');
                    $category = get_the_category();
                    $firstCategory = $category[0]->cat_name;
                    ?>

                    <!-- start portfolio item -->
                    <li class=" <?php echo $grid_item_size; ?> <?php echo implode(' ' , $grid_menu_item); ?> wow fadeInUp" data-wow-delay="<?php echo $grid_item_delay; ?>">
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
                                            <div class="portfolio-icon alt-font font-weight-600 icon-medium">+</div>
                                            <span class="text-extra-large alt-font text-extra-dark-gray margin-5px-bottom"><?php the_title(); ?></span>
                                            <p class="no-letter-spacing text-small no-margin-bottom text-medium-gray"><?php echo $firstCategory; ?></p>
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
</div>
