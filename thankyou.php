<?php

    include("includes/scripts/application.php");
    include("site_specific/defines.php");
    //$page = "custom-parent";
    //$pagekw = "Custom Page Keyword";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title><?php echo $companyName; ?> - Bouncy castle and slide hire in the East Midlands area</title>
    
	<?php include ("includes/core/head-includes.php"); ?>
	
</head>

<body id="<?php echo $page; ?>" class="<?php echo $subpage; ?>">

    <?php   
            include ("includes/content/header.php");
            include ("includes/content/runner.php"); 
    ?>


    <section class="outer-main-aside">

        <div class="container">

            <article id="main" class="wide-main">

                
                <h1>Thank you!</h1>

                <p>Your message has now been delivered. We aim to respond as quickly as possible.</p>

            </article>

        </div>

    </section>

    
    <?php
        include ("includes/content/footer.php");
        include ("includes/core/footer-includes.php");
    ?>

</body>

</html>