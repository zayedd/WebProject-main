</head>
  <body>
  <h3>My Orders</h3>
  <?php
<<<<<<< Updated upstream
=======
  session_start();
  require_once("connectionproject.php");
>>>>>>> Stashed changes
  $userID=$_SESSION['id'];

   $type=$_SESSION['t'];
  if(isset($_GET['id'])){ 
    $id=$_GET['id'];
    $sql = "SELECT * FROM cart_groups WHERE cart_id ='$id'";
<<<<<<< Updated upstream
=======
  }
>>>>>>> Stashed changes
    $result = mysqli_query($conn, $sql);
    $i = 0;
    while($row = mysqli_fetch_array($result)) {
      $groupID = $row['group_id'];
      $sql1= "SELECT * FROM groups WHERE id = '$groupID'";
      $result1 = mysqli_query($conn, $sql1);
      $row1 = mysqli_fetch_array($result1);
     $sql2 = "INSERT INTO confirmed_orders (cart_id,group_id) VALUES ($id,$groupID)";
     $result2 = mysqli_query($conn, $sql2);
      echo" <div class='card' style='width: 18rem;'>";
      echo "<img class='card-img-top' src='".$row1['photo']."' alt='Card image cap'>";
    echo"<div class='card-body'>";
      echo"<h5 class='card-title'>{$row1['place']}</h5>";
      echo"<h6 class='card-text'>{$row1['country']}</h6>";
      echo "<a href='http://localhost/WebProject-main/grp.php?id={$row1['id']}' class='btn btn-primary'>Group Details</a>";
      echo "<a href='./rate-group.php?id={$row1['id']}' class='btn btn-primary'>Rate Group</a>";
      echo "</div>";
 echo"</div>"; 

 $sql2 = "DELETE FROM cart_groups WHERE cart_id = '$id'";

  }
<<<<<<< Updated upstream
}
=======
>>>>>>> Stashed changes
