<?php get_header(); ?>

<!-- The Loop -->
<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>

	<!-- Page Structure on feed -->
	

<?php endwhile; ?>


	<?php next_posts_link( 'Older posts' ); ?>
	<?php previous_posts_link( 'Newer posts' ); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
