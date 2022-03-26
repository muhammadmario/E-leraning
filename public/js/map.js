var mymap = L.map("map").setView([-6.1997, 106.851334], 13);

   L.tileLayer(
      "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw",
      {
         maxZoom: 18,
         attribution:
               'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
               'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
         id: "mapbox/streets-v11",
         tileSize: 512,
         zoomOffset: -1,
      }
   ).addTo(mymap);

   L.marker([-6.1997, 106.851334])
      .addTo(mymap)
      .bindPopup("<b>Kementrian Sosial Republik Indonesia</b>")
      .openPopup();

   var popup = L.popup();