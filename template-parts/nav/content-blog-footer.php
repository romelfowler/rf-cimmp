<!-- start footer -->
<footer class="footer-classic-light padding-five-bottom xs-padding-30px-bottom">
    <div class=" bg-theme-color-2 padding-50px-tb xs-padding-30px-tb">
        <div class="container">
            <div class="row equalize xs-equalize-auto">
                <!-- start slogan -->
                <div class="col-md-4 col-sm-5 col-xs-12 text-center alt-font display-table xs-text-center xs-margin-15px-bottom">
                    <div class="display-table-cell vertical-align-middle text-white">
                        Las Vegas based marketing company
                    </div>
                </div>
                <!-- end slogan -->
                <!-- start logo -->
                <div class="col-md-4 col-sm-2 col-xs-12 text-center display-table xs-margin-10px-bottom">
                    <div class="display-table-cell vertical-align-middle">
                        <a href="index.html"><img class="footer-logo" src="<?php bloginfo('stylesheet_directory')?>/assets/images/logo-white.png" data-at2x="images/logo-white@2x.png" alt=""></a>
                    </div>
                </div>
                <!-- end logo -->
                <!-- start social media -->
                <div class="col-md-4 col-sm-5 col-xs-12 col-xs-12 text-center display-table xs-text-center">
                    <div class="display-table-cell vertical-align-middle">
                        <span class="alt-font margin-20px-right text-white">On social networks</span>
                        <div class="social-icon-style-8 display-inline-block vertical-align-middle">
                            <ul class="small-icon no-margin-bottom">
                              <?php $cptui_social_medias = new WP_Query( array( 'post_type' => 'social_medias', 'posts_per_page' => 5, 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
                              <?php if($cptui_social_medias->have_posts()): while ( $cptui_social_medias->have_posts() ) : $cptui_social_medias->the_post();?>
                                <li><a class="<?php the_field('social_icon') ?> text-white text-bg-theme-color-1-hover  margin-10px-right" href="<?php the_field('social_media_link'); ?>" target="_blank"><i class="fa fa-<?php the_field('social_icon') ?>"></i></a></li>
                              <?php endwhile; endif; ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end social media -->
            </div>
        </div>
    </div>
    <div class="footer-widget-area padding-five-top padding-30px-bottom xs-padding-30px-top">
        <div class="container">
            <div class="row">
                <!-- start about -->
                <div class="col-md-4 col-sm-6 col-xs-12 widget sm-margin-30px-bottom xs-text-center">
                    <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600">About Agency</div>
                    <p class="text-small width-95 xs-width-100 no-margin">We believe in our clients' goals and strive to make them a reality. CIM Marketing Partners will provide you with the strategy, tactics and implementation plan that will allow your company to thrive. We back what we say by employing experienced, top-notch talent, and offer a kaleidoscope of services designed to grow any business.

 </p>
                </div>
                <!-- end about -->
                <!-- start blog post -->
                <div class="col-md-4 col-sm-6 col-xs-12 widget sm-margin-30px-bottom">
                    <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600 xs-text-center">Latest Blog Post</div>
                    <ul class="latest-post position-relative top-3">
                      <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                            $post = array( 'post_type' => 'post','posts_per_page'=>3, 'orderby' => 'post_id', 'order' => 'DESC' );
                            $postQuery = new WP_Query($post);
                            if($postQuery->have_posts() ) : while($postQuery->have_posts() ) : $postQuery->the_post(); ?>

                        <li class="border-bottom border-color-medium-dark-gray">
                            <figure>
                              <?php if (has_post_thumbnail()) { ?>
                               <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" target="_blank">
                                  <?php the_post_thumbnail(); ?>
                               </a>
                             <?php } else { ?>
                                <a href="#"><img src="http://placehold.it/700x403" alt="<?php echo $image1_alt; ?>"></a>
                              <?php } ?>

                            </figure>
                            <div class="text-small"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Design is not just what looks...</a> <span class="clearfix"></span>20 April 2017 | by <a href="#">Herman Miller</a></div>
                        </li>
                      <?php endwhile; else: ?>
                          <h1>missing post</h1>
                      <?php endif; ?>

                    </ul>
                </div>
                <!-- end blog post -->
                <!-- start newsletter -->
                <div class="col-md-4 col-sm-6 col-xs-12 widget sm-margin-30px-bottom xs-text-center">
                    <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600">Inquire Today!</div>
                    <p class="text-small width-90 xs-width-100">See what services we have to offer</p>
                    <form id="subscribenewsletterform" action="javascript:void(0)" method="post">
                        <div class="position-relative newsletter width-95">
                            <div id="success-subscribe-newsletter" class="no-margin-lr"></div>
                            <input type="text" id="email" name="email" class="bg-transparent text-small no-margin border-color-medium-dark-gray" placeholder="Enter your email...">
                            <button id="button-subscribe-newsletter" type="submit" class="btn btn-arrow-small position-absolute border-color-medium-dark-gray"><i class="fa fa-caret-right no-margin-left"></i></button>
                        </div>
                    </form>
                </div>
                <!-- end newsletter -->
                <!-- start instagram -->
                <!-- <div class="col-md-3 col-sm-6 col-xs-12 widget xs-margin-5px-bottom xs-text-center">
                    <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-20px-bottom font-weight-600">Follow us Instagram</div>
                    <div class="instagram-follow-api">
                        <ul id="instaFeed-footer"></ul>
                    </div>
                </div> -->
                <!-- end instagram -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-bottom border-top border-color-medium-dark-gray padding-30px-top">
            <div class="row">
                <!-- start copyright -->
                <div class="col-md-6 col-sm-6 col-xs-12 text-left text-small xs-text-center"></div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-right text-small xs-text-center"> &COPY; <?php echo get_the_date('Y'); ?> All Rights Reserved by <a href="https://www.cimmp.com" target="_blank" title="CIMMP">CIM Marketing Partners.</a></div>
                <!-- end copyright -->
            </div>
        </div>
    </div>
</footer>
