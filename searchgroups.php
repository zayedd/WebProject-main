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
  <style>
  .card{
        margin-left:450px;
        text-align:center;
        width: 500px;
      }
      body{
  background-color: #ffb266;;
}
  </style>
  <?php
  
   
  $t=$_SESSION['t'];
    $x=$_GET['idd'];
    $sql = "SELECT * FROM groups WHERE place = '$x' or country = '$x' or city = '$x'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_array($result)) {
  
  echo "<tr>";
  echo "<td>";
   echo" <div class='card' style='width: 18rem;'>";
    echo " <img class='card-img-top' src='".$row['photo']."' alt='Card image cap'>";
  echo"<div class='card-body'>";
    echo"<h5 class='card-title'>{$row['place']}</h5>";
    echo"<h6 class='card-text'>{$row['country']}</h6>";
  //  echo "<div class='rating' data-rating='".$row["stars"]."'></div>";
    echo "<a href='http://localhost/WebProject-main/grp.php?id={$row['id']}' class='btn btn-primary'>Group Details</a>";
   // echo "<a href='./rate-group.php?id={$row['id']}' class='btn btn-primary'>Rate Group</a>";
   if($t=="admin")
   {
    echo "<a href='http://localhost/WebProject-main/editgroups.php?id={$row['id']}' class='btn btn-secondary'>Edit</a>";
   
    echo "<td>";
     echo "</tr>";
   }
  echo "</div>";
 echo"</div>";
echo"<br>";
 
}
}
  ?>