<?php

// Initialise the content string
$mailContent = '';	

// check to see if a form has been submitted
if (!empty($_POST[$submitInput])) {

	// check all required fields are present
	foreach ($requiredArray as $key => $value) {
		if (!isset($_POST[$key]) || (isset($_POST[$key]) && !strlen($_POST[$key]))) {
			if (!isset($$errorVar)) {
				$$errorVar = '<div id="results"><ul>';
			}
      $$errorVar .= '<li>' . $value . '</li>';
		}
	}
	
	// Check that the bot buster is not present
	if (!empty($_POST['botBuster'])) {
		if (!isset($$errorVar)) {
			$$errorVar = '<div id="results"><ul>';
		}
		$$errorVar .= "<li>We are very sorry, but there was an error sending your enquiry. Please contact us by telephone.</li>";
	}
	// output the errors if they exist
	if (isset($$errorVar)) {
		$$errorVar .= '</ul></div>';
	}
	
	// otherwise just carry on with the script
	else {
                
 		// Set the reply-to email address to be what was posted, if it was set
		if (!empty($_POST[$replyTo])) {
			$replyTo = $_POST[$replyTo];
		}
                $mailContent  = "<html><body style=\"font-family:Arial, sans-serif; font-size:12px; padding: 0; margin: 0px; color:#555;\">\n<h1 style=\"font-family:Arial, sans-serif; font-size: 16px;\">$companyName $emailSubject</h1><p>Please ensure you contact the customer at the requested time.</p><table style=\"padding:10px; margin:0; width: 400px;\" >";
                
		// loop through post keys //
		foreach ($_POST as $key => $value) {
		
			// Make sure this key is not to be excluded
			if (!in_array($key, $excludeArray)) {
				// Normal form field
				if (!is_array($value)) {
					// ereg_replace(" $value", "", ereg_replace("_"," ",ucfirst($key)))
					$i = str_replace("_"," ",ucfirst($key));
					$mailContent .= "<tr style=\"border-bottom: 1px solid #ccc;\">";
					$mailContent .= "<td valign=\"top\" style=\"width: 160px; font-family:Arial, sans-serif; padding:8px 10px; margin:0; display:block; font-size:12px;\"><span style=\"width: 160px; display: block; font-family: Arial; font-size: 12px;\"><strong>". str_replace(" $value"," ",$i) ."</strong></span></td>\n";
					
					$mailContent .= "<td valign=\"top\" style=\"width: 300px; display:block; font-family:Arial, sans-serif; font-size: 12px; padding:8px 10px;margin:0;\"><span style=\"width: 300px; display: block; font-family: Arial; font-size: 12px;\">".$value."</span></td>\n";
					$mailContent .= "</tr>";    
                                        
				}
			}
		}
                $mailContent .= "</table><p style=\"display: block; font-family: Arial; font-size: 12px;\">This email has come from your <a href=\"http://www.adtrak.co.uk\">Adtrak</a> Website</p></body></html>";
	
		// Protect against header injection
		// First URL decode everything
		$emailTo = urldecode($emailTo);
		$emailFrom = urldecode($emailFrom);
		$emailSubject = urldecode($emailSubject);
    	$replyTo = urldecode($replyTo);
		
		// Now check to ensure no carriage returns or linefeeds
		if (eregi("(\r|\n)", $emailTo)) {
			die("Header Injection");
		}
		if (eregi("(\r|\n)", $emailFrom)) {
			die("Header Injection");
		}
		if (eregi("(\r|\n)", $emailSubject)) {
			die("Header Injection");
		}
		if (eregi("(\r|\n)", $replyTo)) {
			die("Header Injection");
		}

		// Set the mail headers
		$emailHeaders  = 'MIME-Version: 1.0' . "\r\n";
        $emailHeaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$emailHeaders .= 'From: ' . $emailFrom . "\r\n";
		$emailHeaders .= 'Reply-To: ' . $replyTo . "\r\n";
		$emailHeaders .= 'X-Mailer: PHP/' . phpversion();
		
		// Actually send the mail
		if (mail($emailTo, $emailSubject, $mailContent, $emailHeaders)) {
			header('Location: '. $destination);
		}
		else {
			$$errorVar = '<div id="results"><ul><li>We are very sorry, but there was an error sending your enquiry. Please contact us by telephone.</li></ul></div>';
		}
	
	}

}

?>