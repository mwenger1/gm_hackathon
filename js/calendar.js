$(document).on('pageinit','[data-role=page]', function() {
	// HIDE STATES WHEN COUNTRY SELECTED IS NOT US
	$('#countryCalendarDropdown').on('change',function(){
		var countryValue = $('#countryCalendarDropdown').val();
		if (countryValue == 73){
			$('#stateCalendarDropdown').parent().parent().show();
		}
		else {
			$('#stateCalendarDropdown').parent().parent().hide();
		}
	});

	// DETERMINE LOCATION WITH HTML5
	function get_location() {
		if (Modernizr.geolocation) {
			navigator.geolocation.getCurrentPosition(identify_state);
			console.log('It ran modernizr');
		} else {
			// no native support; maybe try a fallback?
			console.log('It didnt run modernizr');
		}
	}

	//SELECT STATE DROPDOWN
	function selectState(state){
		$('#stateCalendarDropdown option').each(function(){
			var stateOption = $(this);
			var dropdownValue = stateOption.val();
			if (dropdownValue == state){
				stateOption.prop('selected','selected');
				$('#stateCalendarDropdown').selectmenu('refresh');
			}
		});
	}

	//SELECT COUNTRY DROPDOWN
	function selectCountry(country){
		$('#countryCalendarDropdown option').each(function(){
			var dropdownValue = $(this).text();
			if (dropdownValue == country){
				$(this).prop('selected','selected');
				$('#countryCalendarDropdown').selectmenu('refresh');
			}
		});
	}

	//IDENTIFY STATE AND COUNTRY
	function identify_state(position) {
		var latitude = position.coords.latitude;
		var longitude = position.coords.longitude;
		var googleUrl = "https://maps.googleapis.com/maps/api/geocode/json?latlng=";
		var fullUrl = googleUrl + latitude + "," + longitude + "&sensor=false";
		console.log(fullUrl);
		$.ajax({
			url:fullUrl,
			success: function(data){
			for (var i=0; i<data.results[0].address_components.length; i++) {
				for (var b=0;b<data.results[0].address_components[i].types.length;b++){
					if (data.results[0].address_components[i].types[b] == "administrative_area_level_1") {
						var stateValue = data.results[0].address_components[i].short_name;
						selectState(stateValue);
					}
					else if (data.results[0].address_components[i].types[b] == "country"){
						var countryValue = data.results[0].address_components[i].long_name;
						selectCountry(countryValue);
					}
	            }
	        }
	        	console.log('stateValue is: ' + stateValue);
	        	console.log('countryValue is: ' + countryValue);
         },
		error: function(){
		console.log('it did not run');
         }
	});
	}
	get_location();
});