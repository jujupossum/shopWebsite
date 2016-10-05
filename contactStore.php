<!DOCTYPE html>
<html lang="en-us">

<head>
<meta charset="utf-8">
<title>Dragon Flowers</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://openlayers.org/en/v3.18.2/css/ol.css" type="text/css">
    <style>
      .map {
        height: 400px;
        width: 100%;
      }
    </style>
    <script src="http://openlayers.org/en/v3.18.2/build/ol.js" type="text/javascript"></script>
</head>

<body>

<div id="header">
	<?php include('methods/header.php'); ?>
</div>

<div id="buffer"></div>

  <h1>Map</h1>
    <div id="map" class="map"></div>




<div id="footer">
	<?php include('methods/footer.php'); ?>
</div>

   	

    <script type="text/javascript">
      /*global ol*/
      var map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: new ol.source.OSM()
          })
        ],
        view: new ol.View({
          center: ol.proj.fromLonLat([37.41, 8.82]),
          zoom: 4
        })
      });
    </script>
</body>
</html>