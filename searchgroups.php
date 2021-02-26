<?php
session_start();
require_once("navbar.php");

include("connectionproject.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    
  </head>
  <body>
  <?php
  
   
  if(isset($_GET['idd'])){ 
    $x=$_GET['idd'];
    $sql = "SELECT * FROM groups WHERE place = '$x' or country = '$x' or city = '$x'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result))
    {
     echo "z";
     echo"<div class='row row-cols-1 row-cols-md-3 g-4'>";
     echo"<div class='col'>";
            echo" <div class='card' style='width: 40rem;'>";
            echo "<img class='card-img-top' src='".$row['photo']."' alt='Card image cap'>";
            echo"<div class='card-body'>";
            echo"<h5 class='card-title'>{$row['place']}</h5>";
            echo"<h6 class='card-text'>{$row['country']}</h6>";
            //echo "<div class='rating' data-rating='".$row["stars"]."'></div>";
            echo "<a href='http://localhost/WebProject-main/grp.php?id={$row['id']}' class='btn btn-primary'>Group Details</a>";
        // echo "<a href='./rate-group.php?id={$row['id']}' class='btn btn-primary'>Rate Group</a>";
        echo "</div>";
        echo"</div>";
 echo "</div>";
 echo "</div>";
 
    } 
  }
  ?>