<?php

// *********** CONFIG OPTIONS ***********

$emailFrom = $companyEmailAddress;
$emailTo = $companyEmailAddress;

$emailSubject = "Adtrak Website - Callback Request";

$replyTo = $companyEmail;

$submitInput = 'submit_callback_form';

$destination = 'thankyou-callback';

// Required fields for PHP validation
$requiredArray = array(
  'Callback_Name'	  	=>  'Please fill in your name',
  'Callback_Telephone'  =>  'Please supply your phone number',
  'Callback_Time'	 	=>  'Please choose a callback time',
);

// Input names in this array will not be sent in the email
$excludeArray = array('botBuster', 'submit_callback_form');

// What variable to put errors into
$errorVar = 'callbackErrors';

// *********** END OF CONFIG ***********

include(dirname(__FILE__) . '/callback-form-mailer.php');

?>
<div class="container">

<form novalidate class="callback-form formular" method="post" action="#results">

<p class="title">Request A Callback</p>

<!-- PHP Error Output -->
<?php if (isset($callbackErrors) && !empty($callbackErrors)): ?>
	<?php echo $callbackErrors; ?>
<?php endif; ?>
<!-- End PHP Error Output -->

	<fieldset class="botBuster">
		<label>This is to check you are not spamming, please do NOT fill this field in!<input class="text-input botBuster" type="text" name="botBuster" size="1" /></label>
	</fieldset>

	<fieldset>
		<input placeholder="Name:" class="validate[required,length[0,100]] text-input" type="text" name="Callback_Name" id="Callback_Name" />
	</fieldset>

	<fieldset>
		<input placeholder="Number:" class="validate[custom[telephone]] text-input" type="tel" pattern="\d*" name="Callback_Telephone"  id="Callback_Telephone" />
	</fieldset>

	<fieldset>
		<select name="Callback_Time" class="dropdown">
			<option selected="selected" value="">Select a time...</option>
			<option>As soon as possible</option>
			<option>Today - Morning</option>
			<option>Today - Afternoon</option>
			<option>Tomorrow - Morning</option>
			<option>Tomorrow - Afternoon</option>
		</select>
	</fieldset>

	<fieldset>
	<input name="submit_callback_form" class="submit" type="submit" value="Request" />
	</fieldset>

	<div class="clearfix"></div>

</form>

</div>