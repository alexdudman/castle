<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Adtrak
 * @since Adtrak 1.0
 */

include ( 'wp-content/themes/adtrak/header.php' ); ?>


	<div id="main">

		<h1>Sorry!</h1>
   
			<p>This page can not be found. Please <a href="<?php echo home_url(); ?>">click here</a> to return to the homepage.</p>
						   
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	
	</div>

<?php include ( 'wp-content/themes/adtrak/sidebar.php' ); ?>

<?php include ( 'wp-content/themes/adtrak/footer.php' ); ?>