<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Leaflet.markercluster</title>
  

</head>
<body>
<!--
  Include Leaflet.markercluster's CSS and JavaScript assets.
  Unlike mapbox.js, these are not hosted by MapBox; you will
  need to download and host them yourself.

  Note that the 0.2 release of Leaflet.markercluster is not
  compatible with the version of Leaflet used by mapbox.js.
  This example uses assets from the master branch (@ 6fda9a206)
  of https://github.com/Leaflet/Leaflet.markercluster.
-->
  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
  <script src='//api.tiles.mapbox.com/mapbox.js/v1.4.2/mapbox.js'></script>
  <link href='//api.tiles.mapbox.com/mapbox.js/v1.4.2/mapbox.css' rel='stylesheet' />
  
  <style>
    body { margin:0; padding:0; }
    #map { position:absolute; top:0; bottom:0; width:100%; }
  </style>
<link rel="stylesheet" href="https://www.mapbox.com/mapbox.js/assets/MarkerCluster.css" />
<link rel="stylesheet" href="https://www.mapbox.com/mapbox.js/assets/MarkerCluster.Default.css" />
<!--[if lte IE 8]>
  <link rel="stylesheet" href="https://www.mapbox.com/mapbox.js/assets/MarkerCluster.Default.ie.css" />
<![endif]-->
<script src="https://www.mapbox.com/mapbox.js/assets/leaflet.markercluster.js"></script>

<!-- Example data. -->
<script src="js/geocoordinates.js"></script>

<div id='map'></div>

<script>
    var map = L.mapbox.map('map', 'examples.map-9ijuk24y')
        .setView([38.82, -80.22], 14);

    var markers = new L.MarkerClusterGroup();

    for (var i = 0; i < addressPoints.length; i++) {
        var a = addressPoints[i];
        var title = a[2];
        var marker = L.marker(new L.LatLng(a[0], a[1]), {
            icon: L.mapbox.marker.icon({'marker-symbol': 'post', 'marker-color': '0044FF'}),
            title: title
        });
        marker.bindPopup(title);
        markers.addLayer(marker);
    }

    map.addLayer(markers);
</script>
</body>
</html>