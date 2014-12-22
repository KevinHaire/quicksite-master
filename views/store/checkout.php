<div class="checkoutContainer">
	<form id="checkoutForm" action="">
		<h2>Billing Information</h2>
			<div class="billingInformation">
				<input required="" id="firstName" type="text" placeholder="First Name">
				<input required="" id="lastName" type="text" placeholder="Last Name">
				<input required="" id="email" type="email" placeholder="E-Mail">
				<input id="company" type="text" placeholder="Company">
				<input required="" id="address1" type="text" placeholder="Address">
				<input id="address2" type="text" placeholder="Address 2">
				<select required="" id="country">
					<option selected="" disabled="">Country</option>
					<option value="CA">Canada</option>
					<option value="US">United States</option>
					<option value="AI">Anguilla</option>
					<option value="AR">Argentina</option>
					<option value="AU">Australia</option>
					<option value="AT">Austria</option>
					<option value="BE">Belgium</option>
					<option value="BR">Brazil</option>
					<option value="CL">Chile</option>
					<option value="CN">China</option>
					<option value="CR">Costa Rica</option>
					<option value="CY">Cyprus</option>
					<option value="CZ">Czech Republic</option>
					<option value="DK">Denmark</option>
					<option value="DO">Dominican Republic</option>
					<option value="EC">Ecuador</option>
					<option value="EE">Estonia</option>
					<option value="FI">Finland</option>
					<option value="FR">France</option>
					<option value="DE">Germany</option>
					<option value="GR">Greece</option>
					<option value="HK">Hong Kong</option>
					<option value="HU">Hungary</option>
					<option value="IS">Iceland</option>
					<option value="IN">India</option>
					<option value="IE">Ireland</option>
					<option value="IL">Israel</option>
					<option value="IT">Italy</option>
					<option value="JM">Jamaica</option>
					<option value="JP">Japan</option>
					<option value="LV">Latvia</option>
					<option value="LT">Lithuania</option>
					<option value="LU">Luxembourg</option>
					<option value="MY">Malaysia</option>
					<option value="MT">Malta</option>
					<option value="MX">Mexico</option>
					<option value="NL">Netherlands</option>
					<option value="NZ">New Zealand</option>
					<option value="">Norway</option>
					<option value="PL">Poland</option>
					<option value="PT">Portugal</option>
					<option value="SG">Singapore</option>
					<option value="SK">Slovakia</option>
					<option value="SI">Slovenia</option>
					<option value="ZA">South Africa</option>
					<option value="KR">South Korea</option>
					<option value="ES">Spain</option>
					<option value="SE">Sweden</option>
					<option value="CH">Switzerland</option>
					<option value="TW">Taiwan</option>
					<option value="TH">Thailand</option>
					<option value="TR">Turkey</option>
					<option value="GB">United Kingdom</option>
					<option value="UY">Uruguay</option>
					<option value="VE">Venezuela</option>
				</select>
				<select id="province">
					<option selected="" disabled="">Province/State</option>
					<option value="AB">Alberta</option>
					<option value="BC">British Columbia</option>
					<option value="MB">Manitoba</option>
					<option value="NB">New Brunswick</option>
					<option value="NL">Newfoundland</option>
					<option value="NT">Northwest Territories</option>
					<option value="NS">Nova Scotia</option>
					<option value="NU">Nunavut</option>
					<option value="ON">Ontario</option>
					<option value="PE">Prince Edward Island</option>
					<option value="QC">Quebec</option>
					<option value="SK">Saskatchewan</option>
					<option value="YT">Yukon Territory</option>
				</select>
				<input required="" id="city" type="text" placeholder="City">
				<input required="" id="postal" type="text" placeholder="Zip/Postal Code">
				<input required="" id="phone" type="phone" placeholder="Phone">
			</div>

			<h2>Shipping Information</h2>
			<span>Pick-up in store</span>
			<input id="pickUp" type="checkbox" name="pickUp" value="0">
			<div class="sameAsBilling">
				<span>Same as billing</span>
				<input id="shipping_same_as_billing" type="checkbox" name="shipping_same_as_billing" value="0">
			</div>
			<br>
			<div class="shippingInformation">
				<input class="required" required="" id="ship_firstName" type="text" placeholder="First Name">
				<input class="required" required="" id="ship_lastName" type="text" placeholder="Last Name">
				<input class="required" required="" id="ship_email" type="email" placeholder="E-Mail">
				<input id="ship_company" type="text" placeholder="Company">
				<input class="required" required="" id="ship_address1" type="text" placeholder="Address">
				<input id="ship_address2" type="text" placeholder="Address 2">
				<select class="required" required="" id="ship_country">
					<option selected="" disabled="">Country</option>
					<option value="CA">Canada</option>
					<option value="US">United States</option>
					<option value="AI">Anguilla</option>
					<option value="AR">Argentina</option>
					<option value="AU">Australia</option>
					<option value="AT">Austria</option>
					<option value="BE">Belgium</option>
					<option value="BR">Brazil</option>
					<option value="CL">Chile</option>
					<option value="CN">China</option>
					<option value="CR">Costa Rica</option>
					<option value="CY">Cyprus</option>
					<option value="CZ">Czech Republic</option>
					<option value="DK">Denmark</option>
					<option value="DO">Dominican Republic</option>
					<option value="EC">Ecuador</option>
					<option value="EE">Estonia</option>
					<option value="FI">Finland</option>
					<option value="FR">France</option>
					<option value="DE">Germany</option>
					<option value="GR">Greece</option>
					<option value="HK">Hong Kong</option>
					<option value="HU">Hungary</option>
					<option value="IS">Iceland</option>
					<option value="IN">India</option>
					<option value="IE">Ireland</option>
					<option value="IL">Israel</option>
					<option value="IT">Italy</option>
					<option value="JM">Jamaica</option>
					<option value="JP">Japan</option>
					<option value="LV">Latvia</option>
					<option value="LT">Lithuania</option>
					<option value="LU">Luxembourg</option>
					<option value="MY">Malaysia</option>
					<option value="MT">Malta</option>
					<option value="MX">Mexico</option>
					<option value="NL">Netherlands</option>
					<option value="NZ">New Zealand</option>
					<option value="">Norway</option>
					<option value="PL">Poland</option>
					<option value="PT">Portugal</option>
					<option value="SG">Singapore</option>
					<option value="SK">Slovakia</option>
					<option value="SI">Slovenia</option>
					<option value="ZA">South Africa</option>
					<option value="KR">South Korea</option>
					<option value="ES">Spain</option>
					<option value="SE">Sweden</option>
					<option value="CH">Switzerland</option>
					<option value="TW">Taiwan</option>
					<option value="TH">Thailand</option>
					<option value="TR">Turkey</option>
					<option value="GB">United Kingdom</option>
					<option value="UY">Uruguay</option>
					<option value="VE">Venezuela</option>
				</select>
			
				<select id="ship_province">
					<option selected="" disabled="">Province/State</option>
					<option value="AB">Alberta</option>
					<option value="BC">British Columbia</option>
					<option value="MB">Manitoba</option>
					<option value="NB">New Brunswick</option>
					<option value="NL">Newfoundland</option>
					<option value="NT">Northwest Territories</option>
					<option value="NS">Nova Scotia</option>
					<option value="NU">Nunavut</option>
					<option value="ON">Ontario</option>
					<option value="PE">Prince Edward Island</option>
					<option value="QC">Quebec</option>
					<option value="SK">Saskatchewan</option>
					<option value="YT">Yukon Territory</option>
				</select>
				<input class="required" required="" id="ship_city" type="text" placeholder="City">
				<input class="required" required="" id="ship_postal" type="text" placeholder="Zip/Postal Code">
				<input class="required" required="" id="ship_phone" type="phone" placeholder="Phone">
			</div>
			<button class="scButton checkoutButton">Submit</button>
		</form>
	</div>