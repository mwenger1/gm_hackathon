<?php include('include/top.php'); ?>


	
			</div>

			<div data-role="content">
				<select id="mapTimeline">
					<option value='year'>This Year</option>
					<option value='alltime'>All Time</option>
				</select>
				<div style="text-align:center;">
					<p class="" style="font-size:2em; line-height:1.5em; margin-top: 0;">Your car has been to <br><span style="font-weight:bold; line-height:1.2em;" class="thisyear">13 States!</span>
<span style="font-weight:bold; line-height:1.2em; display:none;" class="alltime">32 States!</span>
					</p>


					<img class="thisyear" style="width:90%;" src="images/map_states.png" />
					<img class="alltime" style="width:90%; display:none;" src="images/map_states2.png" />

				<p ><span style="font-size:1.2em; line-height:1.2em;">Think you are a road warrior?</span><br>See how you compare to your friends.</p>


					<img class="thisyear" style="width:80%;" src="images/leaderboard2.png" />
					<img class="alltime" style="width:80%; display:none;" src="images/leaderboard.png" />
					<button class="inset">Load More</button>

				</div>

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
