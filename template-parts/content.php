<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CIMMP-V2
 */

?>
<style media="screen">
	.widgettitle {
		display: none;
	}
</style>
<!-- start page title section -->
<section class="wow fadeIn bg-light-gray padding-35px-tb page-title-small top-space">

		<div class="container">
				<div class="row equalize xs-equalize-auto">
						<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table">
								<div class="display-table-cell vertical-align-middle text-left xs-text-center">
										<!-- start page title -->
										<?php
										if ( is_singular() ) :
											the_title('<h1 class="alt-font text-extra-dark-gray font-weight-600 no-margin-bottom text-uppercase">', '</h1>');
										else:
											the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
										endif;
											?>
										<!-- end page title -->
								</div>
						</div>
						<?php if ( 'post' === get_post_type() ) : ?>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right xs-text-left xs-margin-10px-top">
								<div class="display-table-cell vertical-align-middle breadcrumb text-small alt-font">
										<!-- breadcrumb -->
										<ul class="xs-text-center text-uppercase">
												<li><a href="#" class="text-dark-gray"><?php the_date(); ?></a></li>
												<li><span class="text-dark-gray">by <a href="#"><?php the_author(); ?></a></span></li>


												<?php if (!empty($category)): ?>
													<li class="text-dark-gray"><a href=" <?php esc_url(get_category_link($category[0]->cat_link)) ?> " >';
													<?php echo esc_html($category[0]->cat_name);  ?></a></li>
												<? endif; ?>

										</ul>
										<!-- end breadcrumb -->
								</div>
						</div>
					<?php endif; ?>

				</div>
		</div>
</section>
<!-- end page title section -->
<!-- start post content section -->
<section>
		<div class="container">
				<div class="row">
						<main class="col-md-9 col-sm-12 col-xs-12 right-sidebar sm-margin-60px-bottom xs-margin-40px-bottom no-padding-left sm-no-padding-right">
								<div class="col-md-12 col-sm-12 col-xs-12 blog-details-text last-paragraph-no-margin">
									<?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>

									<div class="margin-10px-top">

									<?php the_content();  ?>
								</div>

								</div>

								<div class="col-md-12 col-sm-12 col-xs-12 margin-seven-bottom margin-eight-top">
										<div class="divider-full bg-medium-light-gray"></div>
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12 sm-text-center">
										<div class="tag-cloud margin-20px-bottom">
											<?php the_tags(' ', ',' , ' '); ?>

										</div>
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12 text-right sm-text-center">
										<div class="social-icon-style-6">
												<ul class="extra-small-icon">
													<!-- <li><a class="likes-count" href="#" target="_blank"><i class="fa fa-heart text-deep-pink"></i><span class="text-small">300</span></a></li> -->
													<?php $cptui_social_medias = new WP_Query( array( 'post_type' => 'social_medias', 'posts_per_page' => 5, 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
													<?php if($cptui_social_medias->have_posts()): while ( $cptui_social_medias->have_posts() ) : $cptui_social_medias->the_post();?>
														<li><a class="<?php the_field('social_icon') ?>" href="<?php the_field('social_media_link'); ?>" target="_blank"><i class="fa fa-<?php the_field('social_icon') ?>"></i></a></li>
													<?php endwhile; endif; ?>
												</ul>
										</div>
								</div>



						</main>
						<aside class="col-md-3 col-sm-12 col-xs-12 pull-right">
								<div class="display-inline-block width-100 margin-45px-bottom xs-margin-25px-bottom">
										<form action="<?php echo home_url('/'); ?>" method="get">
												<div class="position-relative">
													<input class="text-white" type="text" name="s" class="bg-transparent text-small no-margin border-color-extra-light-gray medium-input pull-left" value="<?php echo get_search_query() ?>" placeholder="Search">
														<button type="s" class="bg-transparent  btn position-absolute right-0 top-1"><i class="fa fa-search no-margin-left"></i></button>
												</div>
										</form>
								</div>


								<div class="margin-50px-bottom">
										<div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Follow Us</span></div>
										<div class="social-icon-style-1 text-center">
												<ul class="extra-small-icon">
													<?php $cptui_social_medias = new WP_Query( array( 'post_type' => 'social_medias', 'posts_per_page' => 5, 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
													<?php if($cptui_social_medias->have_posts()): while ( $cptui_social_medias->have_posts() ) : $cptui_social_medias->the_post();?>
														<li><a class="<?php the_field('social_icon'); ?>" href="<?php the_field('social_media_link'); ?>" target="_blank"><i class="fa fa-<?php the_field('social_icon') ?>"></i></a></li>
													<?php endwhile; endif; ?>
												</ul>
										</div>
								</div>
								<div class="margin-45px-bottom xs-margin-25px-bottom">
										<div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Categories</span></div>
										<ul class="list-style-6 margin-50px-bottom text-small">
											<?php
											wp_list_categories( array(
												'orderby'    => 'count',
												'order'      => 'DESC',
												'show_count' => 1,
												'title_li'   => '',
												'number'     => 5,
											) );
											?>

										</ul>
								</div>


								<div class="margin-45px-bottom xs-margin-25px-bottom">
									<div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>tags cloud</span></div>
									<div class="tag-cloud">
										<?php echo get_the_tags(); ?>

									</div>
								</div>
								<div class="margin-45px-bottom xs-margin-25px-bottom">
										<div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Archive</span></div>
										<ul class="list-style-6 margin-20px-bottom text-small">
											<?php $archive_blog = array( 'type'=>'monthly', 'limit'=>'5', 'order'=>'desc', 'post_type'=>'post' ); wp_get_archives($archive_blog); ?>
										</ul>
								</div>
								<!-- <div class="margin-45px-bottom xs-margin-25px-bottom">
										<div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Newsletter</span></div>
										<div class="display-inline-block width-100">
												<form>
														<div class="position-relative">
																<input type="email" class="bg-transparent text-small no-margin border-color-extra-light-gray medium-input pull-left" placeholder="Enter your email...">
																<button type="submit" class="bg-transparent text-large btn position-absolute right-0 top-3"><i class="fa fa-envelope-o no-margin-left"></i></button>
														</div>
												</form>
										</div>
								</div> -->

						</aside>
				</div>
		</div>
</section>
<!-- end blog content section -->

</article><!-- #post-<?php the_ID(); ?> -->
