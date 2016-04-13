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

    <section class="outer-runner">

        <div class="runner">

            <img class="imgmain" src="images/imgmain/runner-mobile.jpg" alt="Image of <?php echo $pagekw; ?>" />

        </div>

    </section>

    <section class="outer-ticks">

        <h1>Bouncy Castle East Midlands</h1>

        <div class="ticks container">

            <ul>
                <li>Ideal for birthdays, shows &amp; festivals and more</li>
                <li>12ft x 12ft bouncy castle for hire</li>
                <li>Insured and trained staff</li>
                <li>Affordable prices!</li>
            </ul>       

        </div>

    </section>

    <section class="outer-main-aside">

        <div class="container">

            <article id="main" class="wide-main">

                <?php include ("includes/forms/contact-form.php"); ?>

                <div class="owl-carousel">
                    <div class="item"><img src="images/imgmain/slide.jpg" alt="Image of castle slide"></div>
                    <div class="item"><img src="images/imgmain/frozenslide.jpg" alt="Image of castle slide"></div>
                </div>

            </article>

        </div>

    </section>

    
    <?php
        include ("includes/content/footer.php");
        include ("includes/core/footer-includes.php");
    ?>

</body>

</html>