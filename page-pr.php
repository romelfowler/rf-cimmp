<?php
/**
 * Template Name: Public Relations Landing Page
 *
 * @package CIMMP-V2
 */

get_header();
?>

<!-- start portfolio section -->
<section class="wow fadeIn no-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- start filter navigation -->
                <ul class="portfolio-filter nav nav-tabs border-none portfolio-filter-tab-1 font-weight-600 alt-font text-uppercase text-center margin-80px-bottom text-small sm-margin-40px-bottom xs-margin-20px-bottom">
                    <li class="nav active"><a href="javascript:void(0);" data-filter="*" class="xs-display-inline light-gray-text-link text-very-small">All</a></li>
                    <li class="nav"><a href="javascript:void(0);" data-filter=".coverStory" class="xs-display-inline light-gray-text-link text-very-small">Cover Storys</a></li>
                    <li class="nav"><a href="javascript:void(0);" data-filter=".nonProfit" class="xs-display-inline light-gray-text-link text-very-small">Non-Profits</a></li>
                    <li class="nav"><a href="javascript:void(0);" data-filter=".features" class="xs-display-inline light-gray-text-link text-very-small">Features</a></li>
                    <li class="nav"><a href="javascript:void(0);" data-filter=".promoAwards" class="xs-display-inline light-gray-text-link text-very-small">Promotion/Awards</a></li>

                </ul>
                <!-- end filter navigation -->
            </div>
        </div>
    </div>
    <?php get_template_part( 'template-parts/pr/content', 'pr-page' ); ?>

</section>
<!-- end portfolio section -->

  <!-- end contact section -->
<?php get_footer(); ?>
