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

<!-- 1. Setup your wordpress installation. This includes the following:
   
   - set up your database
   - configure wordpress via wp-config.php
   - import the 'theme-unit-test-data.xml' file via the wordpress importer
   - activate the 'wordpress-starter-theme'

2. Activities (from less-advanced to more-advanced)

	1. 	Edit this index.php to be a list of posts. The unit-test data will provide 
		you with 'dummy data' to use. It should show 10 posts per page and be paginated.

	2.  Follow the unit test data's instructions and write some basic styles to cover all
		the bases. You'll see what I mean.

	3.  Build a homepage that shows the most recent 3 posts and includes a sidebar.

	4.  Create a custom post type called 'Events'. Use the Advanced Custom Fields plugin that 
		I've included in the plugins folder to create meta-data fields for each event. These
		fields should include the following.

		- Event Date
		- Event Time
		- Event Location

		Add the following events in as test data. Use your best judgement regarding date/time/location:

		- Christmas Day
		- Independence Day
		- Thanksgiving Day
		- St. Patrick's Day
		- Cinco de Mayo
		- New Year's Eve

	5.  Have the homepage sidebar show the soonest 3 events that are upcoming. Display the event and it's 
		associated data.

	6.  Include a link in the sidebar that links to an archive of all of the events, in order by date.

3.	As you're working, make sure to make commits as you work through each segment so I can follow along 
	easily in your code. If you have questions, email me at josh@newkind.com -->