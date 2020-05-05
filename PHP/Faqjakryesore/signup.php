 <!DOCTYPE html>

<html lang = "en">
<head>
	<title> A title for the document </title>
	<meta charset = "utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/reset.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/signup.css">
        <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.1.1/build/ol.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.1.1/css/ol.css" type="text/css">
  <style>
    .map {
      height: 400px;
      width: 50%;
      position: relative;
      left: 25%;
    }
  </style>
    </head>
    <body>
      <form action="" method="post">
        <h1>Sign Up</h1>
        <fieldset>
          <legend><span class="numri">1</span>Te dhenat e juaja</legend>
          <label for="name">Emri</label>
          <input type="text" id="name" >          
          <label for="mail">Emaili:</label>
          <input type="email" id="mail" >
          
          <label for="password">Password:</label>
          <input type="password" id="password">
          
          <label>Mosha:</label>
          <input type="radio" id="mosha1" >
          <label for="mosha1" class="poq1">Mbi 13</label><br>
          <input type="radio" id="mosha2"  >
          <label for="mosha2" class="poq1">13 ose me pak</label>
        </fieldset>
        
        
       
        </select>
        
          <label>Per cfare interesoheni me shume:</label>
          <input type="checkbox" id="filma" ><label class="poq1" for="development">Filma</label><br>
            <input type="checkbox" id="seriale" ><label class="poq1" for="design">Seriale</label><br>
          <input type="checkbox" id="dyjat"  ><label class="poq1" for="dyjat">Filma dhe Seriale</label>
        
        </fieldset>
        <button type="submit">Sign Up</button>
      </form><br>
      <div id="map" class="map"></div>
      
    
	



      </body>
<script>

  //time color changing background
      function time(){
        var today = new Date();
        var h = today.getHours()
        if (h>12) {h= h- "12"} ;
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        var r = parseInt(s) * 1;
        var g = parseInt(s) * 3;
        var b = parseInt(s) * 5;
        document.body.style.backgroundColor = 'rgb(' + r + ',' + g + ',' + b + ')';
        var t = setTimeout(time,100);
      }
      
      function checkTime(i) {
        if (i < 12) {i = "0" + i};
        return i;
      }
      
      time();

//session storage
      $(document).ready(function(){
        if (sessionStorage.clickcount) {
  sessionStorage.clickcount = Number(sessionStorage.clickcount) + 1;
  console.log('Numri i klikimeve:'+ sessionStorage.clickcount);
} else {
  sessionStorage.clickcount = 1;
  console.log('Numri i klikimeve:'+ sessionStorage.clickcount);
}
      });

//geolocation finder html5

$(document).ready(function(){
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    console.log('browser does not support geolocation')
  }
});

//usage of openlayers map api for map rendering
function showPosition(position) {
  console.log( "Latitude: " + position.coords.latitude +
  " Longitude: " + position.coords.longitude);

      var view = new ol.View({
        center: ol.proj.fromLonLat([position.coords.longitude, position.coords.latitude]),
          zoom: 13  
      });
      var map = new ol.Map({
        layers: [
          new ol.layer.Tile({
            source: new ol.source.OSM()
          })
        ],
        target: 'map',
        view: view
      });
      var geolocation = new ol.Geolocation({
        // enableHighAccuracy must be set to true to have the heading value.
        trackingOptions: {
          enableHighAccuracy: true
        },
        projection: view.getProjection()
      });
      geolocation.setTracking(true);
      
      var accuracyFeature = new ol.Feature();
      geolocation.on('change:accuracyGeometry', function() {
        accuracyFeature.setGeometry(geolocation.getAccuracyGeometry());
      });
      var positionFeature = new ol.Feature();
      positionFeature.setStyle(new ol.style.Style({
        image: new ol.style.Circle({
          radius: 6,
          fill: new ol.style.Fill({
            color: '#3399CC'
          }),
          stroke: new ol.style.Stroke({
            color: '#fff',
            width: 2
          })
        })
      }));

      geolocation.on('change:position', function() {
        var coordinates = geolocation.getPosition();
        positionFeature.setGeometry(coordinates ?
          new ol.geom.Point(coordinates) : null);
      });

      new ol.layer.Vector({
        map: map,
        source: new ol.source.Vector({
          features: [accuracyFeature, positionFeature]
        })
      });
}

      </script>

</html>
