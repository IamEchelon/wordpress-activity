<?php get_header(); ?>


<div class="row">
	<div class="col-md-7">
	<?php $query = new WP_Query( array(
	                'post_type' => 'post',
	                'posts_per_page' => 3
	            ) );
	            
	           
	            while ($query->have_posts()) : $query->the_post(); ?>
		            <div class="home-update">
			            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
			            <p><?php the_excerpt();?></p> 
			            <h5><?php the_date( 'j F' ); ?></h5>
		            </div>
	            
	            <?php endwhile; ?>
	</div>            
	
	<div class="col-md-3">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
