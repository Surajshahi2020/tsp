<!DOCTYPE html>
<html lang="en">
<head>
  <title>Google Map</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/project/onlinetourism/tms/">Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/project/tsp">Profile</a></li>
      <li><a href="http://localhost/project/map/user-map.php">Locate</a></li>
      <li>
      <!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 10px 160px;
  cursor: pointer;

}
</style>
</head>
<body onload="geoLocation()">

<script type="text/javascript">
  function geoLocation(){
if(navigator.geolocation){
navigator.geolocation.getCurrentPosition(showPosition);


}
 }

  function showPosition(position){
document.getElementById("lats").value=+position.coords.latitude;
document.getElementById("longs").value=+position.coords.longitude;



  }


</script>

<form action="index.php" method="POST">
<input type="hidden" name="lats" id="lats">
<input type="hidden" name="longs" id="longs">

<button class="button" type="submit" name="subm" id="subm">Search Places</button>



<?php
if(isset($_POST['subm'])){

  $l1 = $_POST['lats'];
  $l2 = $_POST['longs'];
  header("Location:nearest.php?lat=$l1&long=$l2");
  




}
?>


</form>

</body>
</html>



    </ul>
  </div>
</nav>
  
<div class="container">

</div>

</body>
</html>



</li>

      
    </ul>
  </div>
</nav>
  
<div class="container" color:black;>

</div>

</body>
</html>


<?php
include_once 'header.php';
include 'locations_model.php';
//get_unconfirmed_locations();exit;
?>

    <style>

        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            margin-left: 20%;
            width:50%
        }
        #map { position:absolute; margin-left: 20%; top:670px; bottom:0px;height:550px ;width:800px; }
        .geocoder {
            position:absolute; margin-left: 20%; top:670px
        }
    </style>
<border-style: solid;>
    <div class="container">
        <form action="" id="signupForm">
            <label for="lat">Latitude</label>
            <input type="text" id="lat" name="lat" placeholder="Your lat..">

            <label for="lng">Longitude</label>
            <input type="text" id="lng" name="lng" placeholder="Your lng..">

            <label for="name">Services</label>
            <select name="name" id="name">
            <optgroup label="Transport">
            <option value="Bike">Bike</option>
            <option value="Taxi">Taxi</option>
            </optgroup>
            <optgroup label="Hotel & Restaurant">
            <option value="3 star">3 Star</option>
            <option value="5 star">5 Star</option>
            </optgroup>
            <optgroup label="Guider">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <optgroup>
            
            </select>

            <label for="name">Founder</label>
            <input type="text" id="Founder" name="Founder" placeholder="Your Founder Name..">

              <label for="url">URL</label>
            <input type="text" id="url" name="url" placeholder="Your your web address..">

          

            <input type="submit" value="Submit" >
        </form>
    </div>
    </border >
    <div class="geocoder">
        <div id="geocoder" ></div>
    </div>

    <div id="map"></div>


    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.css' rel='stylesheet' />
    <style>
    </style>

    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css' type='text/css' />

    <script>

        var saved_markers = <?= get_saved_locations() ?>;
        var user_location = [77.216721,28.644800];
        mapboxgl.accessToken = 'pk.eyJ1IjoiZmFraHJhd3kiLCJhIjoiY2pscWs4OTNrMmd5ZTNra21iZmRvdTFkOCJ9.15TZ2NtGk_AtUvLd27-8xA';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v9',
            center: user_location,
            zoom: 10
        });
        //  geocoder here
        var geocoder = new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            // limit results to Australia
            //country: 'IN',
        });

        var marker ;

        // After the map style has loaded on the page, add a source layer and default
        // styling for a single point.
        map.on('load', function() {
            addMarker(user_location,'load');
            add_markers(saved_markers);

            // Listen for the result event from the MapboxGeocoder that is triggered when a user
            // makes a selection and add a symbol that matches the result.
            geocoder.on('result', function(ev) {
                alert("Loading");
                console.log(ev.result.center);

            });
        });
        map.on('click', function (e) {
            marker.remove();
            addMarker(e.lngLat,'click');
            //console.log(e.lngLat.lat);
            document.getElementById("lat").value = e.lngLat.lat;
            document.getElementById("lng").value = e.lngLat.lng;
            
        });

        function addMarker(ltlng,event) {

            if(event === 'click'){
                user_location = ltlng;
            }
            marker = new mapboxgl.Marker({draggable: true,color:"#d02922"})
                .setLngLat(user_location)
                .addTo(map)
                .on('dragend', onDragEnd);
        }
        function add_markers(coordinates) {

            var geojson = (saved_markers == coordinates ? saved_markers : '');

            console.log(geojson);
            // add markers to map
            geojson.forEach(function (marker) {
                console.log(marker);
                // make a marker for each feature and add to the map
                new mapboxgl.Marker()
                    .setLngLat(marker)
                    .addTo(map);
            });

        }

        function onDragEnd() {
            var lngLat = marker.getLngLat();
            document.getElementById("lat").value = lngLat.lat;
            document.getElementById("lng").value = lngLat.lng;
         
            console.log('lng: ' + lngLat.lng + '<br />lat: ' + lngLat.lat);
        }

        $('#signupForm').submit(function(event){
            event.preventDefault();
            var lat = $('#lat').val();
            var lng = $('#lng').val();
             var name = $('#name').val();
               var Founder = $('#Founder').val();
                var url = $('#url').val();

        
            var url = 'locations_model.php?add_location&lat=' + lat + '&lng=' + lng + '&name=' + name + '&Founder=' + Founder + '&url=' + url;
            $.ajax({
                url: url,                                 
                method: 'GET',
                dataType: 'json',
                success: function(data){
                    alert(data);
                    location.reload();
                }
            });
        });

        document.getElementById('geocoder').appendChild(geocoder.onAdd(map));

    </script>
<body style="background-color:#F3F6FB;">

</body>


<?php
include_once 'footer.php';

?>
