<!-- start header -->
<header>
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav bg-transparent navbar-scroll-top header-light nav-box-width">
        <div class="container-fluid nav-header-container">
            <div class="row">
                <div class="col-md-2 col-xs-5">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="CIMMP" class="logo">
                      <img src="<?php bloginfo('stylesheet_directory')?>/assets/images/logo/logo.png" data-at2x="<?php bloginfo('stylesheet_directory')?>/assets/images/logo/logo.png" class="logo-dark default" alt="CIMMP">
                      <img src="<?php bloginfo('stylesheet_directory')?>/assets/images/logo-white.png" data-at2x="<?php bloginfo('stylesheet_directory')?>/images/logo-white@2x.png" alt="CIMMP" class="logo-light">
                    </a>
                </div>
                <!-- <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
                    <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div> -->
                <div class="col-md-2 col-xs-5 width-auto">
                    <div class="header-searchbar">
                        <a href="#search-header" class="header-search-form text-white"><i class="fa fa-search search-button"></i></a>
                        <!-- search input-->
                        <form id="search-header" method="post" action="search-result.html" name="search-header" class="mfp-hide search-form-result">
                            <div class="search-form position-relative">
                                <button type="submit" class="fa fa-search close-search search-button"></button>
                                <input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
                            </div>
                        </form>
                    </div>
                    <div class="header-social-icon xs-display-none">
                      <?php $cptui_social_medias = new WP_Query( array( 'post_type' => 'social_medias', 'posts_per_page' => 5, 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
                      <?php if($cptui_social_medias->have_posts()): while ( $cptui_social_medias->have_posts() ) : $cptui_social_medias->the_post();?>
                        <a class="text-extra-dark-gray text-bg-theme-color-1-hover  margin-10px-right" href="<?php the_field('social_media_link'); ?>" target="_blank"><i class="fa fa-<?php the_field('social_icon') ?> aria-hidden="true""></i></a>
                      <?php endwhile; endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
<!-- end header -->
