<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzRvHQoE265Wfz6gRRrzfpfKxBuj6_dcg&sensor=false">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(13.0604220, 80.2495830),
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.ROADMAP
          draggableCursor: "crosshair"
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
        var directions = new google.maps.DirectionsService();
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <div id="map-canvas"/>
  </body>
</html>