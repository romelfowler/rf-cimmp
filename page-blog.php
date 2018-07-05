<?php
/**
 * Template Name: Blog
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

get_header();
?>


        <!-- start blog section -->
        <section class="wow fadeIn no-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 no-padding">
                        <ul class="blog-header-style1 equalize sm-equalize-auto">
                          <?php $post = array( 'post_type' => 'post', 'orderby' => 'date','category_name'=>'newsroom', 'posts_per_page'=>3, 'order' => 'DESC' );
                                $postQuery = new WP_Query($post);
                                if($postQuery->have_posts() ) : while($postQuery->have_posts() ) : $postQuery->the_post();
                                $author = get_field('author_name');
                                $navigationSetting = get_field('post_blog_setting');
                                ?>
                            <!-- start blog post item -->
                            <li class="sm-padding-15px-bottom one-third-screen sm-height-450px">
                              <?php if( has_post_thumbnail( $post->ID ) ): ?>
                                <div class="blog-banner cover-background" style="background-image:url(<?php the_post_thumbnail_url();?>)">
                              <?php else: ?>
                                <div class="blog-banner cover-background" style="background-image:url('http://via.placeholder.com/500x700')">
                              <?php endif; ?>
                                    <div class="opacity-medium bg-extra-dark-gray"></div>
                                    <figure>
                                        <figcaption>
                                            <span href="<?php the_permalink(); ?>" class="text-white text-small text-uppercase alt-font font-weight-600 margin-10px-bottom display-inline-block"><?php the_title(); ?></span><br>
                                            <a href="<?php the_permalink(); ?>" class="btn btn-very-small btn-white font-weight-300">Continue Reading</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <!-- start blog post item -->
                          <?php endwhile; endif; wp_reset_query();?>

                            <!-- end blog post item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end blog section -->
    <section class="wow fadeIn no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- start filter navigation -->
                    <!-- <ul class="portfolio-filter nav nav-tabs border-none portfolio-filter-tab-1 font-weight-600 alt-font text-uppercase text-center margin-80px-top margin-80px-bottom text-small sm-margin-40px-bottom xs-margin-20px-bottom">
                        <li class="nav active"><a href="javascript:void(0);" data-filter="*" class="xs-display-inline light-gray-text-link text-very-small">All</a></li>
                        <li class="nav"><a href="javascript:void(0);" data-filter=".newsroom" class="xs-display-inline light-gray-text-link text-very-small">Newsroom</a></li>
                        <li class="nav"><a href="javascript:void(0);" data-filter=".blog" class="xs-display-inline light-gray-text-link text-very-small">Blog</a></li>

                    </ul> -->
                    <!-- end filter navigation -->
                </div>
            </div>
        </div>
        <!-- start post content section -->

            <div class="container">
                <div class=" row col-4-nth sm-col-2-nth  margin-80px-top">
                  <?php $post = array( 'post_type' => 'post', 'post_per_page'=>-1,'orderby' => 'date', 'order' => 'DESC');
                        $postQuery = new WP_Query($post);
                        if($postQuery->have_posts() ) : while($postQuery->have_posts() ) : $postQuery->the_post();
                        $author = get_field('author_name');
                        $navigationSetting = get_field('post_blog_setting');
                        ?>

                    <!-- start post item -->
                      <div class="col-md-3 col-sm-6 col-xs-12 margin-50px-bottom last-paragraph-no-margin xs-margin-30px-bottom wow fadeInUp <?php echo $navigationSetting; ?>">
                          <div class="blog-post blog-post-style1 xs-text-center">
                              <div class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-20px-bottom">
                                <?php if (has_post_thumbnail()) { ?>
                                 <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" target="_blank">
                                    <?php the_post_thumbnail(); ?>
                                 </a>
                               <?php } else { ?>
                                 <img src="http://via.placeholder.com/400x300" alt="<?php echo $image1_alt; ?>" target="_blank">
                               <?php } ?>
                              </div>
                              <div class="post-details">

                                  <span class="post-author text-extra-small text-medium-gray text-uppercase display-block margin-10px-bottom xs-margin-5px-bottom"><?php the_date() ?> | by <a href="#" class="text-medium-gray"><?php echo $author ?></a></span>
                                  <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="post-title text-medium text-extra-dark-gray width-90 display-block sm-width-100 "><?php the_title(); ?></a>
                                  <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                                  <p class="width-90 xs-width-100"><?php the_excerpt(); ?></p>
                              </div>
                          </div>
                      </div>

                  <?php endwhile; else: ?>
                      <h1>Our blog page is under construction. Please check back again later.</h1>
                  <?php endif; wp_reset_query();?>
                    <!-- end post item -->


                </div>
                <!-- start slider pagination -->
                <!-- <div class=" text-center margin-100px-top sm-margin-50px-top wow fadeInUp">
                    <div class="pagination text-small text-uppercase text-extra-dark-gray">
                        <ul>
                            <li><a href="#"><i class="fa fa-long-arrow-left margin-5px-right xs-display-none"></i> Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next <i class="fa fa-long-arrow-right margin-5px-left xs-display-none"></i></a></li>
                        </ul>
                    </div>
                </div> -->
                <!-- end slider pagination -->
            </div>
        </section>
        <!-- end blog content section -->


<?php get_footer(); ?>
