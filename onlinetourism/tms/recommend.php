<html>
<head>
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<div class="container">
<h2><div class="well text-center">Recommendations For You</div></h2>

<?php
include("database.php");
include("rec.php");
$places=mysqli_query($conn,"select * from user_places");
$matrix=array();


while($place=mysqli_fetch_array($places))
{
  $users= mysqli_query($conn,"select username from username where id=$place[user_id]");
  $username= mysqli_fetch_array($users);
  //$matrix[$username['username']][$place['place_name']]=$place['place_rating'];
  @$matrix[$username['username']][$place['place_name']]=$place['place_rating'];
}

$users= mysqli_query($conn,"select username from username where id=$_GET[id]");
$username= mysqli_fetch_array($users);


//echo "<pre>";
//print_r($matrix);
//echo"</pre>"

?>

<div class="panel panel-default">
<div class="panel-heading">
<h2>
<a class="btn btn-success"href="add_user.php">Add Users</a>
<a class="btn btn-info pull-right"href="ind.php">Back</a>
</h2>
</div>

<div class="panel-body">
<table class="table table-striped">

    <th>Place Name</th>
    <th>Place Rating</th>
    



<?php
$recommendation=array();
$recommendation=getRecommendation($matrix,$username['username']);
foreach($recommendation as $place=>$rating)
{
?>
<tr>
<td><?php echo $place ;?> </td>
<td><?php echo $rating; ?> </td>
</tr>

<?php } ?>


</table>
</div>
 
