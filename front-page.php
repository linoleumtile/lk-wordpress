<?php
/*
Template Name: Home
*/
get_header();
?>

		<div id="primary">
			<div id="content" class="container-fluid" role="main">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>