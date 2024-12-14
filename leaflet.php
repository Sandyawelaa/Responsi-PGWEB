<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Map with Shapefile</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <style>
    #map {
      height: 100vh;
      margin: 0;
      padding: 0;
    }
  </style>
</head>

<body>
  <div id="map"></div>

  <!-- Leaflet JS Library -->
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  
  <!-- Leaflet Shapefile Library -->
  <script src="https://unpkg.com/shapefile/dist/shapefile.min.js"></script>

  <script>
    // Initialize the map
    var map = L.map('map').setView([-8.0268, 110.3695], 10); // Centered on the beaches area in Yogyakarta

    // Add OpenStreetMap tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: 'Map data ©️ <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);

    // Add a marker at the center
    var marker = L.marker([-7.7956, 110.3695]).addTo(map);
    marker.bindPopup('<b>Yogyakarta</b><br>Center of the map!').openPopup();

    // Add markers for beaches
    var beaches = [
      { name: "Pantai Parangtritis", coords: [-8.0167, 110.3132] },
      { name: "Pantai Indrayanti", coords: [-8.1507, 110.6157] },
      { name: "Pantai Drini", coords: [-8.1375, 110.5717] },
      { name: "Pantai Siung", coords: [-8.1828, 110.6802] },
      { name: "Pantai Goa Cemara", coords: [-8.0160, 110.2940] },
      { name: "Pantai Ngandong", coords: [-8.1472, 110.6058] }
    ];

    beaches.forEach(function(beach) {
      var beachMarker = L.marker(beach.coords).addTo(map);
      beachMarker.bindPopup('<b>' + beach.name + '</b><br>Beautiful beach in Yogyakarta.');
    });

  </script>

</body>

</html>
