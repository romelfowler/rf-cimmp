<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CIMMP-V2
 */

?>
<section class="wow fadeIn no-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        	<header class="entry-header">
        		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

        		<?php if ( 'post' === get_post_type() ) : ?>
        		<?php endif; ?>
        	</header><!-- .entry-header -->

        	<div class="container margin-80px-bottom">
        		<?php cimmp_v2_post_thumbnail(); ?>

        	</div>
        	<div class="entry-summary">
        		<?php the_excerpt(); ?>
        	</div><!-- .entry-summary -->


        </article>


      </div>
    </div>
  </div>
</section>
