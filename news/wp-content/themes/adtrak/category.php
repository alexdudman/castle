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

				<h1><?php
					printf( __( 'Category Archives: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '' . $category_description . '';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>


</article>

<?php include ( 'wp-content/themes/adtrak/sidebar.php' ); ?>

<?php include ( 'wp-content/themes/adtrak/footer.php' ); ?>