
<h2>Upcoming Events</h2>
<?php $query = new WP_Query( array(
	                'post_type' => 'post',
	                'category_name' => 'event',
	                'orderby'  => array( 'meta_value_num' => 'DESC', 'title' => 'DESC' ),
	                'posts_per_page' => 3
	            ) );
	            
	          
	            while ($query->have_posts()) : $query->the_post(); ?>
		            <div class="home-update">
			           
			            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
			            <h4><?php echo get_post_meta(get_the_ID(), 'event_date_info', true); ?>
			            - <?php echo get_post_meta(get_the_ID(), 'event_time', true); ?></h4>
			            <p><?php echo get_post_meta(get_the_ID(), 'notes', true); ?></p>
		            </div>
		            
	            
	            <?php endwhile; ?>
