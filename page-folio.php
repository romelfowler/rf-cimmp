<?php
/**
 * Template Name: Portfolio Landing Page
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
                    <li class="nav"><a href="javascript:void(0);" data-filter=".brand" class="xs-display-inline light-gray-text-link text-very-small">Brand Management</a></li>
                    <li class="nav"><a href="javascript:void(0);" data-filter=".digital" class="xs-display-inline light-gray-text-link text-very-small">Digital</a></li>
                    <li class="nav"><a href="javascript:void(0);" data-filter=".logo" class="xs-display-inline light-gray-text-link text-very-small">Logo</a></li>
                    <li class="nav"><a href="javascript:void(0);" data-filter=".print" class="xs-display-inline light-gray-text-link text-very-small">Print</a></li>
                </ul>
                <!-- end filter navigation -->
            </div>
        </div>
    </div>
    <?php get_template_part( 'template-parts/folio-parts/content', 'folio' ); ?>
  
</section>
<!-- end portfolio section -->

  <!-- end contact section -->
<?php get_footer(); ?>
