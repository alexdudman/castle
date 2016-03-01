<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Adtrak
 * @since Adtrak 1.0
 */
?>

            
        </div>
    
    </section>
    
    <?php
        include ($path."includes/content/footer.php");
        include ($path."includes/core/footer-includes.php");
    ?>

    <?php wp_footer(); ?>

</body>

</html>