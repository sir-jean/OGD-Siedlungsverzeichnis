var mapboxTiles = L.tileLayer('https://api.maptiler.com/maps/ch-swisstopo-lbm-vivid/{z}/{x}/{y}.png?key=TPqKOTICISUfMCv2qVi8', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a> © swisstopo <a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a> <a target="_blank" href="https://www.swisstopo.admin.ch/en/home.html">&copy; swisstopo</a>',
    maxZoom: 18,
    id: 'mapbox/satellite-v9',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
});


var map = L.map('map')
        .addLayer(mapboxTiles)
        .setView([47.555, 8.92], 10);

var marker = L.marker([47.555, 8.896]).addTo(map);

var popup = L.popup()
    .setLatLng([47.555, 8.896])
    .setContent("I am a standalone popup.")
    .openOn(map);
    

marker.bindPopup("<b>Frauenfeld</b><br>I am a popup.").openPopup();


var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(map);
}

map.on('click', onMapClick);