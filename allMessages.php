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
  
  if($type=="auditor")
  {
$query = "SELECT * FROM chats";
$result = mysqli_query($conn , $query);
while($row = mysqli_fetch_array($result))
{

    $adminid = $row['admin_id'];
    $userid = $row['user_id'];
    $query2  = "SELECT * FROM data WHERE id = '$userid'";
    $query22 =  "SELECT * from data WHERE id = '$adminid'";
    $result2 = mysqli_query($conn , $query2);
    $result22 = mysqli_query($conn , $query22);
    while(($row2 = mysqli_fetch_array($result2)) && ($row22 = mysqli_fetch_array($result22)))
    {
      $u1 = $row2['First_Name'];
      $u2 = $row22['First_Name'];
      $_SESSION['user1']=$u1;
      $_SESSION['admin1']=$u2;
      $ut = "Chat between : " .  $u2 . " and " . $u1;
      echo "<a href='auditorchat.php?idd={$row['id']}' class='btn btn-primary'>{$ut}</a>";
      echo "<br>";      echo "<br>";

    }
}
  }
if($type == "hr")
{
  $sql = "SELECT * FROM auditor_comments";
  $result = mysqli_query($conn, $sql);
  while($row=mysqli_fetch_array($result))
  {
   $chatID=$row['chat_id'];
   $sql1 = "SELECT * FROM chats WHERE id = '$chatID'";
   $result1 = mysqli_query($conn, $sql1);
   $row1=mysqli_fetch_array($result1);
   $adminid = $row1['admin_id'];
   $userid = $row1['user_id'];
   $query2  = "SELECT * FROM data WHERE id = '$userid'";
   $query22 =  "SELECT * from data WHERE id = '$adminid'";
   $result2 = mysqli_query($conn , $query2);
   $result22 = mysqli_query($conn , $query22);
   while(($row2 = mysqli_fetch_array($result2)) && ($row22 = mysqli_fetch_array($result22)))
   {
     $u1 = $row2['First_Name'];
     $u2 = $row22['First_Name'];
     $_SESSION['user1']=$u1;
     $_SESSION['admin1']=$u2;
     $ut = "Chat between : " .  $u2 . " and " . $u1;
     echo "<a href='auditorchat.php?idd={$row1['id']}' class='btn btn-primary'>{$ut}</a>";
     echo "<br>";      echo "<br>";
  }
}
}
?>