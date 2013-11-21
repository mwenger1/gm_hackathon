<?php include('include/top.php'); ?>
		</div>

			<div data-role="content">
				<h2>TeamFox SignUp</h2>
				<p class="mobileTagline">
					Registering for Team Fox is best done from your computer or tablet. Share your email address, and we will send you an email that kick offs your registration process.</p>
				<form id="ftfSignup" action="formthankyou.php" target="_blank" method="POST">
				
					<div data-role="fieldcontain">
						<fieldset data-role="controlgroup">
							<legend>
								Type of Fundraising
							</legend>
							<input type="radio" name="pd_status" id="pd_status_1" value="has_pd"  />
							<label for="pd_status_1">I am an athlete participating in a race</label>

							<input type="radio" name="pd_status" id="pd_status_2" value="is_control"  />
							<label for="pd_status_2">I want to host a fundraiser</label>

						</fieldset>
					</div>
				
					<div data-role="fieldcontain">

						<fieldset data-role="controlgroup">
							<input type="email" class="required" name="volunteer_email" id="email" required="required" placeholder="Email Address"/>
						</fieldset>
					</div>
					<input type="hidden" name="ambassador_referral" value="Lily Capelletti" />
					<input type="submit" value="Sign Up" data-theme="a"/>
				</form>
				
<?php include('include/bottom.php'); ?>
