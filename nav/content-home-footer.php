<!-- start footer -->
<footer class="footer-center-logo padding-five-tb xs-padding-30px-tb">
		<div class="container">
				<div class="row equalize xs-equalize-auto">
						<!-- start copyright -->
						<div class="col-md-4 col-sm-5 col-xs-12 text-small text-center alt-font display-table xs-text-center xs-margin-15px-bottom">
								<div class="display-table-cell vertical-align-middle text-white">
										&COPY; 2018 All Rights Reserved by <a href="https://www.cimmp.com" class="text-white text-bg-theme-color-2-hover" target="_blank" title="CIMMP">CIM Marketing Partners.</a>
								</div>
						</div>
						<!-- end copyright -->
						<!-- start logo -->
						<div class="col-md-4 col-sm-2 col-xs-12 text-center display-table xs-margin-10px-bottom">
								<div class="display-table-cell vertical-align-middle">
										<a href="index.html"><img class=" width-150px" src="<?php bloginfo('stylesheet_directory')?>/assets/images/logo/logo-white.png" data-at2x="<?php bloginfo('stylesheet_directory')?>/assets/images/logo/logo-white@2x.png" alt="CIMMP-logo"></a>
								</div>
						</div>
						<!-- end logo -->
						<!-- start social media -->
						<div class="col-md-4 col-sm-5 col-xs-12 text-center display-table xs-text-center">
								<div class="display-table-cell vertical-align-middle text-white">
										<span class="alt-font text-small margin-20px-right"></span>
										<div class="social-icon-style-8 display-inline-block vertical-align-middle">
												<ul class="small-icon no-margin-bottom">
													<?php $cptui_social_medias = new WP_Query( array( 'post_type' => 'social_medias', 'posts_per_page' => 5, 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
													<?php if($cptui_social_medias->have_posts()): while ( $cptui_social_medias->have_posts() ) : $cptui_social_medias->the_post();?>
														<li><a class="<?php the_field('social_icon') ?> text-white" href="<?php the_field('social_media_link'); ?>" target="_blank"><i class="fa fa-<?php the_field('social_icon') ?>"></i></a></li>
													<?php endwhile; endif; ?>

												</ul>
										</div>
								</div>
						</div>
						<!-- end social media -->
				</div>
		</div>
</footer>
<!-- end footer -->
