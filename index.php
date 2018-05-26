<?php
get_header(); ?>
	<div id="content" class="small-12 large-8 cell" role="main">
    	<?php if (function_exists('yoast_breadcrumb')) { yoast_breadcrumb('<nav aria-label="You are here:" role="navigation"><ul class="breadcrumbs">','</ul></nav>'); } ?>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
			<?php wpforge_content_nav( 'nav-below' ); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; // end have_posts() check ?>
	</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
