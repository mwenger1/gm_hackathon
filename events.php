<?php include('include/top.php'); ?>


	
			</div>

			<div data-role="content">

				<h2>Upcoming Events</h2>
				
				<!-- @TODO this section -->
				 <div data-role="fieldcontain">
                <fieldset data-role="controlgroup">
                    <legend>Filter by:</legend>                
                    <select id="stateCalendarDropdown">
						<option>State</option>
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
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
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
					<select id="countryCalendarDropdown" >
						<option>Country</option>
						<option value="357">Argentina</option><option value="369">Australia</option><option value="68">Austria</option><option value="358">Belgium</option><option value="130">Bermuda</option><option value="55">Brazil</option><option value="132">Canada</option><option value="359">Chile</option><option value="58">China</option><option value="60">Denmark</option><option value="65">Finland</option><option value="66">France</option><option value="69">Germany</option><option value="360">Greece</option><option value="71">Ireland</option><option value="361">Israel</option><option value="67">Italy</option><option value="57">Japan</option><option value="70">Netherlands</option><option value="362">New Zealand</option><option value="363">Norway</option><option value="364">Portugal</option><option value="436">Saudi Arabia</option><option value="62">Slovakia</option><option value="134">South Africa</option><option value="365">South Korea</option><option value="61">Spain</option><option value="366">Sweden</option><option value="367">Switzerland</option><option value="403">Tanzania</option><option value="64">Turkey</option><option value="368">United Arab Emirates</option><option value="63">United Kingdom</option><option selected="selected" value="73">United States</option></select>                       
                    <select name="select-adults" id="select-adults">
                    	<option>All Events</option>
                        <option value="1">Foundation Events</option>
                        <option value="2">Team Fox Events</option>
                        <option value="2">PD Community Events</option>
                        <!-- etc. -->
                    </select>
                </fieldset>
				</div>
				<!--
				<p class="key"><img src="../../images/key-foundation.gif" width="9" height="14" border="0" alt="" /> Foundation &#160; <img src="../../images/key-team.gif" width="9" height="14" border="0" alt="" /> Team Fox &#160; <img src="../../images/key-community.gif" width="9" height="14" border="0" alt="" /> Parkinson's Community</p>
				-->
				<hr/>

		<ul data-role="listview" class="eventFeed" data-icon="false">
			<li>
				<a data-transition="slide" href="http://www2.michaeljfox.org/site/TR?fr_id=1300&pg=personal&px=1001824">
					<div class="eventItem">
						<div class="calendarDate">
							<div class="calendarIcon">
							<!--	<img src="../images/event-date-bg-team.gif" /> -->
								<div class="calendarIconText">
									Mar<br/>
									<span>12</span>
								</div>
							</div>
						</div>
						<div class="eventText">
							<div class="eventTitle">
								Delaware Pancakes for Parkinson's Disease
							</div>
							<div class="eventLocation">
								Hamilton, NY
							</div>
						</div>
					</div>
				</a>
			</li>

			<li>
				<a data-transition="slide" href="http://www2.michaeljfox.org/site/TR?fr_id=1300&pg=personal&px=1001824">
					<div class="eventItem">
						<div class="calendarDate">
							<div class="calendarIcon">
								<div class="calendarIconText">
									Mar<br/>
									<span>19</span>
								</div>
							</div>
						</div>
						<div class="eventText">						
							<div class="eventTitle">
								New York City Marathon
							</div>
							<div class="eventLocation">
								New York, NY
							</div>
						</div>	
					</div>
				</a>
			</li>
			<li>
				<a data-transition="slide" href="http://www2.michaeljfox.org/site/TR?fr_id=1300&pg=personal&px=1001824">
					<div class="eventItem">
						<div class="calendarDate">
							<div class="calendarIcon">
								<div class="calendarIconText">
									Mar<br/>
									<span>28</span>
								</div>
							</div>
						</div>
						<div class="eventText">
							<div class="eventTitle">
								Tips for Parkinson's
							</div>
							<div class="eventLocation">
								Saratoga Springs, NY
							</div>
						</div>	
					</div>
				</a>
			</li>			<li>
				<a data-transition="slide" href="http://www2.michaeljfox.org/site/TR?fr_id=1300&pg=personal&px=1001824">
					<div class="eventItem">
						<div class="calendarDate">
							<div class="calendarIcon">
								<div class="calendarIconText">
									Apr<br/>
									<span>3</span>
								</div>
							</div>
						</div>
						<div class="eventText">
							<div class="eventTitle">
								WereGoingBack.com - 2015!
							</div>
							<div class="eventLocation">
								New York, NY
							</div>
						</div>	
					</div>
				</a>
			</li>
		</ul>		

	<script src="js/calendar.js">
	</script>	
			

<?php include('include/bottom.php'); ?>
