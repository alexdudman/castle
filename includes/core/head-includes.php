<!-- Force IE to use latest mode  -->

<meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Meta tags -->

<?php include ($path."includes/core/meta-tags.php"); ?>

<!-- Stylesheets -->

<link href="includes/css/master.css" rel="stylesheet" media="all" />
<link rel="shortcut icon" href="favicon.ico" />

<!-- Scripts -->

<?php if ($_SERVER['SERVER_NAME'] == 'web-server' || $_SERVER['SERVER_NAME'] == '127.0.0.1') {?><script src="includes/scripts/cssrefresh.js"></script><?php } ?>

<script src="includes/scripts/modernizr.custom.js"></script>

<!-- Polyfill for Media Queries on IE8 -->
<!-- [if (lt IE 8) & (!IEMobile)]><script type="text/javascript" src="includes/scripts/respond.min.js"></script><![endif]-->

<?php include($path."includes/scripts/canonical-link.php"); ?>
<?php include($path."includes/scripts/analytics.php"); ?>