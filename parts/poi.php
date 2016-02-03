<div id="map" class="covered"></div>

<?php
  
  $args = array(
    'showposts'  => -1,
    'post_type'  => 'page',
    'paged'      => $paged,
    'post_parent'=> 5,
  );

  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query($args); 
?>


<script>
  function init() {

    if (L.Browser.touch) {
      var mapMinZoom = 2;
    } else {
      var mapMinZoom = 3;
    }
    
    var mapMaxZoom = 5;
    
    var map = L.map('map', {
      maxZoom: mapMaxZoom,
      minZoom: mapMinZoom,
      zoomControl: false,
      detectRetina: true,
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

    // -70,120 is basically centered
<?php while ($wp_query->have_posts()) : $wp_query->the_post();  ?>
      ['<?php the_title(); ?>',<?php the_field("x_position"); ?>,<?php the_field("y_position"); ?>,'<?php the_permalink(); ?>','<?php the_field("icon"); ?>'],
<?php endwhile; $wp_query = null; $wp_query = $temp;?>
    ];

   for (var i = 0; i < planes.length; i++) {

      var poiIcon  = planes[i][4];

      //console.log(poiIcon);
      //console.log(poiURL);

      var icon = L.icon({
          iconUrl: poiIcon,
          //shadowUrl: 'leaf-shadow.png',
          iconSize:     [64, 64], // size of the icon
          //shadowSize:   [50, 64], // size of the shadow
          //iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
          //shadowAnchor: [4, 62],  // the same for the shadow
          //popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
      });

      var poiURL   = planes[i][3];
      console.log(poiURL);

      function openShit(){
        $.magnificPopup.open({
            items: {
              src: poiURL
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
      }


      marker = new L.marker([planes[i][1],planes[i][2]], {icon: icon})
        //.bindPopup(planes[i][0])
        .addTo(map)
        .on('click', function(e) {
          //console.log(url);
          openShit();
        });
    }
    
  }

</script>