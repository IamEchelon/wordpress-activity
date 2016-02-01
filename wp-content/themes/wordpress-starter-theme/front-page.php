<?php get_header(); ?>


<?php $query = new WP_Query( array(
                'post_type' => 'post',
                'posts_per_page' => 2
            ) );
            while ($query->have_posts()) : $query->the_post(); ?>
            <li class="home update"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> - <?php the_date( 'j F' ); ?></a></li>
            <?php endwhile; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
