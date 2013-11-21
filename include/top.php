<!DOCTYPE>
<html class="no-js">
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<link rel="apple-touch-icon" href="apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
		<link rel="apple-touch-startup-image" href="apple-touch-startup-image-320x460.png" />
		<link rel="apple-touch-startup-image" sizes="768x1004" href="apple-touch-startup-image-768x1004.png" />
		<meta name="title" content="MapMyCar">
		<title>MapMyCar</title>

		<script src="js/modernizr.js"></script>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name='robots' content='noindex, nofollow' />


<!-- FILES FOR OFFLINE 
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/jquery.mobile.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/jquery.mobile.min.css" type="text/css" />
		-->
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
		
		<script>
// jquery.mobile.fastButtons.js


// Justin McCandless


// justinmccandless.com


// jQuery 1.6.4+


// jQuery Mobile 1.0.1+





// This jQuery Mobile plugin makes click events faster, especially iOS


// It does this by simply replacing 'click' events on document with 'vclick'





var fastButtons = {


        


        replace: function() {


                // copy the current click events on document


                var clickEvents = jQuery.hasData( document ) && jQuery._data( document ).events.click;


                clickEvents = jQuery.extend(true, {}, clickEvents);


                


                // remove these click events


                $(document).off('click');


        


                // reset them as vclick events


                for (var i in clickEvents) {


                        $(document).on('vclick', clickEvents[i].handler);


                }


        }


};





fastButtons.replace();
		</script>
		<link rel="stylesheet" href="css/mobilecustom.css" type="text/css"/>
		<link rel="stylesheet" href="css/elevation.css" type="text/css"/>
	</head>
	<body>
		<div data-role="page" class="pages">
			<div data-role="panel" id="menu2">
				<h3></h3>
					<ul>
						<li><a href="index.php" class="contentLink">Dashboard</a></li>
						<li><a href="states.php" class="contentLink">States</a></li>
						<li><a href="elevation.php" class="contentLink">Elevation</a></li>
						<li><a href="miles.php" class="contentLink">Miles</a></li>
						<li><a href="hotspots.php" class="contentLink">Hot Spots</a></li>
					</ul>
			</div>
			<div data-role="header" class="header" data-theme="b" style="height:100%; text-align:center; background:#B92932; padding:.1em 0;">
				<a data-role="none" href="#menu2" class="showMenu headerBtn" ><span class="custom-menu"></span></a>
				<image src="images/logo.png" style="width:60%" />
<!--				<div style="width:70%; margin:0 auto; background:url('/../images/sprite.png') no-repeat 30px -187px; height:2em;"></div> 
				<a data-role="none" data-rel="popup" href="#shareModal" class="showShare headerBtn"><span class="custom-share"></span></a>-->
					

				
				
				
				
				
				
				
