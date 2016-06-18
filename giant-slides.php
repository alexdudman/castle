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

        <h1>Giant Slides East Midlands</h1>

        <div class="ticks container">

            <ul>
                <li>Ideal for birthdays, shows &amp; festivals and more</li>
                <li>Bouncy Castle available, ideal for garden parties</li>
                <li>Insured and trained staff</li>
                <li>Affordable prices!</li>
            </ul>       

        </div>

    </section>

    <section class="outer-main-aside">

        <div class="container">

            <article id="main" class="wide-main">

                <div class="owl-carousel">
                    <div class="item"><img src="images/imgmain/frozenslide.jpg" alt="Image of castle slide"></div>
                    <div class="item"><img src="images/imgmain/slide.jpg" alt="Image of castle slide"></div>
                    <div class="item"><img src="images/imgmain/frozenslide3.jpg" alt="Image of castle slide"></div>
                </div>
                
                <h1>Giant Slides</h1>

                <p>Castle slides operate through out the East Midlands offering excellent value for hiring out this gigantic 25 foot high slide. We are also available for festivals, private parties, fairs, special occasions, weddings and birthdays.</p>

                <p>We are fully tested and up to date, our staff are fully trained and we will deliver your slide on time.</p>   

                <h2>Frozen Themed Slide</h2>

                <p>We now have a brand new frozen themed giant slide available for the 2016 season!</p>

                <p>Why not come and talk to us at Wellsbourne market every Saturday or at Castle Donnington market every Sunday?</p>

                <p class="call-cta">Call the friendly team today! <span>07897 378 934</span></p>


            </article>

        </div>

    </section>

    
    <?php
        include ("includes/content/footer.php");
        include ("includes/core/footer-includes.php");
    ?>

</body>

</html>