<?php
/**
 * Template Name: Static Page
 *
 * A custom page template with Static Sidebar
 *
 * @package WordPress
 * @subpackage Adtrak
 * @since Adtrak 1.0
 */

include ( 'wp-content/themes/adtrak/header.php' ); ?>

<?php include ( 'wp-content/themes/adtrak/mainrunner.php' ); ?>


<article id="main" class="main">

<?php /*----Loop to call in content from WYSIWIG------?><?php */?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

<?php endwhile; ?>


</article>

<?php include ( 'wp-content/themes/adtrak/sidebar.php' ); ?>

<?php include ( 'wp-content/themes/adtrak/footer.php' ); ?>