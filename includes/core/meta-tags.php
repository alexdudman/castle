<?php /* ----------------------------------

How to use the new meta tags:
ALl your meta tags are now on this page. You need not create new folders or files.
The old "general" meta tags are listed last; these will replicate across all pages.
The switch below will look at the $subpage variable set on each page; the $subpage
variable will automatically set to the page name unless overwritten.
So long as the $subpage variable is correctly set, it should call the correct meta tags.
e.g index.php will usually be "index", loft-conversions.php will usually be "loft-conversions"
There is a fallback called "default", which, if no meta tag is found, the page 
will fallback to.
To create a new switch case, copy this:

    case "subpageName": ?>

		<meta name="description" content="" />
		<meta name="keywords" content="" />

	<?php break;

...and paste it after any <?php break

Always leave the default at the end.

Happy SEOing :)

-------------------------- */ ?>

<?php switch ($subpage) {

    case "index": ?>
    
    	<title><?php echo $companyName; ?></title>
		<meta name="description" content="Bouncy castle and slide hire in the East Midlands area. Ideal for parties shows and festivals at affordable prices!" />
		<meta name="keywords" content="Castle Slides East Midlands, Bouncy Castle Hire, inflatable, Nottingham, Leicester, Derby, Notts, Bouncy Slide Hire, Birthday Party Hire, Castle Donnington Market, Castle Donnington, 0789 7378934" />

	<?php break;

    case "castle-slide": ?>
    
    	<title><?php echo $companyName; ?></title>
		<meta name="description" content="Inflatable bouncy slide hire in the East Midlands area. Hiring bouncy castles in Nottingham, Castle Donnington, Derby" />
		<meta name="keywords" content="Inflatable Slide Hire, Inflatable, Inflatable Slide, East Midlands, Bouncy Castle Hire, inflatable, Nottingham, Leicester, Derby, Notts, Bouncy Slide Hire, Birthday Party Hire, Castle Donnington Market, Castle Donnington, Party Hire, childrens party, 0789 7378934" />

	<?php break;

    case "bouncy-castle": ?>
    
    	<title><?php echo $companyName; ?></title>
		<meta name="description" content="Bouncy castle hire in the East Midlands area, including Nottingham and Derby. Ideal for parties shows and festivals at affordable prices!" />
		<meta name="keywords" content="Nottingham, cheap, bouncy castle, inflatable, castle, childrens party, hire" />

	<?php break;

    case "sumo-suit-hire": ?>
    
    	<title><?php echo $companyName; ?></title>
		<meta name="description" content="Sumo suit hire in the East Midlands area, including Nottingham and Derby. Sumo suits ideal for birthday parties, childrens parties and corporate days" />
		<meta name="keywords" content="Nottingham, cheap, sumo suit, sumo suit hire, party hire" />

	<?php break;

    case "contact": ?>
    
    	<title>Contact Us - <?php echo $companyName; ?></title>
		<meta name="description" content="Contact Castle Slides East Midlands today for cheap party hire around Nottingham and Derby" />
		<meta name="keywords" content="Castle Slides East Midlands, Bouncy Castle Hire, inflatable, Nottingham, Leicester, Derby, Notts, Bouncy Slide Hire, Birthday Party Hire, Sumo suit hire, Castle Donnington Market, Castle Donnington, 0789 7378934" />

	<?php break;

	/* Always leave default at the end. */

    default : ?>

    	<title><?php echo $companyName; ?></title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />

	<?php break;

}?>

		<meta charset="UTF-8" />

		<meta name="author" content="Adtrak LLP (www.adtrak.co.uk)" />

		<meta name="revisit-after" content="15 days" />

		<meta name="robots" content="index, follow" />