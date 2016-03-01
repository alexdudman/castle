<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Adtrak
 * @since Adtrak 1.0
 */

include ( 'wp-content/themes/adtrak/header.php' ); ?>

<article id="main" class="main">

	<h1><?php
		printf( __( 'Tag Archives: %s', 'twentyten' ), '' . single_tag_title( '', false ) . '' );
	?></h1>

<?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 get_template_part( 'loop', 'tag' );
?>

</article>

<?php include ( 'wp-content/themes/adtrak/sidebar.php' ); ?>

<?php include ( 'wp-content/themes/adtrak/footer.php' ); ?>