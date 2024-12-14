{
    "type"="Feature",
    "properties"= {
        "name": "Alabama",
        "density": 94.65
    },
    "geometry"= {
        "type": "Polygon",  // Tipe geometri, bisa berupa Point, LineString, Polygon, dll.
        "coordinates": [
            [
                [-87.5, 35.5],
                [-86.5, 35.5],
                [-86.5, 34.5],
                [-87.5, 34.5],
                [-87.5, 35.5]
            ]
        ]
    }
    var map = L.map('map').setView([37.8, -96], 4);

var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

L.geoJson(statesData).addTo(map);

function getColor(d) {
    return d > 1000 ? '#800026' :
           d > 500  ? '#BD0026' :
           d > 200  ? '#E31A1C' :
           d > 100  ? '#FC4E2A' :
           d > 50   ? '#FD8D3C' :
           d > 20   ? '#FEB24C' :
           d > 10   ? '#FED976' :
                      '#FFEDA0';
}
function style(feature) {
    return {
        fillColor: getColor(feature.properties.density),
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7
    };
}

L.geoJson(statesData, {style: style}).addTo(map);
}
