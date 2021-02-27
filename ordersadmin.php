<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
  <body>
  
  <?php
  session_start();
  require_once("connectionproject.php");
  require_once("navbar.php");
  $userID=$_SESSION['id'];
 echo" <h3>History of made Orders</h3>";
    $sql3 = "SELECT * FROM confirmed_orders";
    $result3 = mysqli_query($conn, $sql3);
    while($row3 = mysqli_fetch_array($result3)) {
      $groupID = $row3['group_id'];        
     $sql5 = "SELECT * FROM groups WHERE id = '$groupID'";
     $result2 = mysqli_query($conn, $sql5);
     $row1 = mysqli_fetch_array($result2);
     $cartid = $row3['cart_id'];
     $sql2 = "SELECT * FROM cart WHERE id=$cartid";
     $result22 = mysqli_query($conn , $sql2);
     $row2 = mysqli_fetch_array($result22);
     echo" <div class='card' style='width: 18rem;'>";
     echo "<img class='card-img-top' src='".$row1['photo']."' alt='Card image cap'>";
   echo"<div class='card-body'>";
     echo"<h5 class='card-title'>{$row1['place']}</h5>";
     echo"<h5 class='card-title'>Purchased by user with ID OF : {$row2['user_id']}</h5>";
     echo"<h6 class='card-text'>{$row1['country']}</h6>";
     echo "<a href='http://localhost/WebProject-main/grp.php?id={$row1['id']}' class='btn btn-primary'>Group Details</a>";
     echo "<a href='./rate-group.php?id={$row1['id']}' class='btn btn-primary'>Rate Group</a>";
     echo "</div>";
echo"</div>"; 



 }