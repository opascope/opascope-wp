
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
	function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500); 
</script>
<script>
	function validate() {
		document.querySelector('#formBtn').disabled = false;
	}

	function submitForm() {
		var form = document.getElementById("salesforce_form");
		var returl = document.getElementById("returl");
		var email = document.getElementById('email').value;
		returl.value += "?businessEmail=" + email;

		validate();

	  return true;  // return false to not submit the form
	}

	function timestamp() { 
		var response = document.getElementById("g-recaptcha-response");
		if (response == null || response.value.trim() == "") {
			var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());
			document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems);
		}
	} 
	setInterval(timestamp, 500); 

</script>
<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <FORM> element to your page.             -->
<!--  ----------------------------------------------------------------------  -->

<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" id="salesforce_form">
	<input type=hidden name='captcha_settings' value='{"keyname":"opascope","fallback":"true","orgId":"00D5e000002Gmku","ts":""}'>
	<input type="hidden" name="utm_campaign_first__c" value="">
	<input type="hidden" name="utm_source_first__c" value="">
	<input type="hidden" name="utm_medium_first__c" value="">
	<input type="hidden" name="utm_term_first__c" value="">
	<input type="hidden" name="utm_content_first__c" value="">
	<input type="hidden" name="utm_campaign_last__c" value="">
	<input type="hidden" name="utm_source_last__c" value="">
	<input type="hidden" name="utm_medium_last__c" value="">
	<input type="hidden" name="utm_term_last__c" value="">
	<input type="hidden" name="utm_content_last__c" value="">
	<input type="hidden" name="gclid__c" value="">
	<input type="hidden" name="ga_id__c" value="">
	<input type=hidden name="oid" value="00D5e000002Gmku">
	<input type=hidden name="retURL" value="https://opascope.com/thank-you/">

	<!--  ----------------------------------------------------------------------  -->
	<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
	<!--  these lines if you wish to test in debug mode.                          -->
	<!--  <input type="hidden" name="debug" value=1>                              -->
	<!--  <input type="hidden" name="debugEmail" value="max@opascope.com">        -->
	<!--  ----------------------------------------------------------------------  -->

	<label for="email">Business Email*</label><input id="email" maxlength="80" name="email" size="20" type="email" required><br>

	<label for="00N5e00000dTfFn">How Did You Hear About Us*</label><input  id="00N5e00000dTfFn" class="inputFieldTwo" maxlength="255" name="00N5e00000dTfFn" size="20" type="text" required /><br>

	<label for="00N5e00000dTfFs">Estimated Monthly Media Spend*</label><input  id="00N5e00000dTfFs" class="inputFieldTwo" maxlength="255" name="00N5e00000dTfFs" size="20" type="text" required /><br><br>

	<input  id="00NUU0000004Pav" class="consent" name="00NUU0000004Pav" type="checkbox" value="1"/><label for="00NUU0000004Pav"><span data-nosnippet>I consent to receive marketing communication emails from Opascope using the contact details I have provided.</span></label><br>

	<input type="hidden" id="lead_source" name="lead_source" value="">
	<input type="hidden" id="00N5e00000dU1MC" name="00N5e00000dU1MC" value="">
	<input  id="00N5e00000dU0pl" name="00N5e00000dU0pl" type="hidden" value="" />
	<div class="g-recaptcha" data-sitekey="6LdtoxkpAAAAAG9AU4d7EbvpirUwiGPUi9JpRbOx" data-callback="validate"></div>

	<input id="formBtn" type="submit" name="submit" onClick="submitForm()" disabled>
</form>