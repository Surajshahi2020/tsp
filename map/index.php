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
  margin: 5px 5px;
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


