<header>
          <div class="left-nav">
              <!-- start logo -->

              <div class="sidebar-part1 ">
                  <a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="CIMMP" target="_blank" class="logo margin-25px-lr width-150px width-xs-50px">
                    <img src="<?php bloginfo('stylesheet_directory')?>/assets/images/logo/logo.png" data-at2x="<?php bloginfo('stylesheet_directory')?>/assets/images/logo/logo.png" width="200" alt="CIMMP"></a>
              </div>
              <!-- end logo -->
              <div class="sidebar-part2">
                  <div class="sidebar-middle">
                      <div class="sidebar-middle-menu alt-font font-weight-600">
                          <nav class="navbar bootsnav alt-font">
                            <?php
                            $walker = new myNavWalker;
                            $args = array(
                              'theme_location' => 'main-menu',
                              'container_class' => 'collapse navbar-collapse no-padding',
                              'container_id' => 'navbar-menu',
                              'menu_class' => 'nav navbar-nav margin-80px-bottom',
                              'depth'=>3,
                              'walker'=>$walker
                            );
                             ?>

                            <?php wp_nav_menu( $args ); ?>
                          </nav>

                          <div class="icon-social-medium sm-display-none">
                            <?php $cptui_social_medias = new WP_Query( array( 'post_type' => 'social_medias', 'posts_per_page' => 4, 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
                            <?php if($cptui_social_medias->have_posts()): while ( $cptui_social_medias->have_posts() ) : $cptui_social_medias->the_post();?>
                            <a class="text-extra-dark-gray text-bg-theme-color-1-hover  margin-10px-right" href="<?php the_field('social_media_link'); ?>" target="_blank"><i class="fa fa-<?php the_field('social_icon') ?> aria-hidden="true""></i></a>
                            <?php endwhile; endif; ?>
                          </div>
                          <div class="right-bg "></div>
                      </div>
                  </div>
              </div>
              <div class="sidebar-part3">
                  <div class="bottom-menu-icon">
                      <a href="#" class="right-menu-button text-extra-dark-gray nav-icon" id="showRightPush">
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                      </a>
                  </div>
              </div>
          </div>
      </header>
      <!-- end header -->
