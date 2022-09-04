<?php
session_start();
if(isset($_GET['id']))
{
    $_SESSION['id']=$_GET['id'];
}

   

include("head.php");
include("database.php");
$flag=0;
if(isset($_POST['submit']))
{
    $image= $_FILES['Image_upload'];
    $image_name=$image['name'];
    $image_tmp_name=$image['tmp_name'];
    $destination="image/".$image_name;
    move_uploaded_file($image_tmp_name, $destination);
 
   $result= mysqli_query($conn,"insert into user_places(user_id,place_name,place_rating,Image)values('$_SESSION[id]','$_POST[place_name]','$_POST[place_rating]','{$image_name}')");
   if($result){
    $flag=1;
   }
}
?>

<div class="panel panel-default">
<div class="panel-heading">
<h2>
<a class="btn btn-success"href="add_user.php">Add Places</a>
<a class="btn btn-info pull-right"href="ind.php">Back</a>
</h2>
</div>
<?php if($flag){ ?>
    <div class="alert alert-success">Place Sucessfully Inserted in the database </div>

<?php } ?>


<div class="panel-body">
<form action="add_places.php"method="post"  enctype="multipart/form-data">
    <div class="form-group">
        <label for="username">Place Name</label>
        <input type="text"name="place_name"id="place_name"class="form-control" required>
    </div>

    <div class="form-group">
        <label for="username">Place Rating</label>
        <input type="number"name="place_rating"max="11"id="number"class="form-control" required>
    </div>


    <div class="form-group">
        <label for="username">Image</label>
        <input type="file"name='Image_upload' accept="image/*" class="form-control" required>
    </div>

    


    <div class="form-group">
    <input type="submit" name="submit"value="submit"class="btn btn-primary" required>
    </div>