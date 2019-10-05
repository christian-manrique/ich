<?php get_header(); ?>
 
 	
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(__('(more...)')); ?>
 <?php endwhile; else: ?>
<?php endif; ?>

 
<?php //get_sidebar(); ?>


<?php get_footer(); ?>