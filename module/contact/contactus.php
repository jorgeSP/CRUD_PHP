

<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 70%;
        margin:150px;
        margin-top: -10px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
  <h1>Contactanos</h1>
<p>
Maecenas libero enim, feugiat non, pretium eu, pellentesque vitae, enim. Fusce vel orci bibendum eros viverra vestibulum. Maecenas suscipit. Cras vel felis sed nunc venenatis tincidunt. Nunc sollicitudin lorem non nulla. Suspendisse potenti. Proin hendrerit accumsan risus! Ut accumsan eros at quam. Quisque eleifend, nulla a auctor dignissim, arcu purus eleifend justo, sagittis feugiat justo odio eget nisl! Etiam ut nibh vel elit pretium scelerisque. Fusce malesuada ultricies risus!
</p>


    <div id="map">
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 38.8167, lng:  -0.6167},
          zoom: 9
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdM6mwo-AOIseYychnTCGFmGLNNrAvqtw&callback=initMap"
    async defer></script>
    </div>
  </body>
</html>
