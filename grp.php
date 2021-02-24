<?php
session_start();
require_once("navbar.php");
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
        include("connectionproject.php");
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $sql = "SELECT * FROM groups WHERE id='$id'";
            $result = mysqli_query($conn,$sql);
            $row= mysqli_fetch_array($result);
        }
        if(isset($_POST['submit']))
        {
          
          $uid = $_SESSION['id'];
          
         $query="SELECT * FROM cart WHERE user_id=$uid";
       //  echo $query;
         $result = mysqli_query($conn,$query);
         if(mysqli_num_rows($result)==0)
         {
          $query2 = "INSERT INTO cart (user_id) VALUES($uid)";
          $result = mysqli_query($conn,$query2);
         }
         else
         {
          $query3 = "SELECT * FROM cart WHERE user_id = $uid";
        //  echo $query3;
          $result = mysqli_query($conn, $query3);
          $result2 = mysqli_fetch_array($result);   
          $cartid = $result2['id'] ;     

          $query4 = "INSERT INTO cart_groups (cart_id , group_id) VALUES ($cartid , $id)";
          $result = mysqli_query($conn,$query4);

          echo $query4;

         }
        }


        ?> 



<div class="card mb-3">
 
 <form  method="POST" ?>
  <img class="card-img-top" src='<?php echo"{$row['photo']}" ?>' alt="place photo" width="20" height="300">
  <div class="card-body">
    <h5 name="place" class="card-title"><?php echo"{$row['place']}" ?></h5>
    <h7 class="card-text">Date & time: <?php echo"{$row['datetime']}" ?></h7>
    <br>
    <h7 class="card-text"> Price: <?php echo"{$row['price']}" ?></h7>
    <br>
    
    <input type="hidden" name="hidden_id" value="<?php echo"{$row['id']}" ?>">
    <input type="hidden" name="hidden_name" value="<?php echo"{$row['place']}" ?>">
    <input type="submit" class="btn btn-dark" name="submit" value="Add To Cart">
  </div>
  </form>
</div>
        
</body>
</html>