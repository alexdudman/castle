<?php 
$path_parts = pathinfo("http://{$_SERVER["HTTP_HOST"]}{$_SERVER["PHP_SELF"]}");
if($page=="index"):?>
<link rel="canonical" href="<?php echo "http://{$_SERVER["HTTP_HOST"]}/";?>" />
<?php else: ?>
<link rel="canonical" href="<?php echo $path_parts['dirname'] . "/" . $path_parts['filename']; ?>" />
<?php endif;?>
