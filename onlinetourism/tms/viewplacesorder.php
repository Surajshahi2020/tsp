<?php
$conn = mysqli_connect("localhost","root","","relog");
$query="SELECT * FROM user_places  order by  place_rating";
$result=mysqli_query($conn , $query);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image list</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 

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