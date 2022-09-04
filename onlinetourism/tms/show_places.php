<?php
include("head.php");
include("database.php");


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
    


<?php $result= mysqli_query($conn,"select * from user_places where user_id='$_GET[id]'");
while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['place_name']; ?> </td>
<td><?php echo $row['place_rating']; ?> </td>
</tr>

<?php } ?>


</table>
</div>