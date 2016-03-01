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

    <meta name="description" content="Bouncy castle and slide hire in the East Midlands area. Ideal for parties shows and festivals at affordable prices!" />

    <meta name="keywords" content="Castle Slides East Midlands, Bouncy Castle Hire, Nottingham, Leicester, Derby, Notts, Bouncy Slide Hire, Birthday Party Hire, Castle Donnington Market, Castle Donnington, 0789 7378934" />
    
	<?php include ("includes/core/head-includes.php"); ?>
	
</head>

<body id="<?php echo $page; ?>" class="<?php echo $subpage; ?>">

    <?php include ("includes/content/header.php"); ?>

    <section class="outer-ticks">

        <h1>Castle Slides East Midlands</h1>

        <div class="ticks container">

            <p>Page not found</p>
            <p><a href="index.php">Click here</a> to return to our home page</p>   

        </div>

    </section>

    
    <?php
        include ("includes/content/footer.php");
        include ("includes/core/footer-includes.php");
    ?>

</body>

</html>