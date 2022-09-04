




<?php include "connect.php";

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Marker Map </title>
    <style>

.show {display: block;}
.container{float:right;}

</style>
 
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    
   
  
  
  </div>
</div>
    <script>
        
    var marker;
      function initialize() {
        var infoWindow = new google.maps.InfoWindow;
        
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
 
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var bounds = new google.maps.LatLngBounds();

        // Retrieve data from database
        <?php
            $query = mysqli_query($con,"select * from locations");
            while ($data = mysqli_fetch_array($query))
            {
                $name = $data['name'];
                $lat = $data['lat'];
                $lng = $data['lng'];
                $Founder = $data['Founder'];
                  $url = $data['url'];

                echo ("addMarker($lat, $lng,'<b>$name</b>,<br><a href=\"$url\"><b>$Founder</b></a>');\n"); 

                             
            }
          ?>
          
        // Proses of making marker 
        function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }
        
        // Displays information on markers that are clicked
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
 
        }
      google.maps.event.addDomListener(window, 'load', initialize);



      function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
 


    
    </script>
    
</head>
<body onload="initialize()">
<body style="background-color:#F3F6FB;">
<div class="container" > 

    <div class="row">
        <div class="col-md-8">
            <!-- <div class="panel panel-default"> -->
           
                    <!-- <div class="panel-body"> -->
                        <div id="map-canvas" style="width: 1100px; height: 800px; top:40px;"></div>
                    <!-- </div> -->
            </div>
        </div>  
    </div>
</div> 
 
</body>

</html>
