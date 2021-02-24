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
$userid = $_SESSION['id'];
$sql = "SELECT * FROM cart WHERE user_id = '$userid'";
$result2 = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result2);
$cartid = $row['id'] ;     

//$sql = "SELECT * FROM cart_groups WHERE cart_id = $cartid INNER JOIN groups ON cart_groups.group_id = groups.id";
$sql = "SELECT * FROM cart_groups WHERE cart_id = $cartid";

$result2 = mysqli_query($conn, $sql);
$data = array( );
$data2 = array( );
while($row = mysqli_fetch_array($result2))
{
  $gid = $row['group_id']; 
  $sql = "SELECT * FROM groups WHERE id = $gid";
  $result3 = mysqli_query($conn , $sql);
  ?>
  <?php
  while($row = mysqli_fetch_array($result3))
  {
    $data[ ] = $row;
  }
} 
?>
<div class="container" style="width:500px;">
  <h2 allign=""> Cart
  <br><br>
  <div class="table-responsive">
    <table class="table table-striped">
      <tr>
         <th>Place</th>
         <th>Date and Time</th>
         <th>Price</th>
         <th>Remove</th>
      </tr>

<?php
 $c = count($data);
 $total=0;
 
 $sql = "SELECT * FROM cart_groups WHERE cart_id = $cartid";
 
 $result2 = mysqli_query($conn, $sql);

 while($row = mysqli_fetch_array($result2)){
  $data2[ ] = $row;
}
   for($i=0; $i<$c; $i++)
      {
    
        ?>
<tr>
        <td><?php echo $data[$i]["place"];?></td>
        <td><?php echo $data[$i]["datetime"];?></td>
        <td><?php echo $data[$i]["price"];?></td>
        <?php
        echo " <th> <a href='http://localhost/WebProject-main/deletecrt.php?id={$data2[$i]['crt_id']}' class='btn btn-danger btn-sm'>Delete<th> </a> ";
       ?>

    </tr>
<?php
             $price= $data[$i]['price'];
             $total += $price;
      }

     ?>
      </table>
      <br>
      <h3> Total: <?php echo $total; ?> EGP</h3>
      <form method="post" action="orders.php?id=<?php echo $cartid;?>"> 
      <button  type="submit" name="confirm" class="btn btn-primary">Confirm Transaction</button>
      </form>
         <?php
         if(isset($_POST["confirm"]))
         {
           
         }
          ?>
</body>