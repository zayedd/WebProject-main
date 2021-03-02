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

  .messageperson 
  {
    text-align: center;
  }
  
 
  .col-lg-4{
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
  }
  .btn-primary{
margin-left: 170px;
border-radius: 10px;
  }
  </style>
  <?php
  
   $type=$_SESSION['t'];
  if(isset($_GET['idd'])){ 
    $id=$_GET['idd'];
    $senderID = $_SESSION['id'];
    $sql = "SELECT * FROM data WHERE id='$id'";
    $result = mysqli_query($conn,$sql);
    $row= mysqli_fetch_array($result);
    echo"<div class='messageperson'>";
     echo "<h3>Message ".$row['First_Name'].".</h3>";
     echo"</div>";
    
     $sql3 ="SELECT * FROM data WHERE id='$senderID'";
     $result3= mysqli_query($conn,$sql3);
     $row3= mysqli_fetch_array($result3);
     $chat_id=0;
    
  }
 ?>
 <br>
 
 
   <textarea rows="10" columns ="50" readonly>
   
  <?php
  echo"&#13;&#10;";
  
 $sql2="SELECT * FROM messages WHERE sender_id ='$senderID'";
 $result2 = mysqli_query($conn,$sql2);
 
  if(isset($_POST["send"]))
  {
    $msg = $_POST['message'];
    
    $recieverID = $id;
    $querycheck="SELECT * FROM chats WHERE admin_id = '$id' AND user_id = '$senderID'";
    //echo $querycheck;
    $resultcheck = mysqli_query($conn,$querycheck);
  
    if(mysqli_num_rows($resultcheck)==0)
         {
          $sql0= "SELECT * FROM messages WHERE chat_id = '$chat_id'";
        
          
          $result0 = mysqli_query($conn,$sql0);
          $row0= mysqli_fetch_array($result0);
          
          $sql7="INSERT INTO chats (user_id,admin_id) VALUES ('$senderID','$id')";
          
          $result7 = mysqli_query($conn,$sql7);
          $querycheck1="SELECT * FROM chats WHERE admin_id = '$id' or user_id = '$senderID'";
          
          $resultcheck1 = mysqli_query($conn,$querycheck1);
          $rowcheck1= mysqli_fetch_array($resultcheck1);
          $chat_id= $rowcheck1['id'];
          $adminID=$row0['admin_id'];
          $userID=$row0['user_id'];
          $sql1 ="INSERT INTO messages (sender_id,reciever_id,message,chat_id) VALUES('$senderID','$recieverID','$msg','$chat_id')";
          $result1 = mysqli_query($conn,$sql1);
          
         }
         else{
          
           $sql0= "SELECT * FROM messages WHERE chat_id = '$chat_id'";
           $result0 = mysqli_query($conn,$sql0);
           $row0= mysqli_fetch_array($result0);
   
          $querycheck1="SELECT * FROM chats WHERE admin_id = '$id' or user_id = '$senderID' AND admin_id = '$senderID' or user_id = '$id'";
          $resultcheck1 = mysqli_query($conn,$querycheck1);
          $rowcheck1= mysqli_fetch_array($resultcheck1);
          $chat_id= $rowcheck1['id'];
          $adminID=$rowcheck1['admin_id'];
          $userID=$rowcheck1['user_id'];
          $sql1 ="INSERT INTO messages (sender_id,reciever_id,message,chat_id) VALUES('$senderID','$recieverID','$msg','$chat_id')";
          $result1 = mysqli_query($conn,$sql1);

        }
     
    // $sql1 ="INSERT INTO messages (sender_id,reciever_id,message) VALUES('$senderID','$recieverID','$msg')";
    // $result1 = mysqli_query($conn,$sql1);
   
    
   // header("refresh:1");
  
   
   if($type=="admin")
   {
     
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
     if(mysqli_num_rows($resultn2)>0){
     
     while($rown2 = mysqli_fetch_array($resultn2)) 
     {
      if($rown2['sender_id'] == $adminID){echo $adminname . ": ". $rown2['message'] . "&#13;&#10;";}
      else if($rown2['sender_id'] == $userID){echo $username . ": ". $rown2['message'] . "&#13;&#10;";}
      
     }
    }

 }
   if($type=="user")
   {
     
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
     if($resultn2)
     {
     while($rown2 = mysqli_fetch_array($resultn2)) 
     {
       
      if($rown2['sender_id'] == $adminID){echo $adminname . ": ". $rown2['message'] . "&#13;&#10;";}
      else if($rown2['sender_id'] == $userID){echo $username . ": ". $rown2['message'] . "&#13;&#10;";}
     }

    }
    
  
   }
   if($type=="auditor")
   {
     
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
        
       
        
        
    }
 

  ?>
  
  </textarea>
<?php 
if($type != 'auditor'){
?>
  <form method="post">
  <div class="form-group row">
  <div class="col-lg-4">
  <input type="text" class="form-control" id="message" name="message" width ="2" placeholder="Enter your message...">
  <br>
  <input type="submit" class="btn-lg btn-primary" name="send" value="Send">
  </div>
  </div>
  </form>
  <?php 
  }
 else 
 {?>
  <form method="post"> -->
  <input type="text" class="form-control" id="message" name="message" placeholder="Comment on anyting...">
  <button type="submit" class="btn btn-primary" name="comment">Comment</button>
  </form> 
 <?php } 
  
  ?>

 
  
