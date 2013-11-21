<?php include('include/top.php'); ?>
<!--
				<h1 style="overflow:visible;">Fox Trial Finder</h1>
				<a href="blog-detail.php" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
	-->		</div>

			<div data-role="content">
				<h2>Fox Trial Finder SignUp</h2>
				<p class="mobileTagline">
					Registering for Fox Trial Finder and reviewing your trial matches is best done from your computer or tablet. Share your email address, and we will send you an email that kick offs your registration process.</p>
				<form id="ftfSignup" action="formthankyou.php" target="_blank" method="POST">
				<!--
					<div data-role="fieldcontain">
						<fieldset data-role="controlgroup">
							<legend>
								Event Type
							</legend>
							<input type="radio" name="pd_status" id="pd_status_1" value="has_pd"  />
							<label for="pd_status_1">I am an athlete participating in a race</label>

							<input type="radio" name="pd_status" id="pd_status_2" value="is_control"  />
							<label for="pd_status_2">I want to host a fundraiser</label>

						</fieldset>
					</div>
			-->		
					<div data-role="fieldcontain">

						<fieldset data-role="controlgroup">
							<!--
							<legend>
								Email Address
							</legend>
							-->
							<input type="email" class="required" name="volunteer_email" id="email" required="required" placeholder="Email Address"/>
						</fieldset>
					</div>

				<!--	<div data-role="fieldcontain">

						<fieldset data-role="controlgroup">
							<legend>
								E-Newsletter Signup
							</legend>
							<input type="checkbox" name="wants_newsletter" id="wants_newsletter" value="yes" checked="checked"/>
							<label for="wants_newsletter">I would like to receive research updates from Michaeljfox.org</label>
						</fieldset>
					</div>
-->
					<input type="hidden" name="ambassador_referral" value="Lily Capelletti" />
					<input type="submit" value="Sign Up" data-theme="a"/>
				</form>
				
<?php include('include/bottom.php'); ?>
