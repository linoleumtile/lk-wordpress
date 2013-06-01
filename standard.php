<?php
/*
Template Name: Standard
*/
get_header();
//get_sidebar();
?>
<div id="primary">
	<div id="content blog" class="container-fluid" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
  </div><!-- /#content blog-->
</div><!-- /#primary -->
<?php get_footer(); ?>