<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Adtrak
 * @since Adtrak 1.0
 */

include ( 'wp-content/themes/adtrak/header.php' ); ?>

	  <article id="main" class="main">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div <?php //post_class(); ?>class="post" id="post-<?php the_ID(); ?>">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<?php twentyten_posted_on(); ?>
			<?php the_excerpt(); ?>
		</div>
	
		<?php endwhile; ?>
	
		<div class="navigation">
			<div class="next-posts"><?php next_posts_link(); ?></div>
			<div class="prev-posts"><?php previous_posts_link(); ?></div>
		</div>
	
		<?php else : ?>
	
		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<h1>No news posts found</h1>
			<p>There are currently no news posts, please check back soon for updates.</p>
		</div>
	
		<?php endif; ?>
		
	</article>
	
<?php include ( 'wp-content/themes/adtrak/sidebar.php' ); ?>

<?php include ( 'wp-content/themes/adtrak/footer.php' ); ?>