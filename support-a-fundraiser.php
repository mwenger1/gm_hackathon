<?php include('include/top.php'); ?>


	
			</div>

			<div data-role="content">

				<h2>Support a Fundraiser</h2>
				<p>Help a Team Fox Fundraiser reach their goal. Use the search options to find a participant, team, or event to support.</p>
				<form class="validate">
				 <div data-role="fieldcontain">
                <fieldset data-role="controlgroup">
                    <legend>Looking for a:</legend>                
                    <select id="stateCalendarDropdown">
						<option value="AL">Participant</option>
						<option value="AK">Team</option>
						<option value="AZ">Event</option>
					</select>
                </fieldset>
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
			<input type="submit" name="donate_button" id="donAPIFormSubmit-1861" value="Submit" data-theme="a" style="margin-bottom:2em;"/>	
			</form>
		<ul data-role="listview" class="eventFeed" >
				<li>Search Results</li>
				<li>
					<a href="#">Smith, Mike</a>
				</li>
				<li><a href="#">Wenger, Mike</a></li>
			</a>
		</ul>

	<script src="js/calendar.js">
	</script>	
			

<?php include('include/bottom.php'); ?>
