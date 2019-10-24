class Map {
    constructor() {
        this.initMap();
    }

    initMap() {
        var menuiserie = [47.9309562, -1.6777071];

        window.map = new L.map("map").setView(menuiserie, 16);
        L.tileLayer("https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png", {
            maxZoom: 16,
            minZoom: 10
        }).addTo(map);

        var marker = L.marker(menuiserie)
        .bindPopup('<h3>Menuiserie Quellard</h3> <br> <p>9 RUE DU CHAMP GUIHORE 35320 CREVIN</p>')
        .addTo(map);

    }
}

var LeafletMap = new Map();