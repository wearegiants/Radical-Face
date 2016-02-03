<div id="map" class="covered"></div>

<script>
  function init() {
    var mapMinZoom = 3;
    var mapMaxZoom = 5;
    
    var map = L.map('map', {
      maxZoom: mapMaxZoom,
      minZoom: mapMinZoom,
      zoomControl: false,
      //center: [120,240],
      maxBounds: [
        [0,2],
        [-184,240]
      ],
      crs: L.CRS.Simple
    });
    
    var mapBounds = new L.LatLngBounds(
        map.unproject([0, 6144], mapMaxZoom),
        map.unproject([7936, 0], mapMaxZoom));
        
    map.fitBounds(mapBounds);
    L.tileLayer('/assets/map/{z}/{x}/{y}.png', {
      //minZoom: mapMinZoom, maxZoom: mapMaxZoom,
      //bounds: mapBounds,
      noWrap: true,
      tms: false
    }).addTo(map);

    map.setView([-70,120], mapMinZoom);

    var planes = [
      ["7C6B38",-70,120],
      ["7C6B38",-184,240],
    ];

   for (var i = 0; i < planes.length; i++) {

      var icon = L.icon({
          iconUrl: '/assets/img/1453789458_location.png',
          //shadowUrl: 'leaf-shadow.png',
          iconSize:     [38, 95], // size of the icon
          shadowSize:   [50, 64], // size of the shadow
          iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
          shadowAnchor: [4, 62],  // the same for the shadow
          popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
      });

      marker = new L.marker([planes[i][1],planes[i][2]], {icon: icon})
        .bindPopup(planes[i][0])
        .addTo(map)
        .on('click', function(e) {
          //e.preventDefault();
          console.log('hello');
          $.magnificPopup.open({
            items: {
              src: '/points/always-gold/'
            },
            callbacks: {
              parseAjax: function(mfpResponse) {
                mfpResponse.data = $(mfpResponse.data).find('#poi');
              },
              ajaxContentAdded: function() {
                fluidVideos();
                closeModal();
              }
            },
            type: 'ajax',
            mainClass: 'mfp-with-fade',
          });
        });
    }
    
  }

</script>