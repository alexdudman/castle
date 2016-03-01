<?php

$companyName 			= 'Castle Slides East Midlands';

$companyURL				= 'www.castleslides.co.uk';
$logoURL				= "http://" . $companyURL . "/images/layout/logo.jpg";

$companyEmailAddress	= 'Claytonscatering@yahoo.co.uk';
// Do not output this variable, use $companyEmail instead

$companyRegNumber 		= '123456789';
$companyVATNumber 		= '987654321';

$addressStreet			= "House Number";
$addressStreet2			= "Street";
$addressLocality		= "City";
$addressRegion			= "County";
$addressPostcode		= "PST_CDE";

$location 				= "The UK";
$phonetag 				= "Call us FREE on";
$phonenumber 			= "07897 378 934";

// To output the address, use $companyAddressInline (for inline) or $companyAddressStacked (for stacked)

// Do not edit below this line

$companyEmail 			= '<a href="mailto:'.$companyEmailAddress.'">'.$companyEmailAddress.'</a>';

$page = $subpage		= pagevar();
$pagekw   				= ucfirst(str_replace("-", " ", $subpage));

$sCompanyName			= '<span itemprop="name">'.$companyName.'</span>,';
$sAddressStreet			= '<span itemprop="streetAddress">'.$addressStreet.'</span>,';
$sAddressStreet2		= '<span itemprop="streetAddress">'.$addressStreet2.'</span>,';
$sAddressLocality		= '<span itemprop="addressLocality">'.$addressLocality.'</span>,';
$sAddressRegion			= '<span itemprop="addressRegion">'.$addressRegion.'</span>,';
$sAddressPostcode		= '<span itemprop="postalCode">'.$addressPostcode.'</span>';

$sPhoneNumber			= '<span itemprop="telephone">' .$phonenumber. '</span>';
$scompanyWeb			= '<span itemprop="url">' .$companyWeb. '</span>';
$sLogoURL 				= '<span><img itemprop="logo" style="display:none;" src='.$logoURL.' alt="' .$companyName.' Logo" /></span>';

$companyAddressInline	=
'<span itemprop="address" itemscope itemtype="http://schema.org/LocalBusiness"><span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">' . $sAddressStreet . '&nbsp;' . $sAddressLocality . '&nbsp;' . $sAddressRegion . '&nbsp;' . $sAddressPostcode . '</span></span>';

$companyAddressStacked	=
'<span itemprop="address" itemscope itemtype="http://schema.org/LocalBusiness">' . $sCompanyName .'<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">' .'<br />'. $sAddressStreet . '<br />'. $sAddressLocality . '<br />'. $sAddressRegion .'<br />'.  $sAddressPostcode . '</span></span>';

?>
