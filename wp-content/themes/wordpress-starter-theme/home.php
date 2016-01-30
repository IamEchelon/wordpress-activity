<?php get_header(); ?>


<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>
    

    <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
    <div class="entry">
        <?php the_content(); ?>
    </div>


<?php endwhile; ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>