<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>리더스관리(주)</h3>
    서울시 영등포구 양평동 2가 36-41 2층 1호
    <div id="map"></div>
    <script>
    function initMap() {
  
    var uluru = {lat: 37.525003, lng: 126.883709};
    var map = new google.maps.Map(
    document.getElementById('map'), {zoom: 18, center: uluru});
    var marker = new google.maps.Marker({position: uluru, map: map});
    }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiLHWjcvou6yr3nZDsS0E4AOq3Q3Vjhu0&callback=initMap">
    </script>
  </body>
</html>