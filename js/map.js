;(function($) {
  $(document).ready(function() {
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: parseFloat(mapOptions.lat), lng: parseFloat(mapOptions.lng)},
        zoom: parseInt(mapOptions.zoom)
      });
    }
    initMap();
  });
})(jQuery);