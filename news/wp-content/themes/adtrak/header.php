<?php

	global $path; 
	
	if($_SERVER['HTTP_HOST'] == "localhost:7777" || $_SERVER['HTTP_HOST'] == "demo.adtrakdesign.co.uk" || strstr($_SERVER['HTTP_HOST'],"adtrakdemo.co.uk")){
		$path	=	$_SERVER['DOCUMENT_ROOT']."/castle/";
	} else{
		$path	=	$_SERVER['DOCUMENT_ROOT']."/";
	}

	include($path."includes/scripts/application.php");
	include($path."site_specific/defines.php"); 
	$page = "news";
	$subpage = "news";

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_head();
?>
		
	<?php if ($_SERVER['HTTP_HOST'] == "localhost:7777" || $_SERVER['HTTP_HOST'] == "demo.adtrakdesign.co.uk" || strstr($_SERVER['HTTP_HOST'],"adtrakdemo.co.uk")): ?>
		<base href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/castle/" />
	<?php else: ?>
		<base href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/" />
	<?php endif; ?>
		
	<?php include($path."includes/core/head-includes.php"); ?>

    
</head>

<body <?php body_class(); ?> id="<?php echo $page; ?>">

	<!-- WS or Live version warning -->
	<?php if ( $_SERVER['HTTP_HOST'] == "localhost:7777" ) : ?>	
		<div class="wsDemoVersion">You are viewing the web-server version, which connects to the web-server database. Do not make database changes here as they will not be carried to the live version.</div>
	<?php endif; ?>
	<!-- End WS or Live version warning -->
	
	<?php
	    include ($path."includes/content/header.php");
	    include ($path."includes/content/nav.php");
	?>

	<section class="outer-main-aside">

		<div class="container">