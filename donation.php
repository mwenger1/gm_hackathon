<?php include('include/top.php'); ?>
			<!--	<h1>Donate</h1>
				<a href="blog-detail.php" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
-->			</div>

			<div data-role="content">
				<h2>Support PD Research</h2>
				<p>
					88 cents on every dollar goes to research programs and ultimately better treatments for patients.
				</p>
				<p>You can also <a href="tel:18007087644">call in your donation</a>.</p>
				<hr>


<!-- 				<a href="https://secure3.convio.net/mjff/site/SPageNavigator/donatenow.html" class="donateBtn" data-role="button" style="margin: 0; margin-bottom:10px; height: 4em; font-size: 1em; color: white; background: #F57D15;">Donate Online</a>

				<a href="tel:18007087644" data-role="button" style="margin: 0; height: 4em; font-size: 1em; color: white; background: #F57D15;">Donate by Phone</a>
 -->

<!--				<ul data-role="listview" data-inset="true" class="ui-li-icon" data-divider-theme="a">
					<li>
						<a href="tel:18007087644">Call in Your Donation</a>
					</li>
					<li>
						<a href="https://secure3.convio.net/mjff/site/SPageNavigator/donatenow.html" target="_blank" data-iconpos="right" data-icon="arrow-r" data-transition="slide">Donate Online</a>
					</li>
				</ul>
-->



		<h3>Online Donation</h3>
	
			<div data-role="fieldcontain">
				<fieldset data-role="controlgroup">
					<legend>
						Gift Amount:
					</legend>
				<select name="level_id" id="level_id" onchange="setOtherAmount('2343');">
					<option value="2362" selected="selected">$25</option>
					<option value="2363">$50</option>
					<option value="2363">$100</option>
					<option value="2363">$500</option>
					<option value="2343">Other</option>
				</select>
			</div>
			
			<div data-role="fieldcontain">
				<fieldset data-role="controlgroup">
					<legend>
						Credit Card Number:
					</legend>
				<input autocomplete="off" maxlength="20" id="card_number" name="card_number" value="" type="number"></p>
			</div>

			<div data-role="fieldcontain">
				<fieldset data-role="controlgroup">
					<legend>
						CVV Number:
					</legend>
					<input autocomplete="off" id="card_cvv" name="card_cvv" value="" type="number">
			</div>

			<div data-role="fieldcontain">
				<fieldset data-role="controlgroup">
					<legend>
						Expiration Date:
					</legend>
					<input autocomplete="off" id="card_cvv" name="card_cvv" value="" type="date">
			</div>

			<div data-role="fieldcontain">
				<fieldset data-role="controlgroup">
					<legend>
						First Name:
					</legend>
					<input type="text" id="billing_name_first" name="billing.name.first" value="">
			</div>

			<div data-role="fieldcontain">
				<fieldset data-role="controlgroup">
					<legend>
						Last Name:
					</legend>
					<input type="text" id="billing_name_last" name="billing.name.last" value="">
			</div>

			<div data-role="fieldcontain">
				<fieldset data-role="controlgroup">
					<legend>
						Address 1:
					</legend>
					<input type="text" id="billing_address_street1" name="billing.address.street1" value="">
			</div>

			<div data-role="fieldcontain">
				<fieldset data-role="controlgroup">
					<legend>
						Address 2:
					</legend>
					<input type="text" id="billing_address_street2" name="billing.address.street2" value="">
			</div>

			<div data-role="fieldcontain">
				<fieldset data-role="controlgroup">
					<legend>
						City:
					</legend>
					<input type="text" id="billing_address_city" name="billing.address.city" value="">
			</div>

			<div data-role="fieldcontain">
				<fieldset data-role="controlgroup">
					<legend>
						State:
					</legend>
					<select id="billing_address_state" name="billing.address.state">
						<option></option>
						<option value="AK">Alaska</option>
						<option value="AL">Alabama</option>
						<option value="AR">Arkansas</option>
						<option value="AZ">Arizona</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DC">District of Columbia</option>
						<option value="DE">Delaware</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="IA">Iowa</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="MA">Massachusetts</option>
						<option value="MD">Maryland</option>
						<option value="ME">Maine</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MO">Missouri</option>
						<option value="MS">Mississippi</option>
						<option value="MT">Montana</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="NE">Nebraska</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NV">Nevada</option>
						<option value="NY">New York</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VA">Virginia</option>
						<option value="VT">Vermont</option>
						<option value="WA">Washington</option>
						<option value="WI">Wisconsin</option>
						<option value="WV">West Virginia</option>
						<option value="WY">Wyoming</option>
						<option value="AS">American Samoa</option>
						<option value="FM">Fed. States of Micronesia</option>
						<option value="GU">Guam</option>
						<option value="MH">Marshall Islands</option>
						<option value="MP">Northern Mariana Islands</option>
						<option value="PR">Puerto Rico</option>
						<option value="PW">Palau</option>
						<option value="VI">Virgin Islands</option>
						<option value="AA">Armed Forces Americas</option>
						<option value="AE">Armed Forces</option>
						<option value="AP">Armed Forces Pacific</option>
						<option value="AB">Alberta</option>
						<option value="BC">British Columbia</option>
						<option value="MB">Manitoba</option>
						<option value="NB">New Brunswick</option>
						<option value="NL">Newfoundland and Labrador</option>
						<option value="NS">Nova Scotia</option>
						<option value="NT">Northwest Territories</option>
						<option value="NU">Nunavut</option>
						<option value="ON">Ontario</option>
						<option value="PE">Prince Edward Island</option>
						<option value="QC">Quebec</option>
						<option value="SK">Saskatchewan</option>
						<option value="YT">Yukon</option>
						<option value="None">None</option>
					</select>
			</div>

			<div data-role="fieldcontain">
				<fieldset data-role="controlgroup">
					<legend>
						Country:
					</legend>
					<select id="billing_address_country" name="billing.address.country">
						<option></option>
						<option value="United States">United States</option>
						<option value="Afghanistan">Afghanistan</option>
						<option value="Albania">Albania</option>
						<option value="Algeria">Algeria</option>
						<option value="American Samoa">American Samoa</option>
						<option value="Andorra">Andorra</option>
						<option value="Angola">Angola</option>
						<option value="Anguilla">Anguilla</option>
						<option value="Antarctica">Antarctica</option>
						<option value="Antigua and Barbuda">Antigua and Barbuda</option>
						<option value="Argentina">Argentina</option>
						<option value="Armenia">Armenia</option>
						<option value="Aruba">Aruba</option>
						<option value="Australia">Australia</option>
						<option value="Austria">Austria</option>
						<option value="Azerbaijan">Azerbaijan</option>
						<option value="Bahamas">Bahamas</option>
						<option value="Bahrain">Bahrain</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="Barbados">Barbados</option>
						<option value="Belarus">Belarus</option>
						<option value="Belgium">Belgium</option>
						<option value="Belize">Belize</option>
						<option value="Benin">Benin</option>
						<option value="Bermuda">Bermuda</option>
						<option value="Bhutan">Bhutan</option>
						<option value="Bolivia">Bolivia</option>
						<option value="Bosnia-Herzegovina">Bosnia-Herzegovina</option>
						<option value="Botswana">Botswana</option>
						<option value="Bouvet Island">Bouvet Island</option>
						<option value="Brazil">Brazil</option>
						<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
						<option value="Brunei">Brunei</option>
						<option value="Bulgaria">Bulgaria</option>
						<option value="Burkina Faso">Burkina Faso</option>
						<option value="Burundi">Burundi</option>
						<option value="Cambodia">Cambodia</option>
						<option value="Cameroon">Cameroon</option>
						<option value="Canada">Canada</option>
						<option value="Cape Verde">Cape Verde</option>
						<option value="Cayman Islands">Cayman Islands</option>
						<option value="Central African Republic">Central African Republic</option>
						<option value="Chad">Chad</option>
						<option value="Chile">Chile</option>
						<option value="China">China</option>
						<option value="Christmas Island">Christmas Island</option>
						<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
						<option value="Colombia">Colombia</option>
						<option value="Comoros">Comoros</option>
						<option value="Congo">Congo</option>
						<option value="Cook Islands">Cook Islands</option>
						<option value="Costa Rica">Costa Rica</option>
						<option value="Croatia">Croatia</option>
						<option value="Cuba">Cuba</option>
						<option value="Cyprus">Cyprus</option>
						<option value="Czech Republic">Czech Republic</option>
						<option value="Denmark">Denmark</option>
						<option value="Djibouti">Djibouti</option>
						<option value="Dominica">Dominica</option>
						<option value="Dominican Republic">Dominican Republic</option>
						<option value="East Timor">East Timor</option>
						<option value="Ecuador">Ecuador</option>
						<option value="Egypt">Egypt</option>
						<option value="El Salvador">El Salvador</option>
						<option value="Equatorial Guinea">Equatorial Guinea</option>
						<option value="Eritrea">Eritrea</option>
						<option value="Estonia">Estonia</option>
						<option value="Ethiopia">Ethiopia</option>
						<option value="Falkland Islands">Falkland Islands</option>
						<option value="Faroe Islands">Faroe Islands</option>
						<option value="Fiji">Fiji</option>
						<option value="Finland">Finland</option>
						<option value="Former Czechoslovakia">Former Czechoslovakia</option>
						<option value="Former USSR">Former USSR</option>
						<option value="France">France</option>
						<option value="French Guyana">French Guyana</option>
						<option value="French Southern Territories">French Southern Territories</option>
						<option value="Gabon">Gabon</option>
						<option value="Gambia">Gambia</option>
						<option value="Georgia">Georgia</option>
						<option value="Germany">Germany</option>
						<option value="Ghana">Ghana</option>
						<option value="Gibraltar">Gibraltar</option>
						<option value="Great Britain">Great Britain</option>
						<option value="Greece">Greece</option>
						<option value="Greenland">Greenland</option>
						<option value="Grenada">Grenada</option>
						<option value="Guadeloupe (French)">Guadeloupe (French)</option>
						<option value="Guam (USA)">Guam (USA)</option>
						<option value="Guatemala">Guatemala</option>
						<option value="Guinea">Guinea</option>
						<option value="Guinea-Bissau">Guinea-Bissau</option>
						<option value="Guyana">Guyana</option>
						<option value="Haiti">Haiti</option>
						<option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
						<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
						<option value="Honduras">Honduras</option>
						<option value="Hong Kong">Hong Kong</option>
						<option value="Hungary">Hungary</option>
						<option value="Iceland">Iceland</option>
						<option value="India">India</option>
						<option value="Indonesia">Indonesia</option>
						<option value="Iran">Iran</option>
						<option value="Iraq">Iraq</option>
						<option value="Ireland">Ireland</option>
						<option value="Israel">Israel</option>
						<option value="Italy">Italy</option>
						<option value="Ivory Coast (Cote D'Ivoire)">Ivory Coast (Cote D'Ivoire)</option>
						<option value="Jamaica">Jamaica</option>
						<option value="Japan">Japan</option>
						<option value="Jordan">Jordan</option>
						<option value="Kazakhstan">Kazakhstan</option>
						<option value="Kenya">Kenya</option>
						<option value="Kiribati">Kiribati</option>
						<option value="Kuwait">Kuwait</option>
						<option value="Kyrgyz Republic (Kyrgyzstan)">Kyrgyz Republic (Kyrgyzstan)</option>
						<option value="Laos">Laos</option>
						<option value="Latvia">Latvia</option>
						<option value="Lebanon">Lebanon</option>
						<option value="Lesotho">Lesotho</option>
						<option value="Liberia">Liberia</option>
						<option value="Libya">Libya</option>
						<option value="Liechtenstein">Liechtenstein</option>
						<option value="Lithuania">Lithuania</option>
						<option value="Luxembourg">Luxembourg</option>
						<option value="Macau">Macau</option>
						<option value="Macedonia">Macedonia</option>
						<option value="Madagascar">Madagascar</option>
						<option value="Malawi">Malawi</option>
						<option value="Malaysia">Malaysia</option>
						<option value="Maldives">Maldives</option>
						<option value="Mali">Mali</option>
						<option value="Malta">Malta</option>
						<option value="Marshall Islands">Marshall Islands</option>
						<option value="Martinique (French)">Martinique (French)</option>
						<option value="Mauritania">Mauritania</option>
						<option value="Mauritius">Mauritius</option>
						<option value="Mayotte">Mayotte</option>
						<option value="Mexico">Mexico</option>
						<option value="Micronesia">Micronesia</option>
						<option value="Moldavia">Moldavia</option>
						<option value="Monaco">Monaco</option>
						<option value="Mongolia">Mongolia</option>
						<option value="Montenegro">Montenegro</option>
						<option value="Montserrat">Montserrat</option>
						<option value="Morocco">Morocco</option>
						<option value="Mozambique">Mozambique</option>
						<option value="Myanmar">Myanmar</option>
						<option value="Namibia">Namibia</option>
						<option value="Nauru">Nauru</option>
						<option value="Nepal">Nepal</option>
						<option value="Netherlands">Netherlands</option>
						<option value="Netherlands Antilles">Netherlands Antilles</option>
						<option value="New Caledonia (French)">New Caledonia (French)</option>
						<option value="New Zealand">New Zealand</option>
						<option value="Nicaragua">Nicaragua</option>
						<option value="Niger">Niger</option>
						<option value="Nigeria">Nigeria</option>
						<option value="Niue">Niue</option>
						<option value="Norfolk Island">Norfolk Island</option>
						<option value="Northern Mariana Islands">Northern Mariana Islands</option>
						<option value="North Korea">North Korea</option>
						<option value="Norway">Norway</option>
						<option value="Oman">Oman</option>
						<option value="Pakistan">Pakistan</option>
						<option value="Palau">Palau</option>
						<option value="Panama">Panama</option>
						<option value="Papua New Guinea">Papua New Guinea</option>
						<option value="Paraguay">Paraguay</option>
						<option value="Peru">Peru</option>
						<option value="Philippines">Philippines</option>
						<option value="Pitcairn Island">Pitcairn Island</option>
						<option value="Poland">Poland</option>
						<option value="Polynesia (French)">Polynesia (French)</option>
						<option value="Portugal">Portugal</option>
						<option value="Puerto Rico">Puerto Rico</option>
						<option value="Qatar">Qatar</option>
						<option value="Reunion (French)">Reunion (French)</option>
						<option value="Romania">Romania</option>
						<option value="Russian Federation">Russian Federation</option>
						<option value="Rwanda">Rwanda</option>
						<option value="Saint Helena">Saint Helena</option>
						<option value="Saint Kitts &amp; Nevis Anguilla">Saint Kitts &amp; Nevis Anguilla</option>
						<option value="Saint Lucia">Saint Lucia</option>
						<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
						<option value="Saint Tome (Sao Tome) and Principe">Saint Tome (Sao Tome) &amp; Principe</option>
						<option value="Saint Vincent &amp; Grenadines">Saint Vincent &amp; Grenadines</option>
						<option value="Samoa">Samoa</option>
						<option value="San Marino">San Marino</option>
						<option value="Saudi Arabia">Saudi Arabia</option>
						<option value="Senegal">Senegal</option>
						<option value="Serbia">Serbia</option>
						<option value="Seychelles">Seychelles</option>
						<option value="S. Georgia &amp; S. Sandwich Isls.">S. Georgia &amp; S. Sandwich Isls.</option>
						<option value="Sierra Leone">Sierra Leone</option>
						<option value="Singapore">Singapore</option>
						<option value="Slovak Republic">Slovak Republic</option>
						<option value="Slovenia">Slovenia</option>
						<option value="Solomon Islands">Solomon Islands</option>
						<option value="Somalia">Somalia</option>
						<option value="South Africa">South Africa</option>
						<option value="South Korea">South Korea</option>
						<option value="Spain">Spain</option>
						<option value="Sri Lanka">Sri Lanka</option>
						<option value="Sudan">Sudan</option>
						<option value="Suriname">Suriname</option>
						<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
						<option value="Swaziland">Swaziland</option>
						<option value="Sweden">Sweden</option>
						<option value="Switzerland">Switzerland</option>
						<option value="Syria">Syria</option>
						<option value="Tadjikistan">Tadjikistan</option>
						<option value="Taiwan">Taiwan</option>
						<option value="Tanzania">Tanzania</option>
						<option value="Thailand">Thailand</option>
						<option value="Togo">Togo</option>
						<option value="Tokelau">Tokelau</option>
						<option value="Tonga">Tonga</option>
						<option value="Trinidad and Tobago">Trinidad and Tobago</option>
						<option value="Tunisia">Tunisia</option>
						<option value="Turkey">Turkey</option>
						<option value="Turkmenistan">Turkmenistan</option>
						<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
						<option value="Tuvalu">Tuvalu</option>
						<option value="Uganda">Uganda</option>
						<option value="Ukraine">Ukraine</option>
						<option value="United Arab Emirates">United Arab Emirates</option>
						<option value="United Kingdom">United Kingdom</option>
						<option value="Uruguay">Uruguay</option>
						<option value="USA Minor Outlying Islands">USA Minor Outlying Islands</option>
						<option value="Uzbekistan">Uzbekistan</option>
						<option value="Vanuatu">Vanuatu</option>
						<option value="Venezuela">Venezuela</option>
						<option value="Vietnam">Vietnam</option>
						<option value="Virgin Islands (British)">Virgin Islands (British)</option>
						<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
						<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
						<option value="Western Sahara">Western Sahara</option>
						<option value="Yemen">Yemen</option>
						<option value="Zaire">Zaire</option>
						<option value="Zambia">Zambia</option>
						<option value="Zimbabwe">Zimbabwe</option>
					</select>
			</div>

			<div data-role="fieldcontain">
				<fieldset data-role="controlgroup">
					<legend>
						Email Address:
					</legend>
					<input type="email" id="donor_email" name="donor.email" value="">
			</div>	
		
		<input type="submit" name="donate_button" id="donAPIFormSubmit-1861" value="Submit Your Contribution" data-theme="a">
		<p style="font-size:.8em;">Donations to The Michael J. Fox Foundation for Parkinson's Research are tax-deductible to the full extent of the law.</p>
<?php include('include/bottom.php'); ?>
