<?php include('include/top.php'); ?>
			<!--	<h1>Donate</h1>
				<a href="blog-detail.php" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
-->			</div>

			<div data-role="content">
			<select id="mapTimeline">
					<option value='year'>This Year</option>
					<option value='alltime'>All Time</option>
				</select>
				<div style="text-align:center;">
				  
<p class="" style="font-size:2em; line-height:1.5em; margin-top: 0;">Your car has travelled <br><span style="font-weight:bold; line-height:1.2em;" class="thisyear">13,452 miles!</span>
<span style="font-weight:bold; line-height:1.2em; display:none;" class="alltime">87,619 miles!</span>

<p>To put that into picture, that is equal to:</p>

<p>Driving from NYC to LA <span style="font-weight:bold;" class="thisyear">7 times</span><span style="font-weight:bold; display:none;" class="alltime">27 times</p>
<p>Driving <span style="font-weight:bold;" class="thisyear">48%</span><span style="font-weight:bold; display:none;" class="alltime">3.5 times</span> around the circumference of the earth.</p>
<p style="margin-bottom:10em;">Driving <span style="font-weight:bold;" class="thisyear">1/800th</span><span style="font-weight:bold; display:none;" class="alltime">1/100th</span> of the way to the moon.</p>

				
<script>
	$("#mapTimeline").change(function(){
		var tmpValue = $(this).val();
		if (tmpValue == "year"){
			$(".alltime").hide();
			$(".thisyear").show();

		}
		else if (tmpValue== "alltime"){
			$(".alltime").show();
			$(".thisyear").hide();

		}
	})
</script>


<?php include('include/bottom.php'); ?>
