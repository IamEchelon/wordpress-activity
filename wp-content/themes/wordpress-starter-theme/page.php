<?php get_header(); ?>

<!-- The Loop -->
<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>

	<!-- Page Structure on feed -->
    <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	<div class="entry">
 		<?php the_content(); ?>
 	</div>
	<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>

<?php endwhile; ?>


	<?php next_posts_link( 'Older posts' ); ?>
	<?php previous_posts_link( 'Newer posts' ); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
