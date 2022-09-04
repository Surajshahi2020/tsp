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
<style>

div.relative {
  position: relative;
  left: 10px;
  top: 15px;
  background-color: #FBF8F3 ;

}
@media only screen and (max-width: 460px) {
  
}



    </style>
<div class="relative">
<body>
    <!--- banner ---->
<div class="banner-3">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TSP - Tourist Service Provider</h1>
	</div>
</div>
<!--- /banner ---->
<!--- rooms ---->
<div class="rooms">
	<div class="container">
		
		<div class="room-bottom">
			<h3>Place List</h3>

		

   
    <h3></h3>
        <table class="table table-bordered"> 
            <thead>
                <tr>
                    <th>Place Name</th>
                    <th>Place Rating(Out of 10)</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($fetch=mysqli_fetch_assoc($result)){
                    echo  "<tr>";
                    echo "<td>{$fetch['place_name']}</td>";
                    echo "<td>{$fetch['place_rating']}</td>";
                    echo "<td><img src='image/{$fetch['Image']}' width='100'></td>";
                    echo " </tr>";
                }
                ?>
            </tbody>
        </table>
  
</body>
            </div>           
</html>






		
		
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