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
  <?php
  $type=$_SESSION['t'];
if($type=="user")
 {
    $sql = "SELECT * FROM data WHERE type='admin'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_array($result)) {
    echo "<a href='http://localhost/WebProject-main/chat1.php?idd={$row['id']}' class='btn btn-primary'>{$row['First_Name']}</a>";
   echo" <br>";
}
}
 }
 elseif($type="admin")
 {
   $sids = array( );
   $aid = $_SESSION['id'];
    $sql = "SELECT * FROM messages WHERE reciever_id = $aid";
    $result = mysqli_query($conn,$sql);
 //  echo $sql; echo "<br>";
   $i =0;

    $result1 = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
     
    while($row = mysqli_fetch_array($result)) {
       if($_SESSION['id']==$row['reciever_id'])
       {
         
          $senderID=$row['sender_id'];
          $sql1 = "SELECT * FROM data WHERE id='$senderID'";
          $result1 = mysqli_query($conn,$sql1);

         while($row1 = mysqli_fetch_array($result1)){
            $sids[ ] = $row1['id'];
        //    echo $sids[$i];
            $i++;
         }

      }
   }
     $usids = array_unique($sids);
     sort($usids);
    for($x = 0; $x <count($usids); $x++) {
      $sql1 = "SELECT * FROM data WHERE id='$usids[$x]'";
      $result1 = mysqli_query($conn,$sql1);
      while($row1 = mysqli_fetch_array($result1)){
      if($usids[$x]!=$_SESSION['id'])
      {
         echo "<a href='http://localhost/WebProject-main/chat1.php?idd={$usids[$x]}' class='btn btn-primary'>{$row1['First_Name']}</a>";

      }

    }
   }

}
}

  
 ?>   
<body>

</textarea>
</body>

