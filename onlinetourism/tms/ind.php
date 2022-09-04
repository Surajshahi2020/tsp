<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>




            
<?php
$conn = mysqli_connect("localhost","root","","relog");
$query="SELECT  * FROM user_places  group by  place_name order by  place_rating  DESC" ;
$result=mysqli_query($conn , $query);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<head>
<title>TMS  | Package List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image list</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  -->
<?php include('includes/header.php');?>
</head>

    
		

<?php
include("head.php");
include("database.php");


?>

<div class="panel panel-default">
<div class="panel-heading">
<h2>
<a class="btn btn-success"href="add_user.php">Add Users</a>
<a class="btn btn-info pull-right"href="index.php">Back</a>
</h2>
</div>

<div class="panel-body">
<table class="table table-striped">

    <th>User Name</th>
    <th>Add Places</th>
    <th>Show Places</th>
    <th>Show Recommendation</th>



<?php $result= mysqli_query($conn,"select * from username");
while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['username']; ?> </td>
<td>
<form action="add_places.php">
    <input type="submit" name="add_places"class="btn btn-primary" value="Add Places">
    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
</form>   
</td>

<td>
<form action="show_places.php">
    <input type="submit" name="show_places"class="btn btn-primary" value="Show Places">
    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
</form>   
</td>

<td>
<form action="recommend.php">
    <input type="submit" name="show_places"class="btn btn-primary" value="Show Recommendation">
    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
</form>   
</td>






</tr>

<?php } ?>


</table>
</div>





		
		
		</div>
	</div>
</div>
<!--- /rooms ---->

<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>