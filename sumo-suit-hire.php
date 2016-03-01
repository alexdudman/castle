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

        <h1>Sumo Suit Hire East Midlands</h1>

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

                <img class="mainimg" src="images/imgmain/sumo.jpg" alt="Image of castle slide">
                
                <h1>Sumo Suit Hire</h1>

                <p>Hire for £55 a day, ideal for parties, fun days and events, for indoor use or on grass, helmets and mats included, 18ft x 18ft space required for set up.</p>

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