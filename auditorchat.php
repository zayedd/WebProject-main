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
  textarea {
    width: 410px;
    height: 150px;
    text-align: center;
    display: block;
    margin-left: auto;
    margin-right: auto;
  }

  
  .col-lg-4{
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
  }
  .btn-danger{
    margin-top: 20px;
margin-left: 100px;
border-radius: 10px;
  }
  .messageperson 
  {
    text-align: center;
  }
  </style>
    <div class='messageperson'>

 <?php  echo " <h3>Chat between : ";
  echo $_SESSION['user1'];
   echo " and ";
    echo $_SESSION['admin1'];
    echo"</h3>"
    ?>
    </div>
  <textarea rows="10" columns ="15" readonly>
  <?php
  
   $type=$_SESSION['t'];
   $ID=$_SESSION['id'];
   if(isset($_GET['idd'])){ 
    $id=$_GET['idd'];
    $query = "SELECT * FROM chats WHERE id = $id";
    $result = mysqli_query($conn , $query);
    $row = mysqli_fetch_array($result);
    $adminID = $row['admin_id'];
    $userID = $row['user_id'];
    $sqln = "SELECT * FROM data WHERE id='$adminID'";
    $sqln3 = "SELECT * FROM data WHERE id='$userID'";
    $sqln2 = "SELECT * FROM messages WHERE sender_id=$adminID or sender_id = $userID ";

    $resultn3 = mysqli_query($conn , $sqln3);
    $resultn2 = mysqli_query($conn,$sqln2);
    $resultn = mysqli_query($conn,$sqln);
    $rown= mysqli_fetch_array($resultn);
    $rown3= mysqli_fetch_array($resultn3);
    $adminname = $rown['First_Name'];
    $username = $rown3['First_Name'];
  
    while($rown2 = mysqli_fetch_array($resultn2)) 
    {
     if($rown2['sender_id'] == $adminID){echo $adminname . ": ". $rown2['message'] . "&#13;&#10;";}
     else if($rown2['sender_id'] == $userID){echo $username . ": ". $rown2['message'] . "&#13;&#10;";}
    }





} 
    ?>
     </textarea>
     <?php
     if($type=="auditor")
     {
       ?>
      <form method='POST'>
      <div class="form-group row">
      <div class="col-lg-4">
      <input type="text" name="comment" class="form-control" placeholder="Comment on anyting...">
      
     <input type="submit" value="Comment and Send to HR" class="btn btn-danger" name="submit">
     </div>
  </div>
     </form>

     <?php
     if(isset($_POST["submit"]) && (!empty($_POST['comment'])))
     {
     $comment = $_POST['comment'];
     $chatID = $id;
     $auditorID = $_SESSION['id'];
     $sqlm="INSERT INTO auditor_comments (chat_id,auditor_id,comment) VALUES ('$chatID','$auditorID','$comment')";
     $resultm = mysqli_query($conn,$sqlm);
     if($resultm)
     {
         echo"Comment submited";
     }
     }
    }
    else if ($type=="hr")
    {
      $sqlcom="SELECT * FROM auditor_comments WHERE chat_ID = '$id'";
      $resultcom=mysqli_query($conn,$sqlcom);
      $row = mysqli_fetch_array($resultcom);
      echo"<h4> Auditor Comment: {$row['comment']} </h4>";
     
      ?>
      <form method="POST">
      <input type="submit" name="submit" class="btn btn-danger" value="Add Penalty To Admin" style="margin-left: 540px;">
      </form>
    <?php
    if(isset($_POST["submit"]))
    {
    $sql="INSERT INTO penalties (admin_id, hr_id) VALUES ($adminID,$ID)";
    $result= mysqli_query($conn, $sql);
    if($result)
    {
      echo"Penalty added to the Admin";
    }
    }
  }
      ?>