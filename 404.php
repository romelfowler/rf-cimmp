<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package CIMMP-V2
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<!-- start page not found section -->
			<section id="home" class="no-padding parallax mobile-height wow fadeIn" data-stellar-background-ratio="0.5" style="background: url('http://www.placeholder.com/800x800')">

					<div class="opacity-full bg-extra-dark-gray"></div>
					<div class="container position-relative full-screen">
							<div class="slider-typography text-center">
									<div class="slider-text-middle-main">
											<div class="slider-text-middle">
													<div class="bg-black-opacity-light width-50 center-col sm-width-80">
															<div class="padding-fifteen-all xs-padding-20px-all">
																	<span class="title-extra-large text-white font-weight-600 display-block margin-30px-bottom xs-margin-10px-bottom">404</span>
																			<div class="input-group-404 input-group margin-50px-tb xs-margin-20px-tb">
																				<?php $search = get_search_query(); $args = array( 'search' => $search ); $search_query = new WP_Query( $args ); // The Query
																					if ( $search_query->have_posts() ) {
																						_e("<h6 class='text-uppercase text-deep-pink font-weight-600 alt-font display-block margin-5px-bottom' >Are these what you are looking for? ".get_query_var('s')."</h6>");
																					        while ( $search_query->have_posts() ) { $search_query->the_post(); ?>
																					                    <li class="list-style-2">
																					                        <a class="text-white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
																					                    </li>
																					                 <?php } } else { ?>
																					        <h2 class="text-uppercase text-deep-pink font-weight-600 alt-font display-block margin-5px-bottom">Nothing Found</h2>
																					        <div class="alert alert-info">
																					          <p class='text-uppercase text-deep-pink font-weight-600 alt-font display-block margin-5px-bottom'>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
																					        </div>
																					<?php } ?>


																			</div>
																	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-transparent-white btn-medium text-extra-small border-radius-4" target="_blank"><i class="ti-arrow-left margin-5px-right no-margin-left" aria-hidden="true"></i> Back To Homepage</a>
															</div>
													</div>
											</div>
									</div>
							</div>
					</div>
			</section>
			<!-- end page not found section -->

<?php get_footer() ?>
