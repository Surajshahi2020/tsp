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

<?php
include('db.php');
include('tourist.php');

$v1=doubleval($_GET['lat']);
$v2=doubleval($_GET['long']);

$sql="SELECT id,name,Founder,( 3959 * acos( cos( radians($v1) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians($v2) )+ sin( 
radians($v1) )*sin( radians( lat ) ) ) ) AS distance FROM locations HAVING distance < 25 ORDER BY distance LIMIT 0 , 20";



$query = $dbh ->prepare($sql);
$query->execute();
$results=$query->fetchALL(PDO::FETCH_OBJ);
$cnt=1;

if($query->rowCount() > 0)
{
  foreach ($results as $result) 
  {
?>






<!DOCTYPE html>
<html>
<head>
  <title>Information according to Distance</title>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 20%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>


<table id="customers">
<tr>
    <th>Name</th>
    <td><?php echo htmlentities($result->name); ?></td>
</tr>


<tr>
         <th>Founder</th>
     <td><?php echo htmlentities($result->Founder); ?></td>
 </tr>


 <tr>
      <th>Distance as KM</th>
    <td><?php echo htmlentities($result->distance); ?></td>
     </tr>
     <br>
     <br>
</table>

</body>
</html>



<?php

}
}


?>












<?php
# code
{}



?>
