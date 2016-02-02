<?php get_header(); ?>

<!-- The Loop -->
<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>

	<!-- Page Structure on feed -->
	<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	<p><?php the_content(); ?></p>

<?php endwhile; ?>

	<div class="page-jump">
		<?php next_posts_link( 'Older posts' ); ?>
		<?php previous_posts_link( 'Newer posts' ); ?>
	</div>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
