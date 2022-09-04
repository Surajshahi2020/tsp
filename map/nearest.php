<?php
include('db.php');

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
  width: 100%;
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

