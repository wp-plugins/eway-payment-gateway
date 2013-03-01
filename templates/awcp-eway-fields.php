<?php
/*
If you want to customise the checkout form, copy this file into your theme folder and edit it there.
Take care to keep the field names the same, or your checkout form won't charge credit cards!

* $checkoutURL = where to post the checkout form data
* $optMonths = options for drop-down list of months of the year
* $optYears = options for drop-down list of current year + 15

*/
?>

<form action="<?php echo $checkoutURL; ?>" method="post" id="awpcp-eway-checkout">

<fieldset>

	<p class="form-row form-row-first">
		<label>Credit Card Number <span class='required'>*</span></label>
		<input type='text' value='' name='eway_card_number' id='eway_card_number' />
	</p>

	<p class="form-row form-row-last">
		<label>Card Holder's Name <span class='required'>*</span></label>
		<input type='text' value='' name='eway_card_name' id='eway_card_name' />
	</p>

	<div class="clear"></div>

	<p class="form-row form-row-first">
		<label>Credit Card Expiry <span class='required'>*</span></label>
		<select name='eway_expiry_month'>
			<option value="">Month</option>
			<?php echo $optMonths; ?>
		</select>
		<select name='eway_expiry_year'>
			<option value="">Year</option>
			<?php echo $optYears; ?>
		</select>
	</p>

	<p class="form-row form-row-last">
		<label id='eway_cvn'>CVN <span class='required'>*</span></label>
		<input type='text' size='4' maxlength='4' value='' name='eway_cvn' id='eway_cvn' />
	</p>

	<div class="clear"></div>

	<p><input type="submit" value="Make payment" /></p>

</fieldset>

</form>

<script>
jQuery(function($) {

	$("#awpcp-eway-checkout").submit(function(event) {
		var errors = [];

		if ($("input[name='eway_card_number']").val().trim() == "")
			errors.push("Credit Card Number is missing");

		if ($("input[name='eway_card_name']").val().trim() == "")
			errors.push("Card Holder's Name is missing");

		if ($("select[name='eway_expiry_month']").val() == "" || $("select[name='eway_expiry_year']").val() == "")
			errors.push("Credit Card Expiry is missing");

		if ($("input[name='eway_cvn']").val().trim() == "")
			errors.push("CVN is missing");

		if (errors.length > 0) {
			event.preventDefault();
			alert(errors.join("\n"));
		}
	});

});
</script>
