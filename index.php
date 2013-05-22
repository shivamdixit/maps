<!-- In progress , working on php code -->
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
      //Declaring global variables
      
      var directionsDisplay;
      var directionsService = new google.maps.DirectionsService();
      var map;
      var start = "Mellon Labs, Chennai";
      var end = "Guru Nanak College, Chennai";
      var waypoints = new Array("Gandhi Nagar Club, Chennai","TICEL Biotech park, Chennai","THe B Bar, Chennai","Advantix Technologies, Chennai","Chemplast Cricket Ground, Chennai");
      
      function initialize() {
        directionsDisplay = new google.maps.DirectionsRenderer();
        var mapOptions = {
          center: new google.maps.LatLng(13.0604220, 80.2495830), //Placing the center of map to Mellon Labs, Chennai
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.ROADMAP
          draggableCursor: "crosshair"
        };
        map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
        directionsDisplay.setMap(map);
      }

      var request = {
        origin: start,
        destination: end,
        waypoints: waypoints,
        optimizeWaypoints: true,
        travelMode: google.maps.TravelMode.DRIVING
      };
      directionsService.route(request, function(response, status) {
        console.log(response);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <div id="map-canvas"/>
  </body>
</html>
