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

                <img class="mainimg" src="images/imgmain/castle.jpg" alt="Image of castle slide">
                
                <h1>Bouncy Castle Hire</h1>

                <p>Our 12ft x 12ft bouncy castle is now also available for hire! This is ideal for garden parties. Rain? What rain! Our bouncy castle comes with attachable rain cover to keep your children happy when you cant count on the weather.</p>

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