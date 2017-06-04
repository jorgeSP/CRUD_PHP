

<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
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

<p>
Praesent turpis libero, commodo accumsan, lobortis eget, feugiat quis, magna. Morbi gravida libero eu augue. Morbi ac magna. Integer at purus. Cras interdum tellus non velit. Vestibulum sodales nisl sit amet eros. Donec hendrerit dapibus erat! Quisque iaculis, magna vitae lacinia porta, leo dolor dapibus est, a lacinia ipsum odio ac felis! Sed congue porta ante. Sed eleifend lorem at dui. Duis a enim. Donec libero erat, gravida vel, molestie eget, hendrerit quis, turpis? Vestibulum viverra facilisis sapien! Nam nec turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent massa augue, sollicitudin non, tincidunt ut, interdum rhoncus, nisl. Nunc auctor eros nec arcu pellentesque volutpat. Aliquam fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur vitae nibh sed turpis fermentum condimentum!
</p>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdM6mwo-AOIseYychnTCGFmGLNNrAvqtw&callback=initMap"
    async defer></script>
  </body>
</html>
